<?php
/* Template Name: Book a Class */
get_header();
$home_url    = home_url('/');
$contact_url = get_permalink( get_page_by_path('contact') );
?>

<div class="page-hero">
  <div class="page-hero-bg" role="img" aria-label="CPR class booking"></div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url($home_url); ?>">Home</a>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
      <span>Book a Class</span>
    </nav>
    <h1>Book Your CPR Class</h1>
    <p class="page-hero-sub">Choose your course, pick a date, and pay securely online. Your WSIB Approved certificate is emailed same day.</p>
  </div>
</div>

<!-- BOOKING WIDGET -->
<div class="booking-section">
  <div class="booking-inner">

    <!-- Course quick-select -->
    <div class="booking-header">
      <h2>Available Classes</h2>
      <p>Select a course and available date below. All classes include equipment, materials, and same-day digital certification.</p>
    </div>

    <!-- SimplyBook.me widget goes here -->
    <!-- TODO: Replace this placeholder with SimplyBook.me embed code once account is set up -->
    <div class="booking-placeholder">
      <div class="booking-placeholder-inner">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        <h3>Online Booking Coming Soon</h3>
        <p>Our online booking system is being set up. In the meantime, please call or email us to register for a class.</p>
        <div class="booking-placeholder-btns">
          <a href="tel:4167232571" class="btn-ph-call">📞 Call 416-723-2571</a>
          <a href="<?php echo esc_url($contact_url); ?>" class="btn-ph-contact">Send a Message</a>
        </div>
      </div>
    </div>
    <!-- END SimplyBook placeholder -->

    <!-- Course reference cards -->
    <div class="courses-ref">
      <h3>Course Reference</h3>
      <div class="courses-ref-grid">
        <div class="ref-card">
          <div class="ref-name">CPR Level A</div>
          <div class="ref-meta">Half-day · 1-year cert</div>
          <div class="ref-price">$65<span>/person</span></div>
          <ul class="ref-list">
            <li>Adult CPR &amp; choking</li>
            <li>WSIB Approved</li>
            <li>Certificate same day</li>
          </ul>
        </div>
        <div class="ref-card">
          <div class="ref-name">CPR Level C / AED</div>
          <div class="ref-meta">Half-day · 1-year cert</div>
          <div class="ref-price">$75<span>/person</span></div>
          <ul class="ref-list">
            <li>Adult, child &amp; infant CPR</li>
            <li>AED training included</li>
            <li>WSIB Approved</li>
          </ul>
        </div>
        <div class="ref-card ref-popular">
          <div class="ref-badge">Most Popular</div>
          <div class="ref-name">Emergency First Aid + CPR-C</div>
          <div class="ref-meta">1 day · 3-year cert</div>
          <div class="ref-price">$90<span>/person</span></div>
          <ul class="ref-list">
            <li>CPR Level C + AED</li>
            <li>Bleeding, choking, shock</li>
            <li>WSIB Approved</li>
          </ul>
        </div>
        <div class="ref-card">
          <div class="ref-name">Standard First Aid + CPR-C</div>
          <div class="ref-meta">2 days · 3-year cert</div>
          <div class="ref-price">$115<span>/person</span></div>
          <ul class="ref-list">
            <li>Full first aid curriculum</li>
            <li>Most comprehensive cert</li>
            <li>WSIB Approved</li>
          </ul>
        </div>
        <div class="ref-card">
          <div class="ref-name">Recertification (Blended)</div>
          <div class="ref-meta">Online + 4hr session</div>
          <div class="ref-price">$65<span>/person</span></div>
          <ul class="ref-list">
            <li>Online theory first</li>
            <li>In-person skills check</li>
            <li>Existing cert required</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>

<style>
.booking-section{padding:clamp(2rem,5vw,3.5rem) 1.25rem;background:var(--g50)}
.booking-inner{max-width:960px;margin:0 auto}
.booking-header{text-align:center;margin-bottom:2rem}
.booking-header h2{font-size:clamp(1.2rem,3vw,1.5rem);font-weight:800;color:var(--g900);margin-bottom:.5rem}
.booking-header p{font-size:14px;color:var(--g600);max-width:500px;margin:0 auto}
.booking-placeholder{background:var(--w);border:2px dashed var(--g200);border-radius:16px;padding:3rem 2rem;text-align:center;margin-bottom:3rem}
.booking-placeholder-inner svg{width:48px;height:48px;color:var(--g400);margin:0 auto 1rem}
.booking-placeholder-inner h3{font-size:1.2rem;font-weight:800;color:var(--g800);margin-bottom:.5rem}
.booking-placeholder-inner p{font-size:14px;color:var(--g600);margin-bottom:1.5rem;line-height:1.6}
.booking-placeholder-btns{display:flex;gap:10px;justify-content:center;flex-wrap:wrap}
.btn-ph-call{display:inline-flex;align-items:center;justify-content:center;min-height:46px;padding:0 24px;background:var(--g900);color:#fff;font-size:14px;font-weight:700;border-radius:var(--r);transition:background .15s}
.btn-ph-call:hover{background:var(--g800)}
.btn-ph-contact{display:inline-flex;align-items:center;justify-content:center;min-height:46px;padding:0 24px;background:var(--red);color:#fff;font-size:14px;font-weight:700;border-radius:var(--r);transition:background .15s}
.btn-ph-contact:hover{background:var(--rdk)}
.courses-ref h3{font-size:1rem;font-weight:700;color:var(--g800);margin-bottom:1rem}
.courses-ref-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem}
.ref-card{background:var(--w);border:1px solid var(--g200);border-radius:12px;padding:1.25rem;position:relative;box-shadow:var(--sh)}
.ref-card.ref-popular{border-color:var(--red)}
.ref-badge{position:absolute;top:-12px;left:50%;transform:translateX(-50%);background:var(--red);color:#fff;font-size:11px;font-weight:700;padding:3px 12px;border-radius:20px;white-space:nowrap}
.ref-name{font-size:14px;font-weight:700;color:var(--g900);margin-bottom:3px;line-height:1.3}
.ref-meta{font-size:12px;color:var(--g400);margin-bottom:.75rem}
.ref-price{font-size:1.3rem;font-weight:800;color:var(--g900);margin-bottom:.75rem}
.ref-price span{font-size:12px;font-weight:400;color:var(--g400)}
.ref-list{list-style:none;font-size:12.5px;color:var(--g600)}
.ref-list li{padding:2px 0;padding-left:14px;position:relative}
.ref-list li::before{content:'✓';position:absolute;left:0;color:var(--red);font-weight:700;font-size:11px}
@media(max-width:768px){.courses-ref-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:480px){.courses-ref-grid{grid-template-columns:1fr}.booking-placeholder-btns{flex-direction:column}}
</style>

<?php get_footer(); ?>
