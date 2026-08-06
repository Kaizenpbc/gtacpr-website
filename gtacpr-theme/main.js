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

  var btn=document.getElementById('hbBtn'),
      drawer=document.getElementById('drawer'),
      ov=document.getElementById('dOverlay'),
      cl=document.getElementById('dClose');

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

  // Booking modal
  var bookingOverlay = document.getElementById('bookingOverlay');
  var bookingClose   = document.getElementById('bookingClose');
  var bookingModal   = bookingOverlay.querySelector('.booking-modal');
  var _bookingOpener = null;
  function openBooking(e){ e.preventDefault(); _bookingOpener = e.currentTarget; bookingOverlay.classList.add('open'); document.body.style.overflow='hidden'; bookingClose.focus(); }
  function closeBooking(){ bookingOverlay.classList.remove('open'); document.body.style.overflow=''; if(_bookingOpener){ _bookingOpener.focus(); _bookingOpener=null; } }
  document.querySelectorAll('.open-booking').forEach(function(el){ el.addEventListener('click', openBooking); });
  bookingClose.addEventListener('click', closeBooking);
  bookingOverlay.addEventListener('click', function(e){ if(e.target===bookingOverlay) closeBooking(); });
  document.addEventListener('keydown', function(e){
    if (bookingOverlay.classList.contains('open')) {
      if (e.key === 'Escape') { closeBooking(); return; }
      trapFocus(bookingModal, e);
    }
  });

  // FAQ accordion (shared across all pages)
  document.querySelectorAll('.faq-trigger').forEach(function(t){
    t.addEventListener('click', function(){
      var item = t.closest('.faq-item');
      var isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(function(i){
        i.classList.remove('open');
        i.querySelector('.faq-trigger').setAttribute('aria-expanded','false');
      });
      if(!isOpen){
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
})();
