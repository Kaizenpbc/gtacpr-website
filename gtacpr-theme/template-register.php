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
          $price_display = $c['price'] !== null
            ? '$' . esc_html( $c['price'] ) . '<span>/person</span>'
            : '<span>Contact for pricing</span>';
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

<?php get_footer(); ?>
