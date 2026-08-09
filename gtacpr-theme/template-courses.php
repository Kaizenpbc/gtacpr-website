<?php
/* Template Name: Courses */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
$register_url = gtacpr_url('register');
$group_url    = gtacpr_url('group-training');
$contact_url  = gtacpr_url('contact');
?>

<div class="page-hero">
  <div class="page-hero-bg" role="img" aria-label="CPR training class" style="background-image:url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1400&q=80')"></div>
  <div class="page-hero-inner">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
      <span aria-current="page">Courses</span>
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
<nav class="course-quicknav" aria-label="Course navigation">
  <div class="course-quicknav-inner">
    <a href="#efa" class="cqn-item cqn-popular">Basic First Aid</a>
    <a href="#sfa" class="cqn-item">Intermediate First Aid</a>
    <a href="#mask" class="cqn-item">Mask Fitting</a>
    <a href="#recert" class="cqn-item">Recertification</a>
    <a href="#group" class="cqn-item cqn-group">Group / On-Site</a>
  </div>
</nav>

<div class="page-body">

  <!-- BASIC FIRST AID -->
  <div class="course-detail" id="efa">
    <div><div class="cd-img ci1" role="img" aria-label="Basic First Aid training"></div></div>
    <div>
      <span class="cd-badge">Most Popular</span>
      <h2 class="cd-title">Basic First Aid</h2>
      <div class="cd-meta-row">
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>8 hours in-class or blended</span>
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>3-year certification</span>
      </div>
      <p class="cd-desc">A one-day course aligned with the CSA Z1210 standard that equips you with the skills to respond confidently in an emergency — whether at home or in the workplace. Meets WSIB requirements for Ontario workplace first aid compliance.</p>
      <p class="cd-desc">You'll learn to recognize and respond to breathing and cardiac emergencies, control bleeding, manage choking, use an AED, and recognize mental health emergencies. This course is ideal for PSW students, healthcare workers, teachers, childcare providers, and anyone required to hold a valid first aid certificate. All training is instructor-led with hands-on practice using professional-grade mannequins and AED trainers. Your WSIB Approved certificate is emailed the same day you complete the course.</p>
    </div>
    <div class="cd-columns">
      <div>
        <div class="cd-section-title">Duration</div>
        <ul class="cd-list">
          <li>8 hours in-class, or blended (online theory + in-person skills)</li>
        </ul>
        <div class="cd-section-title">Course Content (CSA Z1210)</div>
        <ul class="cd-list">
          <li>Preparing to respond &amp; the EMS system</li>
          <li>Check, Call, Care framework</li>
          <li>Airway, breathing &amp; circulation emergencies</li>
          <li>CPR &amp; AED for adults, children &amp; infants</li>
          <li>Wound care &amp; bleeding control</li>
          <li>Choking management (all ages)</li>
          <li>Shock recognition &amp; management</li>
          <li>Mental health emergency recognition</li>
        </ul>
      </div>
      <div>
        <div class="cd-section-title">Completion Requirements</div>
        <ul class="cd-list cd-completion">
          <li>Successfully demonstrate skills and critical steps</li>
          <li>Minimum 75% on written knowledge evaluation</li>
          <li>Attend and participate in 100% of the course</li>
        </ul>
        <div class="cd-section-title">Recertification</div>
        <ul class="cd-list">
          <li>8-hour refresher course</li>
          <li>Certificate may be renewed once; full course required after</li>
        </ul>
        <div class="cd-section-title">Participant Materials</div>
        <ul class="cd-list">
          <li>First Aid &amp; CPR reference guide (print and/or eBook)</li>
          <li>Digital certificate issued upon successful completion</li>
        </ul>
      </div>
    </div>
    <a href="<?php echo esc_url($register_url); ?>" class="btn-cd open-booking">Book This Course</a>
  </div>

  <!-- INTERMEDIATE FIRST AID -->
  <div class="course-detail" id="sfa">
    <div><div class="cd-img ci2" role="img" aria-label="Intermediate First Aid training"></div></div>
    <div>
      <h2 class="cd-title">Intermediate First Aid</h2>
      <div class="cd-meta-row">
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>16 hours over 2 days or blended</span>
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>3-year certification</span>
      </div>
      <p class="cd-desc">The most comprehensive first aid certification available. Two full days of in-depth training covering the complete CSA Z1210 Intermediate first aid curriculum — required by many healthcare programs, high-risk workplaces, and provincial regulations.</p>
      <p class="cd-desc">Over two days, you'll build on Basic First Aid skills with advanced topics including head, neck and spinal injuries, bone and joint injuries, burns, poisoning, opioid overdose awareness, environmental emergencies, mental health first aid, and multi-casualty incident management. This is the certification required by nursing programs, security professionals, construction sites, and industrial workplaces across Ontario. All training is hands-on with professional-grade equipment. Your WSIB Approved 3-year certificate is emailed the same day you complete the course.</p>
    </div>
    <div class="cd-columns">
      <div>
        <div class="cd-section-title">Duration</div>
        <ul class="cd-list">
          <li>16 hours in-class (2 days), or blended (online theory + in-person skills)</li>
        </ul>
        <div class="cd-section-title">Course Content (CSA Z1210)</div>
        <ul class="cd-list">
          <li>Everything in Basic First Aid, plus:</li>
          <li>Medical emergencies (heart attack, stroke, diabetic, seizure, asthma)</li>
          <li>Head, neck &amp; spinal injuries</li>
          <li>Bone, muscle &amp; joint injuries</li>
          <li>Burns, poisoning &amp; environmental emergencies</li>
          <li>Opioid overdose &amp; poisoning awareness</li>
          <li>Mental health first aid</li>
          <li>Eye &amp; dental injuries</li>
          <li>Multiple-casualty management</li>
        </ul>
      </div>
      <div>
        <div class="cd-section-title">Completion Requirements</div>
        <ul class="cd-list cd-completion">
          <li>Successfully demonstrate skills and critical steps</li>
          <li>Minimum 75% on written knowledge evaluation</li>
          <li>Attend and participate in 100% of the course</li>
        </ul>
        <div class="cd-section-title">Recertification</div>
        <ul class="cd-list">
          <li>8-hour refresher course</li>
          <li>Certificate may be renewed once; full course required after</li>
        </ul>
        <div class="cd-section-title">Participant Materials</div>
        <ul class="cd-list">
          <li>Comprehensive Guide for First Aid &amp; CPR (print and/or eBook)</li>
          <li>Digital certificate issued upon successful completion</li>
        </ul>
      </div>
    </div>
    <a href="<?php echo esc_url($register_url); ?>" class="btn-cd open-booking">Book This Course</a>
  </div>

  <!-- MASK FITTING -->
  <div class="course-detail" id="mask">
    <div><div class="cd-img ci3" role="img" aria-label="Mask Fitting"></div></div>
    <div>
      <h2 class="cd-title">Mask Fitting</h2>
      <div class="cd-meta-row">
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Quick appointment</span>
      </div>
      <p class="cd-desc">Professional respirator mask fit testing to ensure proper seal and protection. Required by many workplaces for employees who use N95 or similar respirator masks. We use quantitative and qualitative testing methods to verify your mask fits correctly.</p>
      <p class="cd-desc">A proper fit is critical — an ill-fitting respirator offers little to no protection against airborne hazards. Our certified technicians test you with the exact mask model your workplace requires, ensuring a secure seal every time. You'll receive official fit test documentation on the spot, meeting OHSA and CSA Z94.4 compliance requirements. Ideal for healthcare workers, construction crews, laboratory staff, and any employee working in environments that require respiratory protection.</p>
    </div>
    <div class="cd-columns">
      <div>
        <div class="cd-section-title">What's Included</div>
        <ul class="cd-list">
          <li>Professional fit test using approved protocols</li>
          <li>Multiple mask sizes available for testing</li>
        </ul>
      </div>
      <div>
        <ul class="cd-list">
          <li>Fit test documentation &amp; certificate</li>
          <li>Guidance on proper mask use and maintenance</li>
        </ul>
      </div>
    </div>
    <a href="<?php echo esc_url($register_url); ?>" class="btn-cd open-booking">Book This Course</a>
  </div>

  <!-- RECERTIFICATION -->
  <div class="course-detail" id="recert">
    <div><div class="cd-img ci4" role="img" aria-label="Recertification"></div></div>
    <div>
      <h2 class="cd-title">Recertification</h2>
      <div class="cd-meta-row">
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Online + in-person session</span>
        <span class="cd-meta"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Renews your certification</span>
      </div>
      <p class="cd-desc">Already certified? Renew your credentials efficiently. Complete theory online at your own pace, then attend a shorter in-person skills session to refresh your hands-on abilities. A valid, unexpired certificate is required.</p>
      <p class="cd-desc">Recertification keeps your skills sharp and your credentials current without repeating the full course. You'll review updated guidelines online, then demonstrate your CPR and first aid techniques in a focused in-person session with an instructor. Available for both Basic and Intermediate First Aid holders. Note: under the CSA Z1210 standard, certificates may only be renewed once — after that, the full course is required. Your renewed WSIB Approved certificate is emailed the same day.</p>
    </div>
    <div class="cd-columns">
      <div>
        <div class="cd-section-title">Duration</div>
        <ul class="cd-list">
          <li>Basic First Aid: 8-hour refresher</li>
          <li>Intermediate First Aid: 8-hour refresher</li>
        </ul>
        <div class="cd-section-title">Important</div>
        <ul class="cd-list">
          <li>Certificates may only be renewed once via recertification</li>
          <li>After one renewal, the full original course is required</li>
        </ul>
      </div>
      <div>
        <div class="cd-section-title">Completion Requirements</div>
        <ul class="cd-list cd-completion">
          <li>Successfully demonstrate skills and critical steps</li>
          <li>Minimum 75% on written knowledge evaluation</li>
          <li>Valid, unexpired certification required</li>
        </ul>
        <div class="cd-section-title">Participant Materials</div>
        <ul class="cd-list">
          <li>Online theory module (self-paced)</li>
          <li>Updated digital certificate upon completion</li>
        </ul>
      </div>
    </div>
    <a href="<?php echo esc_url($register_url); ?>" class="btn-cd open-booking">Book This Course</a>
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
      <p>Book online, call us at <?php echo esc_html( gtacpr_phone() ); ?>, or email <?php echo esc_html( gtacpr_email() ); ?>. Classes run 7 days a week across the GTA.</p>
    </div>
    <div class="cta-band-btns">
      <a href="<?php echo esc_url($register_url); ?>" class="btn-cta-primary open-booking">Book a Class</a>
      <a href="<?php echo esc_url($group_url); ?>" class="btn-cta-outline">Group Training</a>
    </div>
  </div>

</div>

<?php
// SCHEMA-02: Course structured data (ItemList with ListItem wrappers)
$_cfg = gtacpr_config();
$_courses_url = gtacpr_url('courses');
$_home_url = home_url('/');
$_courses_schema = [];
$_pos = 0;
// Map durations to ISO 8601
$_dur_map = [ '8 hours (1 day)' => 'PT8H', '16 hours (2 days)' => 'PT16H', 'Online + 8-hour in-person' => 'PT8H', '30 minutes' => 'PT30M' ];
foreach ( $_cfg['courses'] as $c ) {
    if ( isset( $c['schema'] ) && $c['schema'] === false ) continue;
    $_pos++;
    $course = [
        '@type'       => 'Course',
        'name'        => $c['name'],
        'description' => $c['notes'],
        'url'         => $_courses_url . '#' . $c['id'],
        'provider'    => [
            '@type' => 'Organization',
            'name'  => $_cfg['name'],
            'url'   => $_home_url,
        ],
    ];
    if ( $c['duration'] && isset( $_dur_map[ $c['duration'] ] ) ) {
        $course['timeRequired'] = $_dur_map[ $c['duration'] ];
    }
    if ( $c['price'] !== null ) {
        $course['offers'] = [
            '@type'         => 'Offer',
            'price'         => (string) $c['price'],
            'priceCurrency' => 'CAD',
            'url'           => $_courses_url . '#' . $c['id'],
            'availability'  => 'https://schema.org/InStock',
        ];
    }
    $_courses_schema[] = [
        '@type'    => 'ListItem',
        'position' => $_pos,
        'item'     => $course,
    ];
}
?>
<script type="application/ld+json"><?php echo wp_json_encode([
    '@context'  => 'https://schema.org',
    '@type'     => 'ItemList',
    'itemListElement' => $_courses_schema,
]); ?></script>

<?php get_footer(); ?>
