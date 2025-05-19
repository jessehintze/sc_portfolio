<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jh_theme
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta name="viewport" content="width=device-width"> -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<link rel="stylesheet" href="https://use.typekit.net/mvf0epv.css">
<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
<script src="https://kit.fontawesome.com/5e39f709e9.js" crossorigin="anonymous"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jh_theme' ); ?></a>

    <section class="side-nav">
        <div>
            <a class="logo hide-sm hide-md hide-xs" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url')?>/images/logo.png" alt="Jesse Hintze - Branding & Graphics" /></a>
            <a class="logo hide-lg" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url')?>/images/logo_horizontal.png" alt="Jesse Hintze - Branding & Graphics" /></a>
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
            <?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'social' ) ); ?>
        </div>
    </section>
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url')?>/images/logo_horizontal.png" alt="Jesse Hintze - Branding & Graphics" /></a>
        </div><!-- .site-branding -->
        <div id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header><!-- #masthead -->
    <div id="page" class="site">
        <div id="content" class="site-content">
