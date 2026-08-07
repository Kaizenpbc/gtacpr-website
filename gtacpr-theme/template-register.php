<?php
/* Template Name: Book a Class */
get_header();
$home_url    = home_url('/');
$contact_url = get_permalink( get_page_by_path('contact') );
?>

<div class="page-hero">
  <div class="page-hero-bg" role="img" aria-label="CPR class booking" style="background-image:url('https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1400&q=80')"></div>
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

    <!-- SimplyBook.me booking widget -->
    <div class="booking-embed">
      <iframe src="https://gtacprfrontend.simplybook.me/v2/" title="Book a CPR or First Aid class" loading="lazy" allowfullscreen></iframe>
    </div>

    <!-- Course reference cards (DATA-01: generated from business-config.php) -->
    <div class="courses-ref">
      <h3>Course Reference</h3>
      <div class="courses-ref-grid">
        <?php
        $courses = gtacpr_config('courses');
        foreach ( $courses as $c ) :
          if ( $c['id'] === 'esl' ) continue; // ESL has its own page
          $is_popular = $c['id'] === 'efa';
          $price_display = $c['price'] !== null ? '$' . $c['price'] . '<span>/person</span>' : '<span>Contact for pricing</span>';
          $meta_parts = [];
          if ( $c['duration'] ) $meta_parts[] = $c['duration'];
          if ( $c['cert_years'] ) $meta_parts[] = $c['cert_years'] . '-year cert';
        ?>
        <div class="ref-card<?php echo $is_popular ? ' ref-popular' : ''; ?>">
          <?php if ( $is_popular ) : ?><div class="ref-badge">Most Popular</div><?php endif; ?>
          <div class="ref-name"><?php echo esc_html( $c['name'] ); ?></div>
          <div class="ref-meta"><?php echo esc_html( implode( ' · ', $meta_parts ) ); ?></div>
          <div class="ref-price"><?php echo $price_display; ?></div>
          <ul class="ref-list">
            <li><?php echo esc_html( $c['notes'] ); ?></li>
            <li>WSIB Approved</li>
            <li><?php echo esc_html( gtacpr_config('policies')['cert_delivery'] ); ?></li>
          </ul>
        </div>
        <?php endforeach; ?>
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
.booking-embed{background:var(--w);border-radius:16px;overflow:hidden;margin-bottom:3rem;box-shadow:var(--sh)}
.booking-embed iframe{width:100%;height:700px;border:0;display:block}
@media(max-width:768px){.booking-embed iframe{height:600px}}
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
@media(max-width:480px){.courses-ref-grid{grid-template-columns:1fr}.booking-embed iframe{height:500px}}
</style>

<?php get_footer(); ?>
