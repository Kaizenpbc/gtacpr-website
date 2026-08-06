</main>

<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/gtacpr-logo.png" alt="" width="325" height="88" style="height:44px;width:auto;display:block;margin-bottom:12px;filter:brightness(0) invert(1)" loading="lazy" />
        <p class="footer-tagline">Greater Toronto Area's trusted WSIB Approved CPR and First Aid training provider. Serving individuals, workplaces, and newcomers since <?php echo esc_html( gtacpr_config('since') ); ?>.</p>
        <div class="footer-contact">
          <a href="tel:<?php echo esc_attr( gtacpr_phone_raw() ); ?>"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14z"/></svg> <?php echo esc_html( gtacpr_phone() ); ?></a>
          <a href="mailto:<?php echo esc_attr( gtacpr_email() ); ?>"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> <?php echo esc_html( gtacpr_email() ); ?></a>
          <a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>#map"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> <?php echo esc_html( gtacpr_address() ); ?></a>
        </div>
      </div>
      <div class="footer-col">
        <div class="footer-col-title">Courses</div>
        <ul>
          <li><a href="<?php echo get_permalink( get_page_by_path('register') ); ?>">CPR Level A</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('register') ); ?>">CPR Level C / AED</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('register') ); ?>">Emergency First Aid</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('register') ); ?>">Standard First Aid</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('register') ); ?>">Recertification</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('esl') ); ?>">ESL Classes</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <div class="footer-col-title">Company</div>
        <ul>
          <li><a href="<?php echo get_permalink( get_page_by_path('about') ); ?>">About Us</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('about') ); ?>#team">Our Instructors</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('group-training') ); ?>">Group Training</a></li>
          <li><a href="<?php echo home_url('/'); ?>#reviews">Reviews</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>">Contact</a></li>
          <li><a href="<?php echo home_url('/'); ?>#faq">FAQ</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© <?php echo date('Y'); ?> GTACPR. All rights reserved.</span>
      <div class="footer-badges">
        <span class="footer-badge">WSIB Approved</span>
        <span class="footer-badge">Serving GTA Since <?php echo esc_html( gtacpr_config('since') ); ?></span>
      </div>
    </div>
  </div>
</footer>

<div class="mob-cta" aria-label="Quick actions">
  <a href="tel:<?php echo esc_attr( gtacpr_phone_raw() ); ?>" class="mob-call"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14z"/></svg> Call Now</a>
  <a href="<?php echo esc_url( get_permalink( get_page_by_path('register') ) ); ?>" class="mob-book open-booking">Book a Class →</a>
</div>

<!-- ARIA live region for form feedback (used by contact + group training forms) -->
<div id="formAnnounce" aria-live="polite" aria-atomic="true" class="sr-only"></div>

<!-- BOOKING MODAL -->
<div class="booking-overlay" id="bookingOverlay" role="dialog" aria-modal="true" aria-label="Book a Class">
  <div class="booking-modal">
    <div class="booking-modal-header">
      <span class="booking-modal-title">Book a Class — GTACPR</span>
      <button class="booking-modal-close" id="bookingClose" aria-label="Close booking">&times;</button>
    </div>
    <iframe src="https://gtacprfrontend.simplybook.me/v2/" title="Book a CPR class" loading="lazy" allowfullscreen></iframe>
  </div>
</div>

<?php
$_cfg = gtacpr_config();
$_url = defined('GTACPR_SITE_URL') ? GTACPR_SITE_URL : home_url('/');
$_schema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'LocalBusiness',
    '@id'             => $_url . '#business',
    'name'            => $_cfg['name'],
    'description'     => $_cfg['tagline'],
    'url'             => $_url,
    'telephone'       => '+1-' . $_cfg['phone'],
    'email'           => $_cfg['email'],
    'foundingDate'    => $_cfg['since'],
    'priceRange'      => '$',
    'address'         => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $_cfg['address'],
        'addressLocality' => $_cfg['city'],
        'addressRegion'   => $_cfg['province'],
        'postalCode'      => $_cfg['postal_code'],
        'addressCountry'  => $_cfg['country'],
    ],
    'areaServed'      => $_cfg['service_areas'],
    'openingHours'    => $_cfg['hours'],
    'sameAs'          => [],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => $_cfg['rating'],
        'reviewCount' => $_cfg['review_count'],
    ],
];
?>
<script type="application/ld+json"><?php echo wp_json_encode( $_schema ); ?></script>
<?php if ( is_front_page() ) : ?>
<script type="application/ld+json"><?php echo wp_json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type' => 'Question', 'name' => 'What certification will I receive?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'You will receive an official WSIB Approved certificate, compliant with Ontario workplace requirements and aligned with the national CSA Z1210 standard.']],
        ['@type' => 'Question', 'name' => 'How long is the course?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'CPR-only courses are typically 4-5 hours. Emergency First Aid is a full day (6.5-7 hours). Standard First Aid runs over two days (14 hours). Blended options combine online theory with a shorter in-person skills session.']],
        ['@type' => 'Question', 'name' => 'Do you offer recertification?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes — blended recertification lets you complete theory online, then attend a shorter in-person practical session.']],
        ['@type' => 'Question', 'name' => 'What should I bring to class?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Just yourself and comfortable clothing. All equipment, mannequins, AED trainers, and materials are provided. Your digital certificate is emailed the same day.']],
        ['@type' => 'Question', 'name' => 'Do you offer group or student discounts?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes — student discounts with valid ID, and group discounts for 3+ people registering together. Contact us for custom workplace group pricing.']],
        ['@type' => 'Question', 'name' => 'What is your cancellation policy?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Full refund or free reschedule with 48 hours notice for individuals. No cancellation fees for group/on-site training with 24 hours notice.']],
    ],
]); ?></script>
<?php endif; ?>

<script>
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
</script>

<?php wp_footer(); ?>
</body>
</html>
