<?php
/**
 * GTACPR Theme Functions
 */

require_once get_template_directory() . '/inc/business-config.php';

function gtacpr_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption' ] );
}
add_action( 'after_setup_theme', 'gtacpr_setup' );

function gtacpr_enqueue() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'gtacpr-style',
        get_stylesheet_uri(),
        [ 'google-fonts' ],
        filemtime( get_template_directory() . '/style.css' )
    );
    wp_enqueue_script(
        'gtacpr-main',
        get_template_directory_uri() . '/main.js',
        [],
        filemtime( get_template_directory() . '/main.js' ),
        true
    );
    wp_enqueue_script(
        'gtacpr-chat',
        get_template_directory_uri() . '/chat-widget.js',
        [],
        filemtime( get_template_directory() . '/chat-widget.js' ),
        true
    );
    wp_localize_script( 'gtacpr-chat', 'GTACPR', [
        'chatApiUrl' => get_template_directory_uri() . '/chat-api.php',
        'phone'      => gtacpr_phone(),
    ] );
}
add_action( 'wp_enqueue_scripts', 'gtacpr_enqueue' );

// SEC-01: setup-pages code removed — pages already exist, unauthenticated init hook was a security risk.

/**
 * Preload the hero background image for inner pages.
 * Improves LCP (Largest Contentful Paint) by fetching the hero image early.
 * Homepage hero is a CSS gradient — nothing to preload there.
 * Update these URLs when replacing Unsplash placeholders with real images.
 */
function gtacpr_preload_hero() {
    if ( is_front_page() ) {
        $url = get_template_directory_uri() . '/assets/hero-cpr1.jpg';
        echo '<link rel="preload" as="image" href="' . esc_url( $url ) . '">' . "\n";
        return;
    }
    $heroes = [
        'about'          => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1400&q=80',
        'group-training' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1400&q=80',
        'courses'        => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1400&q=80',
        'esl'            => 'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=1400&q=80',
        'register'       => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1400&q=80',
        'contact'        => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1400&q=80',
    ];
    foreach ( $heroes as $slug => $url ) {
        if ( is_page( $slug ) ) {
            echo '<link rel="preload" as="image" href="' . esc_url( $url ) . '">' . "\n";
            return;
        }
    }
}
add_action( 'wp_head', 'gtacpr_preload_hero', 1 );

/**
 * Helper: return true if current page matches slug
 */
function gtacpr_is( $slug ) {
    return is_page( $slug );
}

/**
 * Topbar message per page
 */
function gtacpr_topbar_message() {
    $phone = esc_html( gtacpr_phone() );
    $since = esc_html( gtacpr_config('since') );
    if ( is_front_page() ) {
        return '<strong>Now Booking Classes</strong> — Spots fill fast &nbsp;·&nbsp; <strong>' . $phone . '</strong>';
    }
    if ( is_page( 'group-training' ) ) {
        return '<strong>Group Training Available 24/7</strong> — We come to your location, any size team &nbsp;·&nbsp; <strong>' . $phone . '</strong>';
    }
    if ( is_page( 'esl' ) ) {
        return '<strong>ESL Classes Available</strong> — Mandarin · Cantonese · Greek &nbsp;·&nbsp; <strong>' . $phone . '</strong>';
    }
    if ( is_page( 'register' ) ) {
        return '<strong>Same-day certification</strong> — Your WSIB Approved certificate emailed the same day &nbsp;·&nbsp; <strong>' . $phone . '</strong>';
    }
    return '<strong>GTA CPR</strong> — WSIB Approved training since ' . $since . ' &nbsp;·&nbsp; <strong>' . $phone . '</strong>';
}

/**
 * Nav link helper — returns <li> with active class if current page
 */
function gtacpr_nav_item( $label, $href, $active_slug = '' ) {
    $active = '';
    if ( $active_slug ) {
        if ( $active_slug === 'home' && is_front_page() ) {
            $active = ' class="active"';
        } elseif ( is_page( $active_slug ) ) {
            $active = ' class="active"';
        }
    }
    return '<li><a href="' . esc_url( $href ) . '"' . $active . '>' . $label . '</a></li>';
}

/**
 * Unique page titles (SEO-01)
 */
function gtacpr_page_titles( $title_parts ) {
    $titles = [
        'home'           => 'GTA CPR — WSIB Approved CPR & First Aid Training in the GTA',
        'courses'        => 'CPR & First Aid Courses — GTA CPR',
        'about'          => 'About GTA CPR — Trusted Training Since ' . gtacpr_config('since'),
        'group-training' => 'Group & Workplace CPR Training — GTA CPR',
        'esl'            => 'ESL CPR Classes — Mandarin, Cantonese & Greek — GTA CPR',
        'contact'        => 'Contact GTA CPR — Call, Email, or Visit',
        'register'       => 'Book a CPR Class — GTA CPR',
        'providers'      => 'Authorized Training Providers — GTA CPR',
    ];
    if ( is_front_page() ) {
        return [ 'title' => $titles['home'] ];
    }
    foreach ( $titles as $slug => $t ) {
        if ( $slug !== 'home' && is_page( $slug ) ) {
            return [ 'title' => $t ];
        }
    }
    return $title_parts;
}
add_filter( 'document_title_parts', 'gtacpr_page_titles' );

/**
 * Meta descriptions + Open Graph tags (SEO-01, TECH-03)
 */
function gtacpr_meta_tags() {
    $cfg = gtacpr_config();
    $descriptions = [
        'home'           => 'Get WSIB Approved CPR and First Aid certification in the Greater Toronto Area. Same-day certificates, 7 days a week. Individual, group, and ESL classes available.',
        'courses'        => 'Basic First Aid (8 hrs) and Intermediate First Aid (16 hrs) aligned with CSA Z1210. Plus Mask Fitting and Recertification. WSIB Approved, same-day certification across the GTA.',
        'about'          => 'GTA CPR has provided WSIB Approved CPR and First Aid training across the Greater Toronto Area since ' . $cfg['since'] . '. ' . $cfg['rating'] . '-star Google rating, ' . $cfg['certified_count'] . '+ people certified.',
        'group-training' => 'On-site CPR and First Aid training for colleges, universities, and workplaces across the GTA. WSIB Approved, flexible scheduling, any group size.',
        'esl'            => 'CPR and First Aid classes taught in Mandarin, Cantonese, and Greek. Same WSIB Approved certification, bilingual instructors, no English required.',
        'contact'        => 'Reach GTA CPR at ' . $cfg['phone'] . ' or ' . $cfg['email'] . '. Located in ' . $cfg['city'] . ', serving the entire GTA. Available 7 days a week.',
        'register'       => 'Book your WSIB Approved CPR or First Aid class online. Choose your course, pick a date, and get certified. Same-day digital certificate.',
        'providers'      => 'GTA CPR authorized training provider information and credentials.',
    ];
    $desc = '';
    $title = '';
    if ( is_front_page() ) {
        $desc  = $descriptions['home'];
        $title = 'GTA CPR — WSIB Approved CPR & First Aid Training in the GTA';
    } else {
        foreach ( $descriptions as $slug => $d ) {
            if ( $slug !== 'home' && is_page( $slug ) ) {
                $desc = $d;
                break;
            }
        }
        $title = wp_get_document_title();
    }
    if ( $desc ) {
        echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:site_name" content="GTA CPR">' . "\n";
        echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
        $og_url = is_front_page() ? home_url( '/' ) : get_permalink();
        echo '<meta property="og:url" content="' . esc_url( $og_url ) . '">' . "\n";
        $og_image = get_template_directory_uri() . '/assets/gtacpr-og.png';
        echo '<meta property="og:image" content="' . esc_url( $og_image ) . '">' . "\n";
        echo '<meta property="og:locale" content="en_CA">' . "\n";
        echo '<meta name="twitter:card" content="summary">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr( $desc ) . '">' . "\n";
        echo '<meta name="twitter:image" content="' . esc_url( $og_image ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'gtacpr_meta_tags', 1 );

// Remove WordPress version meta tag (TECH-03)
remove_action( 'wp_head', 'wp_generator' );

// Prevent staging site from being indexed (TECH-01)
function gtacpr_staging_noindex() {
    if ( isset( $_SERVER['HTTP_HOST'] ) && strpos( $_SERVER['HTTP_HOST'], 'stagegtacpr' ) !== false ) {
        echo '<meta name="robots" content="noindex, nofollow">' . "\n";
    }
}
add_action( 'wp_head', 'gtacpr_staging_noindex', 0 );

add_action( 'send_headers', function() {
    if ( isset( $_SERVER['HTTP_HOST'] ) && strpos( $_SERVER['HTTP_HOST'], 'stagegtacpr' ) !== false ) {
        header( 'X-Robots-Tag: noindex, nofollow', true );
    }
    // SEC-03: Security headers
    header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains' );
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'Referrer-Policy: strict-origin-when-cross-origin' );
    header( 'Permissions-Policy: geolocation=(), microphone=(), camera=()' );
    // SEC-09: Content Security Policy
    header( "Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' https://images.unsplash.com data:; frame-src https://gtacprfrontend.simplybook.me https://www.virtualbadge.io https://www.google.com; connect-src 'self' https://formspree.io; base-uri 'self'; form-action 'self' https://formspree.io;" );
} );

/**
 * Canonical URL tag (SEO-06)
 */
function gtacpr_canonical() {
    if ( is_front_page() ) {
        $url = home_url( '/' );
    } elseif ( is_page() ) {
        $url = get_permalink();
    } else {
        return;
    }
    echo '<link rel="canonical" href="' . esc_url( $url ) . '">' . "\n";
}
add_action( 'wp_head', 'gtacpr_canonical', 1 );
