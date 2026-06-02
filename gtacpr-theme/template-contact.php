<?php
/* Template Name: Contact */
get_header();
$esl_url  = get_permalink( get_page_by_path('esl') );
$home_url = home_url('/');
?>

<div class="page-hero">
  <div class="page-hero-bg" role="img" aria-label="GTA CPR contact"></div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url($home_url); ?>">Home</a>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
      <span>Contact</span>
    </nav>
    <h1>Get in Touch</h1>
    <p class="page-hero-sub">We're available 7 days a week. Call, email, or send a message — we typically respond within a few hours.</p>
  </div>
</div>

<div class="contact-section">

  <div class="contact-form-panel">
    <h2>Send Us a Message</h2>
    <p class="panel-sub">Have a question about a course, group booking, or ESL training? Fill in the form and we'll get back to you promptly.</p>

    <form id="contactForm" novalidate>
      <div class="form-row">
        <div class="form-group">
          <label for="firstName">First Name <span class="req">*</span></label>
          <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Jane" required autocomplete="given-name">
        </div>
        <div class="form-group">
          <label for="lastName">Last Name <span class="req">*</span></label>
          <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Smith" required autocomplete="family-name">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="email">Email Address <span class="req">*</span></label>
          <input type="email" id="email" name="email" class="form-control" placeholder="jane@example.com" required autocomplete="email">
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="form-control" placeholder="416-555-0100" autocomplete="tel">
        </div>
      </div>
      <div class="form-group">
        <label for="subject">Subject <span class="req">*</span></label>
        <select id="subject" name="subject" class="form-control" required>
          <option value="" disabled selected>Select a topic…</option>
          <option value="general">General Enquiry</option>
          <option value="course">Course Information</option>
          <option value="group">Group / Workplace Booking</option>
          <option value="esl">ESL Classes</option>
          <option value="reschedule">Reschedule / Cancellation</option>
          <option value="certificate">Certificate / Recertification</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="message">Message <span class="req">*</span></label>
        <textarea id="message" name="message" class="form-control" placeholder="Tell us how we can help…" required rows="5"></textarea>
      </div>
      <button type="submit" class="btn-submit">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
        Send Message
      </button>
      <p class="form-note">We respect your privacy. Your details will only be used to respond to your enquiry.</p>
    </form>

    <div class="form-success" id="formSuccess">
      <div class="success-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
      </div>
      <h3>Message Sent!</h3>
      <p>Thanks for reaching out. We'll get back to you within a few hours.<br>For urgent matters, call <a href="tel:4167232571" style="color:var(--red);font-weight:600">416-723-2571</a>.</p>
    </div>
  </div>

  <div class="contact-info-panel">
    <div class="info-phone-card">
      <div class="info-phone-label">Call Us Directly</div>
      <a href="tel:4167232571" class="info-phone-num">416-723-2571</a>
      <div class="info-phone-sub">Available Mon–Sun, 9 AM – 5 PM</div>
      <a href="tel:4167232571" class="btn-call">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14z"/></svg>
        Call Now
      </a>
    </div>
    <div class="info-card">
      <div class="info-card-title">Email</div>
      <div class="info-card-body">
        <a href="mailto:kpbcma@gmail.com">kpbcma@gmail.com</a><br>
        <span style="font-size:13px;color:var(--g400)">We reply within a few hours during business hours.</span>
      </div>
    </div>
    <div class="info-card" id="map">
      <div class="info-card-title">Location</div>
      <div class="info-card-body">
        46 Sunnyside Hill Road<br>
        Markham, Ontario L6B 0X5<br>
        <span style="font-size:13px;color:var(--g400)">We also travel to your workplace for group training.</span>
      </div>
    </div>
    <div class="info-card">
      <div class="info-card-title">Business Hours</div>
      <div class="info-card-body">
        <table class="hours-table">
          <tr><td>Monday – Sunday</td><td>9:00 AM – 5:00 PM</td></tr>
        </table>
      </div>
    </div>
    <div class="lang-card">
      <div class="lang-card-title">Call in Your Language</div>
      <div class="lang-badges">
        <span class="lang-badge">普通话 Mandarin</span>
        <span class="lang-badge">廣東話 Cantonese</span>
        <span class="lang-badge">Ελληνικά Greek</span>
      </div>
      <p>Bilingual instructors available. <a href="<?php echo esc_url($esl_url); ?>">Learn about our ESL classes →</a></p>
    </div>
  </div>
</div>

<div class="map-section">
  <div class="map-inner">
    <h2>Find Us</h2>
    <!-- TODO: Replace div below with Google Maps iframe once you have the embed code -->
    <div class="map-embed" role="img" aria-label="Map showing GTA CPR location in Markham Ontario">
      <div class="map-placeholder">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <p>46 Sunnyside Hill Road, Markham, ON · GTA-wide service</p>
      </div>
    </div>
  </div>
</div>

<div class="faq-section">
  <h2>Common Questions</h2>
  <div class="faq-item"><button class="faq-trigger" aria-expanded="false">Do you travel to our location for group training?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Yes — on-site group training is one of our most popular services. We bring all equipment and materials to your workplace anywhere in the GTA. Contact us for a free quote.</div></div>
  <div class="faq-item"><button class="faq-trigger" aria-expanded="false">How do I reschedule or cancel a booking?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Call us at 416-723-2571 or email kpbcma@gmail.com at least 48 hours before your scheduled class. We'll reschedule you at no extra charge.</div></div>
  <div class="faq-item"><button class="faq-trigger" aria-expanded="false">Can I pay on the day of the class?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Yes — payment can be made on the day by credit card, debit, Apple Pay, or Google Pay. We recommend registering online to guarantee your spot.</div></div>
  <div class="faq-item"><button class="faq-trigger" aria-expanded="false">How quickly will I receive my certificate?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Certificates are issued same-day upon successful completion. You'll receive both a physical card and a digital copy via email.</div></div>
  <div class="faq-footer"><a href="<?php echo esc_url($home_url); ?>#faq">View all FAQs <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg></a></div>
</div>

<script>
(function(){
  var form = document.getElementById('contactForm');
  var success = document.getElementById('formSuccess');
  if(!form) return;
  form.addEventListener('submit', function(e){
    e.preventDefault();
    var valid = true;
    form.querySelectorAll('[required]').forEach(function(field){
      if(!field.value.trim()){
        field.style.borderColor = 'var(--red)';
        valid = false;
      } else {
        field.style.borderColor = '';
      }
    });
    if(valid){
      form.style.display = 'none';
      success.style.display = 'block';
      // TODO: POST to Formspree — fetch('https://formspree.io/f/YOUR_ID', { method:'POST', body: new FormData(form) })
    }
  });
})();
</script>

<?php get_footer(); ?>
