<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class=header>
    <div class="header__content container">
        <div class="header__top">
            <div class=header__logo-box>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php header_image(); ?>" class="header__img" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </a>
            </div>
            <div class="hamburger-menu">
                <div class="hamburger-menu__icon"></div>
            </div>
        </div>
        <div class="header__menu">
            <nav class=header__navigation role="navigation">
                <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'navigation',
                                'menu_class'     => 'header__navigation-menu',
                            )
                        );
                ?>
            </nav>
            <div class="searchform">
                <?php get_search_form() ?>
            </div>
        </div>
    </div>
</header>

<main id="main" class="main-section u-margin-top-big">