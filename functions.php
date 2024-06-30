<?php

function my_theme_setup() {
    // Add support for custom logo
    // add_theme_support('custom-logo', array(
    //     'height'      => 130,
    //     'width'       => 130,
    //     'flex-height' => true,
    //     'flex-width'  => true,
    // ));
    // add_theme_support('post-thumbnails');
    // Add support for post thumbnails
    add_theme_support('post-thumbnails', array(
        'post',
        'page',
        'service',
    ));

    // Set custom dimensions for post thumbnails
    add_image_size('custom-thumbnail', 130, 130, array('center', 'center'));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 130,
        'width'       => 130,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
        'footer-menu-one' => __('Footer Menu One'),
        'footer-menu-two' => __('Footer Menu Two'),
        // 'footer-menu-three' => __('Footer Menu Three', 'my-theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');


function marketi_enqueue_scripts() {
    // Favicon
    echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/images/favicon.png" />';
    // styles
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css');
    wp_enqueue_style('all-min', get_template_directory_uri() . '/assets/css/all.min.css');
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    // scripts
    wp_enqueue_script('jquery-3.7.1', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), '3.7.1', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array('jquery'), null, true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/nice-select.min.js', array('jquery'), null, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.js', array('jquery'), null, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);

    if (is_singular()) wp_enqueue_script('comment-reply');
}
add_action('wp_enqueue_scripts', 'marketi_enqueue_scripts');
