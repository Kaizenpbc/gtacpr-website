<?php
/* Template Name: Homepage */
get_header();
$register_url     = get_permalink( get_page_by_path('register') );
$group_url        = get_permalink( get_page_by_path('group-training') );
$esl_url          = get_permalink( get_page_by_path('esl') );
$about_url        = get_permalink( get_page_by_path('about') );
$contact_url      = get_permalink( get_page_by_path('contact') );
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg" role="img" aria-label="CPR training in progress"></div>
  <div class="hero-inner hero-inner-2col">
    <div class="hero-content">
      <h1>CPR &amp; First Aid Training Across the GTA</h1>
      <p class="hero-sub">Get certified fast with trusted, instructor-led training for individuals, workplaces, and ESL learners.</p>
      <div class="hero-btns">
        <a href="<?php echo esc_url($register_url); ?>" class="bhp">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          <span class="btn-label">
            <span class="btn-label-main">Join a Class</span>
            <span class="btn-label-sub">For you</span>
          </span>
        </a>
        <a href="<?php echo esc_url($group_url); ?>" class="bho">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
          <span class="btn-label">
            <span class="btn-label-main">Group Training</span>
            <span class="btn-label-sub">For your workplace</span>
          </span>
        </a>
      </div>
      <div class="hero-trust">
        <div class="hero-trust-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="hero-trust-txt"><strong>Trusted by GTA Learners</strong><span><span class="hstars">★★★★★</span> 4.9 / 5 — 60+ reviews</span></div>
      </div>
    </div>

    <!-- ROTATING BRAIN -->
    <div class="hero-brain-wrap" aria-hidden="true">
      <div class="hero-brain-glow"></div>
      <div class="hero-brain-clip">
      <iframe class="hero-brain-canvas"
        title="3D Brain"
        src="https://sketchfab.com/models/28c8971e11334e8b97a2a0d6235992e8/embed?autostart=1&autospin=0.5&ui_controls=0&ui_infos=0&ui_watermark=0&ui_stop=0&ui_vr=0&ui_ar=0&ui_help=0&ui_settings=0&ui_inspector=0&ui_annotations=1&ui_fullscreen=0&preload=1&transparent=1&camera=0"
        frameborder="0"
        allow="autoplay; fullscreen; xr-spatial-tracking"
        allowfullscreen
      ></iframe>
      </div>
    </div>

  </div>
</section>

<!-- FEATURES BAR -->
<div class="features-bar">
  <div class="features-grid">
    <div class="fi"><div class="fi-icon fir" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="fi-title">WSIB Approved Provider</div><div class="fi-sub">Ontario workplace safety certified</div></div></div>
    <div class="fi"><div class="fi-icon fib" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div><div><div class="fi-title">Fast, Same-Day Certification</div><div class="fi-sub">Get certified the same day as your class</div></div></div>
    <div class="fi"><div class="fi-icon fig" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="fi-title">Classes 7 Days a Week</div><div class="fi-sub">Flexible scheduling across the GTA</div></div></div>
    <div class="fi"><div class="fi-icon fip" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 8l6 6"/><path d="M4 14l6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="M22 22l-5-10-5 10"/><path d="M14 18h6"/></svg></div><div><div class="fi-title">ESL CPR Training</div><div class="fi-sub">Mandarin, Cantonese &amp; Greek</div></div></div>
  </div>
</div>

<!-- COURSES -->
<section class="section" id="courses">
  <div class="section-inner">
    <h2 class="section-title">Our Courses</h2>
    <div class="course-grid">
      <div class="course-card"><div class="ci ci1" role="img" aria-label="CPR Level A training"></div><div class="course-body"><div class="course-name">CPR Level A</div><div class="course-dur"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Half-day &nbsp;·&nbsp; 1-year cert</div><div class="course-price">$65 <span>/person</span></div><a href="<?php echo esc_url($register_url); ?>" class="btn-course">View Course</a></div></div>
      <div class="course-card"><div class="ci ci2" role="img" aria-label="CPR Level C training"></div><div class="course-body"><div class="course-name">CPR Level C / AED</div><div class="course-dur"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Half-day &nbsp;·&nbsp; 1-year cert</div><div class="course-price">$75 <span>/person</span></div><a href="<?php echo esc_url($register_url); ?>" class="btn-course">View Course</a></div></div>
      <div class="course-card"><div class="ci ci3" role="img" aria-label="Standard First Aid training"></div><div class="course-body"><div class="course-name">Standard First Aid + CPR-C</div><div class="course-dur"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>2 days &nbsp;·&nbsp; 3-year cert</div><div class="course-price">$115 <span>/person</span></div><a href="<?php echo esc_url($register_url); ?>" class="btn-course">View Course</a></div></div>
      <div class="course-card"><div class="ci ci4" role="img" aria-label="Recertification course"></div><div class="course-body"><div class="course-name">Recertification (Blended)</div><div class="course-dur"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Online + 4hr session</div><div class="course-price">$65 <span>/person</span></div><a href="<?php echo esc_url($register_url); ?>" class="btn-course">View Course</a></div></div>
    </div>
  </div>
</section>

<!-- ON-SITE -->
<div class="onsite" id="workplace">
  <div class="onsite-inner">
    <div class="onsite-left">
      <h2>On-Site CPR &amp; First Aid Training for Teams</h2>
      <ul class="onsite-ul">
        <li><span class="ob" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>We come to you — no travel for your team</li>
        <li><span class="ob" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>Group discounts available (5+ people)</li>
        <li><span class="ob" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>Flexible scheduling — evenings &amp; weekends</li>
        <li><span class="ob" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>WSIB Approved &amp; government compliant</li>
        <li><span class="ob" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>No cancellation fees*</li>
      </ul>
      <a href="<?php echo esc_url($group_url); ?>#request-form" class="btn-quote">Request a Quote</a>
    </div>
    <div class="onsite-photo" role="img" aria-label="Group workplace training session"></div>
  </div>
</div>

<!-- ESL BAND -->
<div class="esl" id="esl">
  <h3>CPR &amp; First Aid Classes in Mandarin, Cantonese &amp; Greek</h3>
  <p>Making life-saving skills accessible to newcomers and diverse communities across the GTA.</p>
  <div class="esl-langs">
    <span class="lang-badge">🇨🇳 Mandarin</span>
    <span class="lang-badge">🇭🇰 Cantonese</span>
    <span class="lang-badge">🇬🇷 Greek</span>
  </div><br>
  <a href="<?php echo esc_url($esl_url); ?>" class="btn-esl">Learn About ESL Classes</a>
</div>

<!-- REVIEWS -->
<div class="rev-section" id="reviews">
  <div class="rev-inner">
    <div>
      <div class="map-card">
        <div class="map-ph" role="img" aria-label="Map of Markham Ontario">
          <div class="map-grid"></div><div class="mr mr1"></div><div class="mr mr2"></div><div class="mr mr3"></div><div class="map-pin"></div>
        </div>
        <a href="https://maps.google.com/?q=46+Sunnyside+Hill+Road+Markham+ON" class="map-btn">Contact Us &amp; Get Directions</a>
      </div>
      <div class="map-info">
        <div class="map-info-name">GTACPR — Markham, ON</div>
        <a href="tel:4167232571">📞 416-723-2571</a>
        <a href="mailto:kpbcma@gmail.com">✉ kpbcma@gmail.com</a>
        <a href="<?php echo esc_url($contact_url); ?>">📍 GTA-wide service area</a>
      </div>
    </div>
    <div class="rev-side">
      <h2>What Our Students Say</h2>
      <div class="rating-row">
        <div class="rating-num">4.9</div>
        <div><div class="rating-stars">★★★★★</div><div class="rating-label">Google Rating</div><div class="rating-count">Based on 60+ verified reviews</div></div>
        <div class="gg" aria-label="Google" role="img"><svg width="36" height="36" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div>
      </div>
      <div class="review-cards">
        <div class="review-card"><div class="rev-row"><div class="rev-av avb">JM</div><div><div class="rev-name">James M.</div><div class="rev-type">Standard First Aid</div></div></div><div class="rev-stars" aria-label="5 stars">★★★★★</div><div class="rev-text">"Great hands-on training and a patient, knowledgeable instructor. Felt truly prepared when I left."</div></div>
        <div class="review-card"><div class="rev-row"><div class="rev-av avp">SP</div><div><div class="rev-name">Sara P.</div><div class="rev-type">CPR Level C</div></div></div><div class="rev-stars" aria-label="5 stars">★★★★★</div><div class="rev-text">"The best CPR class I've ever attended! Clear, fun, and very thorough. Highly recommend."</div></div>
        <div class="review-card"><div class="rev-row"><div class="rev-av avg">RK</div><div><div class="rev-name">Raj K.</div><div class="rev-type">Workplace Training</div></div></div><div class="rev-stars" aria-label="5 stars">★★★★★</div><div class="rev-text">"Perfect for our workplace safety needs. They came to us and certified 15 people in one day."</div></div>
      </div>
    </div>
  </div>
</div>

<!-- FAQ -->
<section class="faq-section" id="faq">
  <div class="faq-inner">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-item open"><button class="faq-trigger" aria-expanded="true">What certification will I receive?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">You will receive an official WSIB Approved certificate, recognized across Canada, and compliant with Ontario workplace safety requirements.</div></div>
    <div class="faq-item"><button class="faq-trigger" aria-expanded="false">How long is the course?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">CPR-only courses are typically 4–5 hours. Emergency First Aid is a full day (7–8 hours). Standard First Aid runs over two days (14 hours). Blended options combine online theory with a shorter in-person skills session.</div></div>
    <div class="faq-item"><button class="faq-trigger" aria-expanded="false">Do you offer recertification?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Yes — blended recertification lets you complete theory online, then attend a shorter in-person practical session. A great time-saving option.</div></div>
    <div class="faq-item"><button class="faq-trigger" aria-expanded="false">What should I bring to class?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Just yourself and comfortable clothing. All equipment, mannequins, AED trainers, and materials are provided. Your digital certificate is emailed within 24 hours.</div></div>
    <div class="faq-item"><button class="faq-trigger" aria-expanded="false">Do you offer group or student discounts?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Yes — student discounts with valid ID, and group discounts for 3+ people registering together. Contact us for custom workplace group pricing.</div></div>
    <div class="faq-item"><button class="faq-trigger" aria-expanded="false">What is your cancellation policy?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Full refund or free reschedule with 48 hours notice for individuals. No cancellation fees for group/on-site training with 24 hours notice.*</div></div>
  </div>
</section>

<?php get_footer(); ?>
