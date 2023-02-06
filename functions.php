<?php

    define('STANDART_DIR', get_stylesheet_directory_uri() . "/assets/");

    add_action('wp_enqueue_scripts', function() {

        wp_enqueue_style('style-v2', get_stylesheet_directory_uri() . '/assets/css/style-v2.min.css', ['new-styles','styles-ver-2.0'], '2.0.0');

        wp_enqueue_script('scripts-v2', get_stylesheet_directory_uri() . '/assets/js/scripts-v2.min.js', [], '2.0.0', true );

    });

    add_post_type_support( 'page', array('excerpt') );

    /* Actions */
    include_once(__DIR__ . '/inc/actions.php');
    /* Битрикс 24 - вебхук */
    include_once(__DIR__ . '/inc/bitrix24-webhook.php');