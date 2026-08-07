<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>

<div class="page-hero" style="min-height:auto">
  <div class="page-hero-inner" style="padding:clamp(3rem,8vw,5rem) 1.25rem;text-align:center">
    <h1>Page Not Found</h1>
    <p class="page-hero-sub">Sorry, the page you're looking for doesn't exist or has been moved.</p>
  </div>
</div>

<div class="section" style="text-align:center;padding:3rem 1.25rem">
  <div class="section-inner" style="max-width:560px;margin:0 auto">
    <p style="font-size:15px;color:var(--g600);line-height:1.7;margin-bottom:2rem">Here are some helpful links to get you back on track:</p>
    <div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn-cta-primary">Back to Home</a>
      <a href="<?php echo esc_url( gtacpr_url('courses') ); ?>" class="btn-cta-outline" style="color:var(--g800);border-color:var(--g200)">View Courses</a>
      <a href="<?php echo esc_url( gtacpr_url('contact') ); ?>" class="btn-cta-outline" style="color:var(--g800);border-color:var(--g200)">Contact Us</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
