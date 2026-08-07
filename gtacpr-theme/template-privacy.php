<?php
/* Template Name: Privacy Policy */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
$contact_url = gtacpr_url('contact');
$home_url    = home_url('/');
$cfg         = gtacpr_config();
?>

<div class="page-hero" style="min-height:auto">
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url($home_url); ?>">Home</a>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
      <span aria-current="page">Privacy Policy</span>
    </nav>
    <h1>Privacy Policy</h1>
    <p class="page-hero-sub">How we collect, use, and protect your personal information.</p>
  </div>
</div>

<div class="section">
  <div class="section-inner" style="max-width:740px;margin:0 auto">

    <p style="color:var(--g400);font-size:13px;margin-bottom:2rem">Last updated: <?php echo wp_date('F j, Y'); ?></p>

    <h2>Who We Are</h2>
    <p><?php echo esc_html($cfg['name']); ?> is a WSIB Approved CPR and First Aid training provider based in <?php echo esc_html($cfg['city']); ?>, Ontario, serving the Greater Toronto Area. Our website address is: <?php echo esc_url($home_url); ?></p>

    <h2>Information We Collect</h2>
    <p>We collect personal information that you voluntarily provide when you:</p>
    <ul>
      <li><strong>Submit a contact form</strong> — name, email, phone number, and your message.</li>
      <li><strong>Request a group training quote</strong> — name, email, phone, organization, group size, and training preferences.</li>
      <li><strong>Apply as a provider</strong> — name, email, phone, organization, location, experience, and certifications.</li>
      <li><strong>Use the chat assistant</strong> — the questions you type in the chat widget during your session.</li>
      <li><strong>Book a class</strong> — booking is handled by our scheduling platform (SimplyBook.me). Their own privacy policy applies to data entered there.</li>
    </ul>

    <h2>How We Use Your Information</h2>
    <p>We use personal information solely to:</p>
    <ul>
      <li>Respond to your enquiry or quote request</li>
      <li>Process your course booking or provider application</li>
      <li>Send you the information you requested</li>
      <li>Issue your WSIB Approved certificate after course completion</li>
    </ul>
    <p>We do not sell, rent, or share your personal information with third parties for marketing purposes.</p>

    <h2>Third-Party Services</h2>
    <p>We use the following third-party services to operate this website:</p>
    <ul>
      <li><strong>Formspree</strong> — processes contact and quote form submissions. <a href="https://formspree.io/legal/privacy-policy/" target="_blank" rel="noopener noreferrer">Formspree Privacy Policy</a></li>
      <li><strong>SimplyBook.me</strong> — handles online class booking and scheduling. <a href="https://simplybook.me/en/privacy" target="_blank" rel="noopener noreferrer">SimplyBook.me Privacy Policy</a></li>
      <li><strong>Anthropic</strong> — powers our chat assistant. Chat messages are processed by Anthropic's API but are not stored by us. <a href="https://www.anthropic.com/privacy" target="_blank" rel="noopener noreferrer">Anthropic Privacy Policy</a></li>
      <li><strong>Google Maps</strong> — displays our service area map. Google may set cookies when the map loads. <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google Privacy Policy</a></li>
      <li><strong>Google Fonts</strong> — serves the typeface used on this site. <a href="https://developers.google.com/fonts/faq/privacy" target="_blank" rel="noopener noreferrer">Google Fonts Privacy</a></li>
    </ul>

    <h2>Cookies</h2>
    <p>This website does not set any first-party cookies. However, embedded third-party services (Google Maps, Google Fonts, SimplyBook.me) may set their own cookies. Please refer to their respective privacy policies above for details.</p>

    <h2>Data Retention</h2>
    <p>Form submissions are retained by Formspree according to their data retention policy. Chat conversations are not stored on our servers — they exist only during your active session. Booking and certification records are retained as required by WSIB regulations.</p>

    <h2>Your Rights</h2>
    <p>Under the Personal Information Protection and Electronic Documents Act (PIPEDA), you have the right to:</p>
    <ul>
      <li>Access the personal information we hold about you</li>
      <li>Request correction of inaccurate information</li>
      <li>Request deletion of your personal information</li>
      <li>Withdraw consent for future communications</li>
    </ul>
    <p>To exercise any of these rights, contact us using the details below.</p>

    <h2>Children's Privacy</h2>
    <p>Our services are not directed at children under 16. We do not knowingly collect personal information from children.</p>

    <h2>Contact Us</h2>
    <p>If you have questions about this privacy policy or how we handle your data:</p>
    <ul>
      <li>Phone: <a href="tel:<?php echo esc_attr( gtacpr_phone_raw() ); ?>"><?php echo esc_html( gtacpr_phone() ); ?></a></li>
      <li>Email: <a href="mailto:<?php echo esc_attr( gtacpr_email() ); ?>"><?php echo esc_html( gtacpr_email() ); ?></a></li>
      <li><a href="<?php echo esc_url($contact_url); ?>">Contact form</a></li>
    </ul>

  </div>
</div>

<?php get_footer(); ?>
