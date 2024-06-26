<?php
// Theme setup
function wprealizer_starter_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );  // Enables title tag support
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );  // Enables HTML5 support
}
add_action( 'after_setup_theme', 'wprealizer_starter_setup' );

// Custom function to add content after the main content
function custom_content_after_main() {
    echo '<p>This is custom content added after the main content.</p>';
}
// Attach the custom function to the custom action hook
add_action('wprealizer_after_main_content', 'custom_content_after_main');
