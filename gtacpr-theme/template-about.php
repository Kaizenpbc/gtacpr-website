<?php
/* Template Name: About */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<?php
$register_url = gtacpr_url('register');
$group_url    = gtacpr_url('group-training');
$courses_url  = gtacpr_url('courses');
?>

<div class="page-hero">
  <div class="page-hero-bg" role="img" aria-label="GTA CPR team" style="background-image:url('https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1400&q=80')"></div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
      <span aria-current="page">About Us</span>
    </nav>
    <h1>Helping the GTA Save Lives Since <?php echo esc_html( gtacpr_config('since') ); ?></h1>
    <p class="page-hero-sub">We are a WSIB Approved training provider dedicated to making CPR and First Aid education accessible, practical, and inclusive for every community in the Greater Toronto Area.</p>
  </div>
</div>

<div class="stat-bar">
  <div class="stat-bar-inner">
    <div class="stat-item"><span class="stat-num">10+</span><span class="stat-label">Years in GTA</span></div>
    <div class="stat-item"><span class="stat-num"><?php echo esc_html( gtacpr_config('certified_count') ); ?>+</span><span class="stat-label">People Certified</span></div>
    <div class="stat-item"><span class="stat-num"><?php echo esc_html( gtacpr_config('rating') ); ?><span aria-hidden="true">★</span></span><span class="stat-label">Google Rating</span></div>
    <div class="stat-item"><span class="stat-num">7</span><span class="stat-label">Days a Week</span></div>
    <div class="stat-item"><span class="stat-num">3</span><span class="stat-label">Languages</span></div>
  </div>
</div>

<div class="page-body">

  <div class="about-two-col">
    <div class="about-col">
      <div class="section-label">Our Vision</div>
      <h2>A GTA Where Everyone Knows How to Save a Life</h2>
      <p>Cardiac arrest can happen anywhere — at home, at work, on the subway. The difference between life and death is often the person standing right there. We believe that person should be you.</p>
      <ul class="about-checklist">
        <li><span class="about-check" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>Flexible scheduling — evenings &amp; weekends, 7 days a week</li>
        <li><span class="about-check" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>ESL classes in Mandarin, Cantonese, and Greek</li>
        <li><span class="about-check" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>On-site training delivered directly to your workplace</li>
        <li><span class="about-check" aria-hidden="true"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2 6 5 9 10 3"/></svg></span>WSIB Approved certificates meeting Ontario workplace requirements and the national CSA Z1210 standard</li>
      </ul>
    </div>
    <div class="about-col">
      <div class="section-label">Our Story</div>
      <h2>Born from a Belief That Training Should Be Accessible</h2>
      <p>GTA CPR was founded in <?php echo esc_html( gtacpr_config('since') ); ?> by certified instructors who saw a gap — quality CPR training that was affordable, frequent, and available in more than just English in one of the world's most multicultural cities.</p>
      <p>We started with a single weekend class in Markham. Today we train individuals, families, healthcare teams, schools, and corporate offices across the GTA — 7 days a week, and counting.</p>
      <div class="story-milestones">
        <div class="story-milestone"><span class="sm-num"><?php echo esc_html( gtacpr_config('since') ); ?></span><span class="sm-label">Founded in Markham</span></div>
        <div class="story-milestone"><span class="sm-num"><?php echo esc_html( gtacpr_config('certified_count') ); ?>+</span><span class="sm-label">People Certified</span></div>
        <div class="story-milestone"><span class="sm-num"><?php echo esc_html( gtacpr_config('rating') ); ?><span aria-hidden="true">★</span></span><span class="sm-label">Google Rating</span></div>
      </div>
    </div>
  </div>

  <div class="values-section">
    <div class="about-section-header">
      <div class="section-label">What We Stand For</div>
      <h2>Our Values</h2>
    </div>
    <div class="values-grid">
      <div class="value-card"><div class="value-icon vi-red"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></div><div class="value-title">Accessible to All</div><div class="value-desc">Life-saving skills should not be a privilege. We offer flexible pricing, ESL classes, and evening and weekend schedules to fit every lifestyle.</div></div>
      <div class="value-card"><div class="value-icon vi-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="value-title">Certified Excellence</div><div class="value-desc">Every course meets WSIB and Ontario workplace safety standards, delivered by fully certified, experienced instructors.</div></div>
      <div class="value-card"><div class="value-icon vi-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><div class="value-title">Community First</div><div class="value-desc">We are part of the communities we serve — from newcomer ESL classes to on-site workplace safety training across the GTA.</div></div>
      <div class="value-card"><div class="value-icon vi-amber"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div class="value-title">Respect Your Time</div><div class="value-desc">Classes run 7 days a week with same-day certification. On-site workplace training means no travel time for your team.</div></div>
      <div class="value-card"><div class="value-icon vi-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div><div class="value-title">Hands-On Learning</div><div class="value-desc">Every student practises with mannequins and AED trainers in a hands-on environment. No passive learning, no shortcuts.</div></div>
      <div class="value-card"><div class="value-icon vi-teal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 8l6 6"/><path d="M4 14l6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="M22 22l-5-10-5 10"/><path d="M14 18h6"/></svg></div><div class="value-title">Inclusive by Design</div><div class="value-desc">We teach in Mandarin, Cantonese, and Greek because saving a life should never be blocked by a language barrier.</div></div>
    </div>
  </div>

  <div class="certs-section">
    <div class="section-label">Credentials &amp; Affiliations</div>
    <h2>Certified and Recognized</h2>
    <div class="certs-grid">
      <div class="cert-card"><div class="cert-icon" style="background:#FEE2E2"><svg viewBox="0 0 24 24" fill="none" stroke="#CC1F1F" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="cert-name">WSIB Approved</div><div class="cert-issuer">Ontario Workplace Safety</div></div>
      <div class="cert-card"><div class="cert-icon" style="background:#DBEAFE"><svg viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div><div class="cert-name">Canada-Wide Recognition</div><div class="cert-issuer">Valid in all provinces</div></div>
      <div class="cert-card"><div class="cert-icon" style="background:#D1FAE5"><svg viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div><div class="cert-name">OHSA Compliant</div><div class="cert-issuer">Occupational Health &amp; Safety Act</div></div>
      <div class="cert-card"><div class="cert-icon" style="background:#FEF3C7"><svg viewBox="0 0 24 24" fill="none" stroke="#D97706" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="cert-name"><?php echo esc_html( gtacpr_config('rating') ); ?> / 5 Stars</div><div class="cert-issuer"><?php echo esc_html( gtacpr_config('review_count') ); ?>+ Google Reviews</div></div>
    </div>
  </div>

  <div class="cta-band">
    <div>
      <h2>Ready to Get Certified?</h2>
      <p>Join thousands of GTA residents who've trained with us. Individual classes, group training, and ESL courses available 7 days a week.</p>
    </div>
    <div class="cta-band-btns">
      <a href="<?php echo esc_url($register_url); ?>" class="btn-cta-primary">Register Now</a>
      <a href="<?php echo esc_url($courses_url); ?>" class="btn-cta-outline">View Courses</a>
      <a href="<?php echo esc_url($group_url); ?>" class="btn-cta-outline">Group Training</a>
    </div>
  </div>

</div>

<?php get_footer(); ?>
