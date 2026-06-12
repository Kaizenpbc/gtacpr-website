<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/gtacpr-logo.png" alt="GTA CPR — Get Certified!" style="height:44px;width:auto;display:block;margin-bottom:12px;filter:brightness(0) invert(1)" />
        <p class="footer-tagline">Greater Toronto Area's trusted WSIB Approved CPR and First Aid training provider. Serving individuals, workplaces, and newcomers since 2013.</p>
        <div class="footer-contact">
          <a href="tel:<?php echo esc_attr( gtacpr_phone_raw() ); ?>">📞 <?php echo esc_html( gtacpr_phone() ); ?></a>
          <a href="mailto:<?php echo esc_attr( gtacpr_email() ); ?>">✉ <?php echo esc_html( gtacpr_email() ); ?></a>
          <a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>#map">📍 <?php echo esc_html( gtacpr_address() ); ?></a>
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
      <div class="footer-col">
        <div class="footer-col-title">Service Areas</div>
        <ul>
          <li><a href="#">CPR Markham</a></li>
          <li><a href="#">CPR Scarborough</a></li>
          <li><a href="#">CPR North York</a></li>
          <li><a href="#">CPR Mississauga</a></li>
          <li><a href="#">CPR Brampton</a></li>
          <li><a href="#">CPR Richmond Hill</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© <?php echo date('Y'); ?> GTACPR. All rights reserved.</span>
      <div class="footer-badges">
        <span class="footer-badge">WSIB Approved</span>
        <span class="footer-badge">Serving GTA Since 2013</span>
        <span class="footer-badge">4.9 ★ Google</span>
      </div>
    </div>
  </div>
</footer>

<div class="mob-cta" aria-label="Quick actions">
  <a href="tel:<?php echo esc_attr( gtacpr_phone_raw() ); ?>" class="mob-call">📞 Call Now</a>
  <a href="#" class="mob-book open-booking">Book a Class →</a>
</div>

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
$_schema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'LocalBusiness',
    'name'            => $_cfg['name'],
    'url'             => defined('GTACPR_SITE_URL') ? GTACPR_SITE_URL : home_url('/'),
    'telephone'       => '+1-' . $_cfg['phone'],
    'email'           => $_cfg['email'],
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
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => $_cfg['rating'],
        'reviewCount' => $_cfg['review_count'],
    ],
];
?>
<script type="application/ld+json"><?php echo wp_json_encode( $_schema ); ?></script>

<script>
(function(){
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
    if(e.key==='Escape' && document.body.classList.contains('drawer-open')) closeDrawer();
  });

  // Booking modal
  var bookingOverlay = document.getElementById('bookingOverlay');
  var bookingClose   = document.getElementById('bookingClose');
  function openBooking(e){ e.preventDefault(); bookingOverlay.classList.add('open'); document.body.style.overflow='hidden'; }
  function closeBooking(){ bookingOverlay.classList.remove('open'); document.body.style.overflow=''; }
  document.querySelectorAll('.open-booking').forEach(function(el){ el.addEventListener('click', openBooking); });
  bookingClose.addEventListener('click', closeBooking);
  bookingOverlay.addEventListener('click', function(e){ if(e.target===bookingOverlay) closeBooking(); });
  document.addEventListener('keydown', function(e){ if(e.key==='Escape') closeBooking(); });

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
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
