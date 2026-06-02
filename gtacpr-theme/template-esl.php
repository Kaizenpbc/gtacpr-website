<?php
/* Template Name: ESL Classes */
get_header();
$register_url = get_permalink( get_page_by_path('register') );
$home_url     = home_url('/');
?>

<div class="page-hero">
  <div class="page-hero-bg" role="img" aria-label="Diverse students learning together"></div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url($home_url); ?>">Home</a>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
      <span>ESL Classes</span>
    </nav>
    <h1>CPR &amp; First Aid Training in Your Language</h1>
    <p class="page-hero-sub">Life-saving skills should have no language barrier. We offer CPR and First Aid classes in Mandarin, Cantonese, and Greek — taught by instructors who speak your language.</p>
    <div class="hero-badges">
      <span class="hero-badge">Mandarin · Cantonese · Greek</span>
      <span class="hero-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>WSIB Approved</span>
      <span class="hero-badge">Small Groups</span>
      <span class="hero-badge">7 Days a Week</span>
    </div>
  </div>
</div>

<div class="lang-bar">
  <div class="lang-bar-inner">
    <div class="lang-item"><span class="lang-flag">🇨🇳</span><div><span class="lang-name">Mandarin</span><span class="lang-native">普通话</span></div></div>
    <div class="lang-item"><span class="lang-flag">🇭🇰</span><div><span class="lang-name">Cantonese</span><span class="lang-native">廣東話</span></div></div>
    <div class="lang-item"><span class="lang-flag">🇬🇷</span><div><span class="lang-name">Greek</span><span class="lang-native">Ελληνικά</span></div></div>
  </div>
</div>

<div class="page-body">

  <div class="split-section">
    <div class="split-photo">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&q=80" alt="Diverse group learning together" loading="lazy">
      <div class="split-photo-caption">Small groups mean more personal attention for every student</div>
    </div>
    <div class="split-text">
      <div class="section-label">What Is ESL CPR Training?</div>
      <h2>The Same Certification. Taught in a Way That Works for You.</h2>
      <p>Our ESL CPR and First Aid classes follow the same WSIB Approved curriculum — you receive the exact same certificate. The difference is how we teach it.</p>
      <p>Our instructors are fluent in your language. They explain medical terms in plain words, demonstrate techniques clearly, and give you time to ask questions without feeling rushed.</p>
      <ul class="check-list">
        <li><span class="check-bullet"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>Taught by fluent bilingual instructors</li>
        <li><span class="check-bullet"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>Multilingual course materials available</li>
        <li><span class="check-bullet"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>Small class sizes for more one-on-one time</li>
        <li><span class="check-bullet"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>Same WSIB Approved certificate as all other classes</li>
        <li><span class="check-bullet"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>No English level requirement to attend</li>
      </ul>
    </div>
  </div>

  <div class="courses-section">
    <div class="section-label">Available ESL Courses</div>
    <h2>Courses Available in All Three Languages</h2>
    <div class="course-grid">
      <div class="course-card">
        <img class="course-img" src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&q=70" alt="CPR Level C class" loading="lazy">
        <div class="course-body">
          <span class="course-badge cb-c">Most Popular</span>
          <div class="course-name">CPR Level C / AED</div>
          <div class="course-meta">Half-day · 1-year cert</div>
          <div class="course-desc">Adult, child, and infant CPR plus AED use. The most common certification required by Ontario employers.</div>
          <a href="<?php echo esc_url($register_url); ?>" class="btn-course">Register Now</a>
        </div>
      </div>
      <div class="course-card">
        <img class="course-img" src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=600&q=70" alt="Standard First Aid" loading="lazy">
        <div class="course-body">
          <span class="course-badge cb-sfa">Full Cert</span>
          <div class="course-name">Standard First Aid + CPR-C</div>
          <div class="course-meta">2 days · 3-year cert</div>
          <div class="course-desc">Covers bleeding, choking, cardiac arrest, AED, and emergency scene management.</div>
          <a href="<?php echo esc_url($register_url); ?>" class="btn-course">Register Now</a>
        </div>
      </div>
      <div class="course-card">
        <img class="course-img" src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=600&q=70" alt="CPR Level A" loading="lazy">
        <div class="course-body">
          <span class="course-badge cb-a">Entry Level</span>
          <div class="course-name">CPR Level A</div>
          <div class="course-meta">Half-day · 1-year cert</div>
          <div class="course-desc">Adult CPR and choking response. A great starting point for those new to first aid training.</div>
          <a href="<?php echo esc_url($register_url); ?>" class="btn-course">Register Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="langs-section">
    <div class="section-label">Languages We Teach In</div>
    <h2>Choose Your Language</h2>
    <div class="langs-grid">
      <div class="lang-card"><div class="lang-card-body"><span class="lang-card-flag">🇨🇳</span><div class="lang-card-name">Mandarin</div><div class="lang-card-native">普通话 (Pǔtōnghuà)</div><div class="lang-card-desc">Mandarin-speaking instructor training GTA residents from Markham, Scarborough, and Richmond Hill. Weekends available.</div></div></div>
      <div class="lang-card"><div class="lang-card-body"><span class="lang-card-flag">🇭🇰</span><div class="lang-card-name">Cantonese</div><div class="lang-card-native">廣東話 (Gwóngdūng wá)</div><div class="lang-card-desc">Serving the Cantonese-speaking GTA community. Small class sizes ensure hands-on practice time with a patient instructor.</div></div></div>
      <div class="lang-card"><div class="lang-card-body"><span class="lang-card-flag">🇬🇷</span><div class="lang-card-name">Greek</div><div class="lang-card-native">Ελληνικά</div><div class="lang-card-desc">Proudly serving the Greek community across Toronto and the region. Contact us to schedule a Greek-language class.</div></div></div>
    </div>
  </div>

  <div class="faq-section">
    <div class="section-label">Questions</div>
    <h2>Frequently Asked Questions</h2>
    <div class="faq-inner">
      <div class="faq-item open"><button class="faq-trigger" aria-expanded="true">Is the certificate the same as the English class?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Yes — exactly the same. You receive a WSIB Approved certificate recognized across Ontario.</div></div>
      <div class="faq-item"><button class="faq-trigger" aria-expanded="false">Do I need to know any English?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">No English is required. The class is taught entirely in your language.</div></div>
      <div class="faq-item"><button class="faq-trigger" aria-expanded="false">Can I book a private class for my community group?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Absolutely. We run private ESL classes for community organizations, places of worship, and newcomer programs. Call us to arrange a custom session.</div></div>
      <div class="faq-item"><button class="faq-trigger" aria-expanded="false">Are course materials available in other languages?<span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-answer">Yes — handouts and reference materials are available in Mandarin, Cantonese, and Greek. Let us know your preference when you register.</div></div>
    </div>
  </div>

  <div class="cta-band">
    <div>
      <h2>Ready to Register?</h2>
      <p>Pick a course, choose a date, and get your WSIB certificate — all in your language. Classes available 7 days a week across the GTA.</p>
    </div>
    <div class="cta-btns">
      <a href="<?php echo esc_url($register_url); ?>" class="btn-primary">Register Now</a>
      <a href="tel:4167232571" class="btn-outline">📞 Call Us First</a>
    </div>
  </div>

</div>

<?php get_footer(); ?>
