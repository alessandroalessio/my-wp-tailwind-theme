<?php

if ( ! defined( 'ATW_VERSION' ) ) {
	define( 'ATW_VERSION', '0.1.0' );
}

/**
 * Themes Setup
 * included languages and menus
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets-init.php';

/**
 * Scripts and Styles 
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * TinyMCE Tailwind Classes
 */
require get_template_directory() . '/inc/tinymce-tailwind-classes.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Action for display Search Overlay
 */
function atw_navigation_overlay() { 
	get_template_part('template-parts/components/navigation-overlay');
} 
add_action('wp_body_open', 'atw_navigation_overlay');

/**
 * Action for display Search Overlay
 */
function atw_search_overlay() { 
	get_template_part('template-parts/components/search-overlay');
} 
if ( get_theme_mod('atw_show_search_in_header')!='no' ) add_action('wp_body_open', 'atw_search_overlay');

/**
 * Action for display Social Overlay
 */
function atw_social_overlay() { 
	get_template_part('template-parts/components/social-overlay');
} 
if ( get_theme_mod('atw_show_social_nav_in_header')!='no' ) add_action('wp_body_open', 'atw_social_overlay');