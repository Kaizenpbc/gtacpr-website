<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content">Skip to main content</a>

<!-- TOP BAR -->
<div class="topbar" id="topbar"><?php echo gtacpr_topbar_message(); ?><button class="topbar-close" id="topbarClose" aria-label="Dismiss announcement"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button></div>

<!-- NAV -->
<nav class="sitenav">
  <div class="nav-inner">
    <a href="<?php echo home_url('/'); ?>" class="nav-logo" aria-label="GTA CPR Home">
      <?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/gtacpr-logo.png" alt="GTA CPR home" width="325" height="88" />
      <?php endif; ?>
    </a>
    <a href="https://www.virtualbadge.io/certificate-validator?credential=1e259afa-4016-4c00-bc46-bd7ef0c180bd" target="_blank" rel="noopener noreferrer" class="nav-wsib" title="Verify WSIB Credential">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      <span>WSIB Approved</span>
    </a>

    <ul class="nav-links" aria-label="Main navigation">
      <?php
        $home = home_url('/');
        $reviews_link  = is_front_page() ? '#reviews'  : $home . '#reviews';
        $faq_link      = is_front_page() ? '#faq'      : $home . '#faq';
      ?>
      <?php echo gtacpr_nav_item( 'About',         get_permalink( get_page_by_path('about') ),          'about' ); ?>
      <?php echo gtacpr_nav_item( 'Courses',       get_permalink( get_page_by_path('courses') ),        'courses' ); ?>
      <?php echo gtacpr_nav_item( 'Group Training', get_permalink( get_page_by_path('group-training') ), 'group-training' ); ?>
      <?php echo gtacpr_nav_item( 'ESL',           get_permalink( get_page_by_path('esl') ),            'esl' ); ?>
      <?php echo gtacpr_nav_item( 'Providers',     get_permalink( get_page_by_path('providers') ),     'providers' ); ?>
      <li><a href="<?php echo esc_url($reviews_link); ?>">Reviews</a></li>
      <li><a href="<?php echo esc_url($faq_link); ?>">FAQ</a></li>
      <?php echo gtacpr_nav_item( 'Contact',       get_permalink( get_page_by_path('contact') ),        'contact' ); ?>
    </ul>

    <div class="nav-right">
      <a href="tel:<?php echo esc_attr( gtacpr_phone_raw() ); ?>" class="nav-phone">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14z"/></svg>
        <?php echo esc_html( gtacpr_phone() ); ?>
      </a>
      <a href="<?php echo esc_url( gtacpr_portal_url() ); ?>" target="_blank" rel="noopener noreferrer" class="nav-btn-outline">Client Portal</a>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path('register') ) ); ?>" class="nav-btn open-booking">Book a Class</a>
    </div>

    <a href="tel:<?php echo esc_attr( gtacpr_phone_raw() ); ?>" class="nav-call-mob" aria-label="Call us">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14z"/></svg>
    </a>
    <button class="nav-hamburger" id="hbBtn" aria-label="Open menu" aria-expanded="false">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
    </button>
  </div>
</nav>

<main id="main-content" tabindex="-1">

<!-- MOBILE DRAWER -->
<div class="drawer-overlay" id="dOverlay"></div>
<div class="drawer" id="drawer" role="dialog" aria-modal="true" aria-label="Navigation">
  <div class="drawer-header">
    <span class="drawer-header-title">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/gtacpr-logo.png" alt="GTA CPR" width="325" height="88" style="height:32px;width:auto;display:block" loading="lazy" />
    </span>
    <button class="drawer-close" id="dClose" aria-label="Close menu">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <ul class="drawer-nav">
    <li><a href="<?php echo get_permalink( get_page_by_path('about') ); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>About Us</a></li>
    <li><a href="<?php echo get_permalink( get_page_by_path('courses') ); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>Courses</a></li>
    <li><a href="<?php echo get_permalink( get_page_by_path('group-training') ); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>Group Training</a></li>
    <li><a href="<?php echo get_permalink( get_page_by_path('esl') ); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>ESL Classes</a></li>
    <li><a href="<?php echo get_permalink( get_page_by_path('providers') ); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>Providers</a></li>
    <li><a href="<?php echo esc_url($reviews_link); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>Reviews</a></li>
    <li><a href="<?php echo esc_url($faq_link); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>FAQ</a></li>
    <li><a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>"<?php echo is_page('contact') ? ' style="color:var(--red)"' : ''; ?>><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14z"/></svg>Contact</a></li>
  </ul>
  <div class="drawer-footer">
    <a href="tel:<?php echo esc_attr( gtacpr_phone_raw() ); ?>" class="d-call"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14z"/></svg> <?php echo esc_html( gtacpr_phone() ); ?></a>
    <a href="<?php echo esc_url( get_permalink( get_page_by_path('register') ) ); ?>" class="d-book open-booking">Book a Class →</a>
  </div>
</div>
