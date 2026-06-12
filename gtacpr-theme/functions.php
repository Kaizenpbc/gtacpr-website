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
