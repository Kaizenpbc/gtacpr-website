<?php
/**
 * One-time page setup script — DELETE after running.
 */

require_once( dirname(__FILE__) . '/wp-load.php' );

$pages = [
    [ 'title' => 'Home',           'slug' => 'home',           'template' => 'template-home.php' ],
    [ 'title' => 'About',          'slug' => 'about',          'template' => 'template-about.php' ],
    [ 'title' => 'Courses',        'slug' => 'courses',        'template' => 'template-courses.php' ],
    [ 'title' => 'Group Training', 'slug' => 'group-training', 'template' => 'template-group-training.php' ],
    [ 'title' => 'ESL',            'slug' => 'esl',            'template' => 'template-esl.php' ],
    [ 'title' => 'Register',       'slug' => 'register',       'template' => 'template-register.php' ],
    [ 'title' => 'Contact',        'slug' => 'contact',        'template' => 'template-contact.php' ],
];

$results = [];

foreach ( $pages as $p ) {
    $existing = get_page_by_path( $p['slug'] );
    if ( $existing ) {
        update_post_meta( $existing->ID, '_wp_page_template', $p['template'] );
        wp_update_post([ 'ID' => $existing->ID, 'post_status' => 'publish', 'post_name' => $p['slug'] ]);
        $results[] = "Updated: {$p['title']} (ID {$existing->ID})";
    } else {
        $id = wp_insert_post([
            'post_title'  => $p['title'],
            'post_name'   => $p['slug'],
            'post_status' => 'publish',
            'post_type'   => 'page',
        ]);
        if ( $id && ! is_wp_error($id) ) {
            update_post_meta( $id, '_wp_page_template', $p['template'] );
            $results[] = "Created: {$p['title']} (ID {$id})";
        } else {
            $results[] = "FAILED: {$p['title']}";
        }
    }
}

$home_page = get_page_by_path('home');
if ( $home_page ) {
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $home_page->ID );
    $results[] = "Front page set to: Home (ID {$home_page->ID})";
}

echo "<pre style='font:14px monospace;padding:2rem'>";
echo "<b>GTA CPR — Page Setup</b>\n\n";
foreach ( $results as $r ) echo $r . "\n";
echo "\n<b>Done. DELETE this file: setup-pages.php</b>";
echo "</pre>";
