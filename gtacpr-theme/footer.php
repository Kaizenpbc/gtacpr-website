<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
</main>

<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/gtacpr-logo.png" alt="GTA CPR" width="325" height="88" style="height:44px;width:auto;display:block;margin-bottom:12px;filter:brightness(0) invert(1)" loading="lazy" />
        <p class="footer-tagline">Greater Toronto Area's trusted WSIB Approved CPR and First Aid training provider. Serving individuals, workplaces, and newcomers since <?php echo esc_html( gtacpr_config('since') ); ?>.</p>
        <div class="footer-contact">
          <a href="tel:<?php echo esc_attr( gtacpr_phone_raw() ); ?>"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14z"/></svg> <?php echo esc_html( gtacpr_phone() ); ?></a>
          <a href="mailto:<?php echo esc_attr( gtacpr_email() ); ?>"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> <?php echo esc_html( gtacpr_email() ); ?></a>
          <a href="<?php echo esc_url( gtacpr_url('contact') ); ?>#map"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> <?php echo esc_html( gtacpr_address() ); ?></a>
        </div>
      </div>
      <div class="footer-col">
        <div class="footer-col-title">Courses</div>
        <ul>
          <li><a href="<?php echo esc_url( gtacpr_url('register') ); ?>">Basic First Aid</a></li>
          <li><a href="<?php echo esc_url( gtacpr_url('register') ); ?>">Intermediate First Aid</a></li>
          <li><a href="<?php echo esc_url( gtacpr_url('register') ); ?>">Recertification</a></li>
          <li><a href="<?php echo esc_url( gtacpr_url('esl') ); ?>">ESL Classes</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <div class="footer-col-title">Company</div>
        <ul>
          <li><a href="<?php echo esc_url( gtacpr_url('about') ); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url( gtacpr_url('group-training') ); ?>">Group Training</a></li>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>#reviews">Reviews</a></li>
          <li><a href="<?php echo esc_url( gtacpr_url('contact') ); ?>">Contact</a></li>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>#faq">FAQ</a></li>
          <li><a href="<?php echo esc_url( gtacpr_url('privacy-policy') ); ?>">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
    <!-- WSIB First Aid Program Badge -->
    <div class="wsib-badge-row">
      <a href="https://www.virtualbadge.io/certificate-validator?credential=1e259afa-4016-4c00-bc46-bd7ef0c180bd" target="_blank" rel="noopener noreferrer" class="wsib-credential">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <span>
          <strong>WSIB Approved Provider</strong>
          We're approved by the WSIB to deliver workplace first aid training in Ontario.
          <span class="wsib-verify">Verify Credential →</span>
        </span>
      </a>
    </div>
    <!-- French Language Active Offer (WSIB Appendix A requirement) -->
    <div class="french-offer">
      <p lang="fr">Ce fournisseur de formation agréé n'offre pas actuellement de services de formation en premiers soins en français. Pour trouver un fournisseur offrant des services en français, veuillez consulter le <a href="https://www.wsib.ca" rel="noopener noreferrer" target="_blank">site Web de la WSIB</a>.</p>
    </div>
    <div class="footer-bottom">
      <span>© <?php echo wp_date('Y'); ?> GTACPR. All rights reserved.</span>
      <div class="footer-badges">
        <span class="footer-badge">WSIB Approved</span>
        <span class="footer-badge">Serving GTA Since <?php echo esc_html( gtacpr_config('since') ); ?></span>
      </div>
    </div>
  </div>
</footer>

<div class="mob-cta" role="toolbar" aria-label="Quick actions">
  <a href="tel:<?php echo esc_attr( gtacpr_phone_raw() ); ?>" class="mob-call"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14z"/></svg> Call Now</a>
  <a href="<?php echo esc_url( gtacpr_url('register') ); ?>" class="mob-book open-booking">Book a Class →</a>
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
    <div class="booking-modal-body">
      <div class="booking-spinner" aria-hidden="true"></div>
      <iframe data-src="<?php echo esc_url( gtacpr_config('booking_url') ); ?>" title="Book a CPR class" allowfullscreen></iframe>
    </div>
  </div>
</div>

<?php
$_cfg = gtacpr_config();
$_url = defined('GTACPR_SITE_URL') ? GTACPR_SITE_URL : home_url('/');
$_areas = array_map( function( $a ) { return [ '@type' => 'City', 'name' => $a ]; }, $_cfg['service_areas'] );
$_schema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'LocalBusiness',
    '@id'             => $_url . '#business',
    'name'            => $_cfg['name'],
    'description'     => $_cfg['tagline'],
    'url'             => $_url,
    'telephone'       => '+1-' . $_cfg['phone'],
    'email'           => $_cfg['email'],
    'foundingDate'    => $_cfg['since'] . '-01-01',
    'priceRange'      => '$',
    'image'           => $_url . 'wp-content/themes/gtacpr-theme/assets/gtacpr-logo.png',
    'address'         => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $_cfg['address'],
        'addressLocality' => $_cfg['city'],
        'addressRegion'   => $_cfg['province'],
        'postalCode'      => $_cfg['postal_code'],
        'addressCountry'  => $_cfg['country'],
    ],
    'areaServed'      => $_areas,
    'openingHoursSpecification' => [
        '@type'     => 'OpeningHoursSpecification',
        'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
        'opens'     => '09:00',
        'closes'    => '17:00',
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
        ['@type' => 'Question', 'name' => 'How long is the course?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Basic First Aid is a full day (8 hours). Intermediate First Aid runs over two days (16 hours). Blended options combine online theory with a shorter in-person skills session.']],
        ['@type' => 'Question', 'name' => 'Do you offer recertification?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes — blended recertification lets you complete theory online, then attend a shorter in-person practical session.']],
        ['@type' => 'Question', 'name' => 'What should I bring to class?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Just yourself and comfortable clothing. All equipment, mannequins, AED trainers, and materials are provided. Your digital certificate is emailed the same day.']],
        ['@type' => 'Question', 'name' => 'Do you offer group or student discounts?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes — student discounts with valid ID, and group discounts for 3+ people registering together. Contact us for custom workplace group pricing.']],
        ['@type' => 'Question', 'name' => 'What is your cancellation policy?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Full refund or free reschedule with 48 hours notice for individuals. No cancellation fees for group/on-site training with 24 hours notice.']],
    ],
]); ?></script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
