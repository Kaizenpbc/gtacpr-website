(function(){
  var FOCUSABLE = 'a[href],button:not([disabled]),input:not([disabled]),select:not([disabled]),textarea:not([disabled]),[tabindex]:not([tabindex="-1"])';

  function trapFocus(container, e) {
    var nodes = Array.prototype.slice.call(container.querySelectorAll(FOCUSABLE));
    if (!nodes.length) return;
    var first = nodes[0], last = nodes[nodes.length - 1];
    if (e.key === 'Tab') {
      if (e.shiftKey) { if (document.activeElement === first) { e.preventDefault(); last.focus(); } }
      else            { if (document.activeElement === last)  { e.preventDefault(); first.focus(); } }
    }
  }

  // Drawer
  var btn=document.getElementById('hbBtn'),
      drawer=document.getElementById('drawer'),
      ov=document.getElementById('dOverlay'),
      cl=document.getElementById('dClose');

  if (btn && drawer && ov && cl) {
    function openDrawer(){
      document.body.classList.add('drawer-open');
      btn.setAttribute('aria-expanded','true');
      cl.focus();
    }
    function closeDrawer(){
      document.body.classList.remove('drawer-open');
      btn.setAttribute('aria-expanded','false');
      btn.focus();
    }

    btn.addEventListener('click', openDrawer);
    cl.addEventListener('click', closeDrawer);
    ov.addEventListener('click', closeDrawer);
    drawer.querySelectorAll('a').forEach(function(a){
      a.addEventListener('click', closeDrawer);
    });
    document.addEventListener('keydown', function(e){
      if (document.body.classList.contains('drawer-open')) {
        if (e.key === 'Escape') { closeDrawer(); return; }
        trapFocus(drawer, e);
      }
    });
  }

  // Booking modal
  var bookingOverlay = document.getElementById('bookingOverlay');
  var bookingClose   = document.getElementById('bookingClose');

  if (bookingOverlay && bookingClose) {
    var bookingModal   = bookingOverlay.querySelector('.booking-modal');
    var _bookingOpener = null;
    function openBooking(e){
      e.preventDefault(); _bookingOpener = e.currentTarget; bookingOverlay.classList.add('open'); document.body.style.overflow='hidden';
      var iframe = bookingOverlay.querySelector('iframe');
      if (iframe && !iframe.src && iframe.dataset.src) { iframe.src = iframe.dataset.src; }
      bookingClose.focus();
    }
    function closeBooking(){ bookingOverlay.classList.remove('open'); document.body.style.overflow=''; if(_bookingOpener){ _bookingOpener.focus(); _bookingOpener=null; } }
    document.querySelectorAll('.open-booking').forEach(function(el){ el.addEventListener('click', openBooking); });
    bookingClose.addEventListener('click', closeBooking);
    bookingOverlay.addEventListener('click', function(e){ if(e.target===bookingOverlay) closeBooking(); });
    document.addEventListener('keydown', function(e){
      if (bookingOverlay.classList.contains('open')) {
        if (e.key === 'Escape') { closeBooking(); return; }
        if (bookingModal) trapFocus(bookingModal, e);
      }
    });
  }

  // FAQ accordion — independent toggle (multiple can be open)
  document.querySelectorAll('.faq-trigger').forEach(function(t, i){
    var item = t.closest('.faq-item');
    if (!item) return;
    var answer = item.querySelector('.faq-answer');
    if (!answer) return;
    var id = 'faq-answer-' + i;
    answer.id = id;
    answer.setAttribute('role', 'region');
    answer.setAttribute('aria-labelledby', 'faq-trigger-' + i);
    t.id = 'faq-trigger-' + i;
    t.setAttribute('aria-controls', id);
    var isInitiallyOpen = item.classList.contains('open');
    t.setAttribute('aria-expanded', isInitiallyOpen ? 'true' : 'false');
    t.addEventListener('click', function(){
      var isOpen = item.classList.contains('open');
      if(isOpen){
        item.classList.remove('open');
        t.setAttribute('aria-expanded','false');
      } else {
        item.classList.add('open');
        t.setAttribute('aria-expanded','true');
      }
    });
  });

  // Dismissible topbar (MOB-01)
  var topbar = document.getElementById('topbar');
  var topbarClose = document.getElementById('topbarClose');
  if (topbar && topbarClose) {
    topbarClose.addEventListener('click', function(){
      topbar.classList.add('dismissed');
    });
  }

  // Bottom bar: reveal only after hero scrolls out (MOB-01)
  var mobCta = document.querySelector('.mob-cta');
  if (mobCta) {
    var hero = document.querySelector('.hero, .page-hero');
    if (hero) {
      var observer = new IntersectionObserver(function(entries){
        mobCta.classList.toggle('visible', !entries[0].isIntersecting);
      }, { threshold: 0 });
      observer.observe(hero);
    } else {
      mobCta.classList.add('visible');
    }
  }
  // Course quicknav scroll-spy
  var qnav = document.querySelector('.course-quicknav');
  if (qnav) {
    var sections = document.querySelectorAll('.course-detail, .cd-group-band');
    var links = qnav.querySelectorAll('.cqn-item');
    if (sections.length && links.length) {
      var spyObserver = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
          if (entry.isIntersecting) {
            var id = entry.target.id;
            links.forEach(function(l){
              if (l.getAttribute('href') === '#' + id) {
                l.classList.add('cqn-active');
              } else {
                l.classList.remove('cqn-active');
              }
            });
          }
        });
      }, { rootMargin: '-120px 0px -60% 0px', threshold: 0 });
      sections.forEach(function(s){ spyObserver.observe(s); });
    }
  }
  // ── Shared Formspree form handler (CQ-04) ──
  // Usage: gtacprForm({ formId, successId, formspreeId, phone, successMsg, btnLabel })
  window.gtacprForm = function(cfg) {
    var form    = document.getElementById(cfg.formId);
    var success = document.getElementById(cfg.successId);
    if (!form) return;
    var submitBtn = form.querySelector('[type="submit"]');
    if (!submitBtn) return;
    var btnLabel  = cfg.btnLabel || submitBtn.textContent;

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      var valid = true;
      form.querySelectorAll('[required]').forEach(function(f) {
        if (!f.value.trim()) { f.style.borderColor='var(--red)'; f.setAttribute('aria-invalid','true'); valid=false; }
        else { f.style.borderColor=''; f.removeAttribute('aria-invalid'); }
      });
      if (!valid) { var a=document.getElementById('formAnnounce'); if(a) a.textContent='Please fill in all required fields.'; return; }
      var hp = form.querySelector('[name="_gotcha"]');
      if (hp && hp.value) return;
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending…';

      fetch('https://formspree.io/f/' + cfg.formspreeId, {
        method: 'POST', headers: {'Accept':'application/json'}, body: new FormData(form)
      })
      .then(function(res) {
        if (res.ok) {
          var body = cfg.bodyId ? document.getElementById(cfg.bodyId) : form;
          if (body) body.style.display = 'none';
          if (success) {
            success.style.display = 'block';
            success.setAttribute('tabindex', '-1');
            success.focus();
          }
          var a=document.getElementById('formAnnounce');
          if(a) a.textContent = cfg.successMsg || 'Message sent successfully.';
        } else {
          submitBtn.disabled = false; submitBtn.textContent = btnLabel;
          alert('Something went wrong. Please call ' + cfg.phone + '.');
        }
      })
      .catch(function() {
        submitBtn.disabled = false; submitBtn.textContent = btnLabel;
        alert('Connection error. Please call ' + cfg.phone + '.');
      });
    });
  };
})();
