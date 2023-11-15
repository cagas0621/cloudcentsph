<?php

function cloudcentsph_css()
{
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('bootstrapstack', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), wp_get_theme()->get('Version'), 'all');

    $assets_path = get_template_directory() . '/assets/css';

    $files = scandir($assets_path);

    foreach ($files as $file) {

        if ($file === '.' || $file === '..') {
            continue;
        }

        $handle = 'style-' . sanitize_title(basename($file, '.css'));

        wp_enqueue_style($handle, get_theme_file_uri('/assets/css/' . $file));
    }
}
add_action('wp_enqueue_scripts', 'cloudcentsph_css');

function cloudcentsph_scripts()
{
    wp_enqueue_script(
        'bootstrapbundle',
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery',
        get_template_directory_uri() . '/assets/js/jquery.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery-migrate',
        get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery_waypoints',
        get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery_stellar',
        get_template_directory_uri() . '/assets/js/jquery.stellar.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery_carousel',
        get_template_directory_uri() . '/assets/js/owl.carousel.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery_magnific',
        get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery_animateNumber',
        get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'custom',
        get_template_directory_uri() . '/assets/js/custom.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_add_inline_script('custom', 'var url = "' . home_url() . '";');
}
add_action('wp_enqueue_scripts', 'cloudcentsph_scripts');
