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
        '1.8'
    );
    wp_enqueue_script(
        'gtacpr-chat',
        get_template_directory_uri() . '/chat-widget.js',
        [],
        '1.0',
        true
    );
    wp_localize_script( 'gtacpr-chat', 'GTACPR', [
        'chatApiUrl' => get_template_directory_uri() . '/chat-api.php',
    ] );
}
add_action( 'wp_enqueue_scripts', 'gtacpr_enqueue' );

/**
 * One-time page setup — auto-removes after running
 */
function gtacpr_setup_pages() {
    global $wpdb;

    // Fix home-page slug → home
    $wpdb->update( $wpdb->posts, [ 'post_name' => 'home' ],           [ 'post_name' => 'home-page',           'post_type' => 'page' ] );
    // Fix higher-ed-workplace slug → group-training
    $wpdb->update( $wpdb->posts, [ 'post_name' => 'group-training', 'post_title' => 'Group Training' ], [ 'post_name' => 'higher-ed-workplace', 'post_type' => 'page' ] );
    // Fix template-about slug → about
    $wpdb->update( $wpdb->posts, [ 'post_name' => 'about' ],          [ 'post_name' => 'template-about',      'post_type' => 'page' ] );

    // Ensure templates are assigned correctly
    $template_map = [
        'home'           => 'template-home.php',
        'about'          => 'template-about.php',
        'courses'        => 'template-courses.php',
        'group-training' => 'template-group-training.php',
        'esl'            => 'template-esl.php',
        'register'       => 'template-register.php',
        'contact'        => 'template-contact.php',
    ];
    foreach ( $template_map as $slug => $template ) {
        $page = get_page_by_path( $slug );
        if ( $page ) {
            update_post_meta( $page->ID, '_wp_page_template', $template );
        } else {
            // Create missing page
            $id = wp_insert_post([
                'post_title'  => ucwords( str_replace( '-', ' ', $slug ) ),
                'post_name'   => $slug,
                'post_status' => 'publish',
                'post_type'   => 'page',
            ]);
            if ( $id && ! is_wp_error($id) ) {
                update_post_meta( $id, '_wp_page_template', $template );
            }
        }
    }

    // Set Home as static front page
    clean_post_cache( 0 );
    $home = get_page_by_path('home');
    if ( $home ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home->ID );
    }

    // Remove self after running once
    remove_action( 'init', 'gtacpr_setup_pages' );
    update_option( 'gtacpr_pages_created', '2' );
}
if ( get_option('gtacpr_pages_created') !== '2' ) {
    add_action( 'init', 'gtacpr_setup_pages' );
}

/**
 * Preload the hero background image for inner pages.
 * Improves LCP (Largest Contentful Paint) by fetching the hero image early.
 * Homepage hero is a CSS gradient — nothing to preload there.
 * Update these URLs when replacing Unsplash placeholders with real images.
 */
function gtacpr_preload_hero() {
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
        return '<strong>Same-day certification</strong> — Your WSIB Approved certificate emailed within 24 hours &nbsp;·&nbsp; <strong>' . $phone . '</strong>';
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
        'about'          => 'About GTA CPR — Trusted Training Since 2013',
        'group-training' => 'Group & Workplace CPR Training — GTA CPR',
        'esl'            => 'ESL CPR Classes — Mandarin, Cantonese & Greek — GTA CPR',
        'contact'        => 'Contact GTA CPR — Call, Email, or Visit',
        'register'       => 'Book a CPR Class — GTA CPR',
        'providers'      => 'Authorized Training Providers — GTA CPR',
    ];
    if ( is_front_page() ) {
        $title_parts['title'] = $titles['home'];
        unset( $title_parts['site'] );
    } else {
        foreach ( $titles as $slug => $t ) {
            if ( $slug !== 'home' && is_page( $slug ) ) {
                $title_parts['title'] = $t;
                unset( $title_parts['site'] );
                break;
            }
        }
    }
    return $title_parts;
}
add_filter( 'document_title_parts', 'gtacpr_page_titles' );

/**
 * Meta descriptions + Open Graph tags (SEO-01, TECH-03)
 */
function gtacpr_meta_tags() {
    $descriptions = [
        'home'           => 'Get WSIB Approved CPR and First Aid certification in the Greater Toronto Area. Same-day certificates, 7 days a week. Individual, group, and ESL classes available.',
        'courses'        => 'Emergency First Aid, Standard First Aid, CPR Level C, Mask Fitting and Recertification. WSIB Approved courses with same-day certification across the GTA.',
        'about'          => 'GTA CPR has provided WSIB Approved CPR and First Aid training across the Greater Toronto Area since 2013. 4.9-star Google rating, 2,500+ people certified.',
        'group-training' => 'On-site CPR and First Aid training for colleges, universities, and workplaces across the GTA. WSIB Approved, flexible scheduling, any group size.',
        'esl'            => 'CPR and First Aid classes taught in Mandarin, Cantonese, and Greek. Same WSIB Approved certification, bilingual instructors, no English required.',
        'contact'        => 'Reach GTA CPR at 416-723-2571 or kpbcma@gmail.com. Located in Markham, serving the entire GTA. Available 7 days a week.',
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
        echo '<meta property="og:url" content="' . esc_url( home_url( $_SERVER['REQUEST_URI'] ) ) . '">' . "\n";
        echo '<meta name="twitter:card" content="summary">' . "\n";
    }
}
add_action( 'wp_head', 'gtacpr_meta_tags', 1 );

// Remove WordPress version meta tag (TECH-03)
remove_action( 'wp_head', 'wp_generator' );
