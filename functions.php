<?php
/**
 * Functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package Ndrade
 * @subpackage Gran Park
 * @since Empreendimentos 1.0
 */

/**
 * Setup.
 *
 * Sets up theme defaults and registers the features
 *
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 *
 * @since Empreendimentos 1.0
 */
function granpark_setup() {
	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'granpark' ) );
	
	// Register custom navigation walker
	require_once('inc/wp_bootstrap_navwalker.php');
}
add_action( 'after_setup_theme', 'granpark_setup' );

/**
 * Enqueue scripts and styles for front-end.
 *
 * @since Empreendimentos 1.0
 * @return void
 */
function granpark_scripts_styles() {
	//jQuery
	wp_enqueue_script( 'jquery');
	
	/*
	 * Bootstrap
	 * url: http://getbootstrap.com/
	 */
	wp_enqueue_script( 'granpark-bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('jquery'), '3.1.1', false);
	wp_enqueue_style( 'granpark-bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css', array(), '3.1.1');

	//Backgrounds
	wp_enqueue_style( 'granpark-background', get_template_directory_uri() . '/css/background.css', array(), '1.0');
	
	//Navbar-default overide
	wp_enqueue_style( 'granpark-nav', get_template_directory_uri() . '/css/navbar-default.css', array('granpark-bootstrap'), '1.0');
	
}
add_action( 'wp_enqueue_scripts', 'granpark_scripts_styles' );