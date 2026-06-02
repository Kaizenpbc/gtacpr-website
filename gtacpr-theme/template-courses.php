<?php
/* Template Name: Courses */
get_header();
$register_url = get_permalink( get_page_by_path('register') );
$group_url    = get_permalink( get_page_by_path('group-training') );
$contact_url  = get_permalink( get_page_by_path('contact') );
?>

<div class="page-hero">
  <div class="page-hero-bg" role="img" aria-label="CPR training class"></div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo home_url('/'); ?>">Home</a>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
      <span>Courses</span>
    </nav>
    <h1>CPR &amp; First Aid Courses</h1>
    <p class="page-hero-sub">WSIB Approved certification for individuals, PSW &amp; health students, and workplaces. All courses include hands-on practice, equipment, and same-day digital certification.</p>
    <div class="hero-badges">
      <span class="hero-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>WSIB Approved</span>
      <span class="hero-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>Same-Day Certificate</span>
      <span class="hero-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>7 Days a Week</span>
    </div>
  </div>
</div>

<!-- QUICK NAV -->
<div class="course-quicknav">
  <div class="course-quicknav-inner">
    <a href="#cpr-a" class="cqn-item">CPR Level A</a>
    <a href="#cpr-c" class="cqn-item">CPR Level C / AED</a>
    <a href="#efa" class="cqn-item cqn-popular">Emergency First Aid</a>
    <a href="#sfa" class="cqn-item">Standard First Aid</a>
    <a href="#recert" class="cqn-item">Recertification</a>
    <a href="#group" class="cqn-item cqn-group">Group / On-Site</a>
  </div>
</div>

<div class="page-body">

  <!-- CPR LEVEL A -->
  <div class="course-detail" id="cpr-a">
    <div class="cd-left">
      <div class="cd-img ci1" role="img" aria-label="CPR Level A training"></div>
    </div>
    <div class="cd-right">
      <span class="course-badge cb-a">CPR Level A</span>
      <h2>CPR Level A</h2>
      <div class="cd-meta-row">
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Half-day (~4 hrs)</span>
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>1-year certification</span>
        <span class="cd-price">$65 <span>/person</span></span>
      </div>
      <p class="cd-desc">An entry-level course covering adult CPR and choking response. Ideal for individuals who need a basic certification for employment or personal peace of mind.</p>
      <div class="cd-includes">
        <div class="cd-includes-title">What's included</div>
        <ul class="cd-list">
          <li>Adult CPR (mouth-to-mouth &amp; hands-only)</li>
          <li>Adult choking management</li>
          <li>Hands-on mannequin practice</li>
          <li>WSIB Approved certificate emailed same day</li>
          <li>All equipment and materials provided</li>
        </ul>
      </div>
      <div class="cd-who">
        <div class="cd-who-label">Who it's for</div>
        <div class="cd-who-chips">
          <span class="chip">Individuals</span>
          <span class="chip">Retail &amp; Service Workers</span>
          <span class="chip">Volunteers</span>
          <span class="chip">Basic Employment Requirement</span>
        </div>
      </div>
      <a href="<?php echo esc_url($register_url); ?>" class="btn-cd">Book This Course</a>
    </div>
  </div>

  <!-- CPR LEVEL C / AED -->
  <div class="course-detail course-detail-alt" id="cpr-c">
    <div class="cd-left">
      <div class="cd-img ci2" role="img" aria-label="CPR Level C AED training"></div>
    </div>
    <div class="cd-right">
      <span class="course-badge cb-c">CPR Level C / AED</span>
      <h2>CPR Level C / AED</h2>
      <div class="cd-meta-row">
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Half-day (~4–5 hrs)</span>
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>1-year certification</span>
        <span class="cd-price">$75 <span>/person</span></span>
      </div>
      <p class="cd-desc">The most widely required CPR certification in Ontario workplaces. Covers adult, child, and infant CPR along with AED (defibrillator) training — suitable for most WSIB and employer requirements.</p>
      <div class="cd-includes">
        <div class="cd-includes-title">What's included</div>
        <ul class="cd-list">
          <li>Adult, child &amp; infant CPR</li>
          <li>AED (automated defibrillator) operation</li>
          <li>Adult, child &amp; infant choking</li>
          <li>Hands-on practice with mannequins &amp; AED trainer</li>
          <li>WSIB Approved certificate emailed same day</li>
          <li>All equipment and materials provided</li>
        </ul>
      </div>
      <div class="cd-who">
        <div class="cd-who-label">Who it's for</div>
        <div class="cd-who-chips">
          <span class="chip">Workplaces (WSIB)</span>
          <span class="chip">Childcare Workers</span>
          <span class="chip">Teachers &amp; ECEs</span>
          <span class="chip">Fitness Professionals</span>
          <span class="chip">General Public</span>
        </div>
      </div>
      <a href="<?php echo esc_url($register_url); ?>" class="btn-cd">Book This Course</a>
    </div>
  </div>

  <!-- EMERGENCY FIRST AID -->
  <div class="course-detail" id="efa">
    <div class="cd-left">
      <div class="cd-img ci3" role="img" aria-label="Emergency First Aid training"></div>
      <div class="cd-popular-badge">Most Popular</div>
    </div>
    <div class="cd-right">
      <span class="course-badge cb-sfa">Emergency First Aid</span>
      <h2>Emergency First Aid + CPR Level C / AED</h2>
      <div class="cd-meta-row">
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>1 full day (~7–8 hrs)</span>
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>3-year certification</span>
        <span class="cd-price">$90 <span>/person</span></span>
      </div>
      <p class="cd-desc">Our most popular course — a comprehensive one-day certification covering CPR, AED, and essential first aid skills. The go-to choice for PSW students, healthcare workers, and workplaces needing a 3-year WSIB certificate.</p>
      <div class="cd-includes">
        <div class="cd-includes-title">What's included</div>
        <ul class="cd-list">
          <li>CPR Level C + AED (adult, child &amp; infant)</li>
          <li>Bleeding control &amp; wound care</li>
          <li>Choking management (all ages)</li>
          <li>Shock, burns &amp; fractures</li>
          <li>Scene assessment &amp; emergency response</li>
          <li>WSIB Approved 3-year certificate emailed same day</li>
          <li>All equipment and materials provided</li>
        </ul>
      </div>
      <div class="cd-who">
        <div class="cd-who-label">Who it's for</div>
        <div class="cd-who-chips">
          <span class="chip">PSW Students</span>
          <span class="chip">Nursing &amp; Health Programs</span>
          <span class="chip">Colleges &amp; Universities</span>
          <span class="chip">Healthcare Workers</span>
          <span class="chip">Workplaces (WSIB)</span>
          <span class="chip">Construction &amp; Trades</span>
        </div>
      </div>
      <a href="<?php echo esc_url($register_url); ?>" class="btn-cd">Book This Course</a>
    </div>
  </div>

  <!-- STANDARD FIRST AID -->
  <div class="course-detail course-detail-alt" id="sfa">
    <div class="cd-left">
      <div class="cd-img ci4" role="img" aria-label="Standard First Aid training"></div>
    </div>
    <div class="cd-right">
      <span class="course-badge cb-sfa">Standard First Aid</span>
      <h2>Standard First Aid + CPR Level C / AED</h2>
      <div class="cd-meta-row">
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>2 days (~14 hrs total)</span>
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>3-year certification</span>
        <span class="cd-price">$115 <span>/person</span></span>
      </div>
      <p class="cd-desc">The most comprehensive first aid certification available. Two days of in-depth training covering the full first aid curriculum — required by many healthcare programs and high-risk workplaces.</p>
      <div class="cd-includes">
        <div class="cd-includes-title">What's included</div>
        <ul class="cd-list">
          <li>CPR Level C + AED (adult, child &amp; infant)</li>
          <li>Full first aid curriculum (bleeding, shock, burns, fractures, poisoning, head &amp; spinal injuries)</li>
          <li>Medical emergencies (heart attack, stroke, diabetic, seizure)</li>
          <li>Eye &amp; dental injuries</li>
          <li>Environmental emergencies (heat, cold)</li>
          <li>WSIB Approved 3-year certificate emailed same day</li>
          <li>All equipment and materials provided</li>
        </ul>
      </div>
      <div class="cd-who">
        <div class="cd-who-label">Who it's for</div>
        <div class="cd-who-chips">
          <span class="chip">Health Science Programs</span>
          <span class="chip">PSW &amp; Nursing Students</span>
          <span class="chip">High-Risk Workplaces</span>
          <span class="chip">Security &amp; Law Enforcement</span>
          <span class="chip">Industrial &amp; Manufacturing</span>
        </div>
      </div>
      <a href="<?php echo esc_url($register_url); ?>" class="btn-cd">Book This Course</a>
    </div>
  </div>

  <!-- RECERTIFICATION -->
  <div class="course-detail" id="recert">
    <div class="cd-left">
      <div class="cd-img cd-img-recert" role="img" aria-label="CPR recertification"></div>
    </div>
    <div class="cd-right">
      <span class="course-badge cb-blended">Blended</span>
      <h2>Recertification (Blended)</h2>
      <div class="cd-meta-row">
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Online theory + 4hr in-person</span>
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Renews your certification</span>
        <span class="cd-price">$65 <span>/person</span></span>
      </div>
      <p class="cd-desc">Already certified? Renew efficiently with our blended format — complete the theory online at your own pace, then attend a shorter in-person skills session. A valid existing certificate is required.</p>
      <div class="cd-includes">
        <div class="cd-includes-title">What's included</div>
        <ul class="cd-list">
          <li>Online theory module (self-paced)</li>
          <li>In-person skills verification (approx. 4 hours)</li>
          <li>CPR skills refresher on mannequins &amp; AED trainer</li>
          <li>WSIB Approved certificate emailed same day</li>
          <li>All in-person equipment provided</li>
        </ul>
      </div>
      <div class="cd-who">
        <div class="cd-who-label">Who it's for</div>
        <div class="cd-who-chips">
          <span class="chip">Renewing Existing Holders</span>
          <span class="chip">Healthcare Workers</span>
          <span class="chip">Workplace Renewals</span>
          <span class="chip">PSW Graduates</span>
        </div>
      </div>
      <a href="<?php echo esc_url($register_url); ?>" class="btn-cd">Book This Course</a>
    </div>
  </div>

  <!-- GROUP / ON-SITE CALLOUT -->
  <div class="cd-group-band" id="group">
    <div class="cd-group-band-inner">
      <div>
        <div class="section-label">Colleges &amp; Workplaces</div>
        <h2>Need Training for a Group?</h2>
        <p>We bring all of the above courses directly to your campus or workplace. Bulk pricing available for PSW programs, health faculties, and corporate teams. Any size, any schedule.</p>
        <div class="cd-group-chips">
          <span class="chip chip-lt">Colleges &amp; Universities</span>
          <span class="chip chip-lt">PSW &amp; Health Programs</span>
          <span class="chip chip-lt">Workplace Teams</span>
          <span class="chip chip-lt">Group Discounts</span>
        </div>
      </div>
      <div class="cd-group-btns">
        <a href="<?php echo esc_url($group_url); ?>#request-form" class="btn-cd-group-primary">Request a Quote</a>
        <a href="<?php echo esc_url($contact_url); ?>" class="btn-cd-group-outline">Contact Us</a>
      </div>
    </div>
  </div>

  <!-- CTA BAND -->
  <div class="cta-band">
    <div>
      <h2>Ready to Get Certified?</h2>
      <p>Book online, call us at 416-723-2571, or email kpbcma@gmail.com. Classes run 7 days a week across the GTA.</p>
    </div>
    <div class="cta-band-btns">
      <a href="<?php echo esc_url($register_url); ?>" class="btn-cta-primary">Book a Class</a>
      <a href="<?php echo esc_url($group_url); ?>" class="btn-cta-outline">Group Training</a>
    </div>
  </div>

</div>

<?php get_footer(); ?>
