<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atw
 */

?>

<header id="masthead" class="flex border-b py-5 px-6 items-center justify-between">

	<div class="w-4/6 flex justify-start items-center">
		<?php if ( get_theme_mod('atw_show_search_in_header')!='no' && get_theme_mod('atw_show_search_in_header')=='yes-left' ) get_template_part('template-parts/components/header-search'); ?>
		<?php get_template_part('template-parts/components/header-navigation'); ?>
	</div>

	<div class="text-center w-2/6">
		<?php get_template_part('template-parts/components/header-logo'); ?>
	</div>

	<div class="text-right w-4/6 flex justify-end items-center">
		<?php if ( get_theme_mod('atw_show_search_in_header')!='no' && get_theme_mod('atw_show_search_in_header')=='yes-right' ) get_template_part('template-parts/components/header-search'); ?>
		<?php get_template_part('template-parts/components/header-cta'); ?>
	</div>

</header><!-- #masthead -->