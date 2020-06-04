<?php
    function strategiczne_styles(){
        wp_enqueue_style( 'styles', get_stylesheet_uri(), false, null, "all");
    }

    function strategiczne_scripts(){
        wp_enqueue_script( 'bundle', get_template_directory_uri().'/bundle.js', array(), false, true);
    }

    function change_search_url() {
        if ( is_search() && ! empty( $_GET['s'] ) ) {
            wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
            exit();
        }   
    }

    add_action('wp_enqueue_scripts', 'strategiczne_styles');
    add_action( 'wp_enqueue_scripts', 'strategiczne_scripts');
    add_action( 'template_redirect', 'change_search_url' );

    function getCategory(){
        $categories = get_the_category();
        if($categories){
            foreach ($categories as $category) {
                return "<a href='" . get_category_link($category->term_id) . "'>" . $category->cat_name . "</a>";
            }
        }
    }

    function strategicznegry_setup(){
        register_nav_menus( array(
            'navigation' => __('Nav Menu'),
            'footer' => __('Footer Menu'))
        );
    
        $defaults = array(
            'height' => 50,
            'width' => 500,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description')
        );

        $defaultsHeader = array(
            'height' => 40,
            'width' => 300,
            'flex-height' => true,
            'flex-width' => true,
            'default-image' => get_template_directory_uri() . '/images/header.png',
            'upload' => true
        );
    
        add_theme_support('custom-header', $defaultsHeader);
        add_theme_support('custom-logo', $defaults);
        add_theme_support('post-thumbnails');
        add_image_size('cat-thumbnail', 192, 108, false);
        add_image_size('smallest-thumbnail', 256, 144, false);
        add_image_size('small-thumbnail', 426, 240, false);
        add_image_size('large-thumbnail', 1024, 576, false);
        add_image_size('hd-thumbnail', 1280, 720, false);
        add_image_size('banner-image', 920, 210, true);
    }
    add_action('after_setup_theme', 'strategicznegry_setup');
    add_action( 'after_setup_theme', function() {
        add_theme_support( 'responsive-embeds' );
    } );

    function custom_excerpt_length() {
        return 15;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length');
?>