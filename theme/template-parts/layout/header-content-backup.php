<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atw
 */

?>
<div id="main-header-wrapper">
	<header id="masthead" class="flex py-5 px-6 items-center justify-between <?php echo ( get_theme_mod('atw_header_fixed_on_scroll')=='true' ) ? 'fix-on-scroll' : ''; ?>">

	<div class="w-4/6 flex justify-start items-center">
		<?php
		/**
		 * Search
		 */
		if ( get_theme_mod('atw_show_search_in_header')!='no' && get_theme_mod('atw_show_search_in_header')=='yes-left' ) get_template_part('template-parts/components/header-search'); ?>

		<?php
		/**
		 * Social
		 */
		if ( get_theme_mod('atw_show_social_nav_in_header')!='no' && get_theme_mod('atw_show_social_nav_in_header')=='yes-left' ) get_template_part('template-parts/components/header-social');
		?>

		<?php
		/**
		 * Header Navigation
		 */
		get_template_part('template-parts/components/header-navigation'); ?>
	</div>

		<div class="text-center w-2/6">
			<?php get_template_part('template-parts/components/header-logo'); ?>
		</div>

		<div class="text-right w-4/6 flex justify-end items-center">
			<?php
			/**
			 * Language Switcher
			 */
			get_template_part('template-parts/components/languages-switcher', 'polylang', [
				'dropdown' => 0, //displays a list if set to 0, a dropdown list if set to 1 (default: 0)
				'show_names' => 1, //displays language names if set to 1 (default: 1)
				'display_names_as' => 'slug', //either 'name' or 'slug' (default: 'name')
				'show_flags' => 0, //displays flags if set to 1 (default: 0)
				'hide_if_empty' => 0, //hides languages with no posts (or pages) if set to 1 (default: 1)
				'force_home' => 0, //forces link to homepage if set to 1 (default: 0)
				'hide_if_no_translation' => 0, //hides the language if no translation exists if set to 1 (default: 0)
				'hide_current'=> 0, //hides the current language if set to 1 (default: 0)
				'raw' => 0 //use this to create your own custom language switcher (default:0)
			]); ?>
			
			<?php
			/**
			 * Search
			 */
			if ( get_theme_mod('atw_show_search_in_header')!='no' && get_theme_mod('atw_show_search_in_header')=='yes-right' ) get_template_part('template-parts/components/header-search'); ?>
			
			<?php
			/**
			 * Social
			 */
			if ( get_theme_mod('atw_show_social_nav_in_header')!='no' && get_theme_mod('atw_show_social_nav_in_header')=='yes-right' ) get_template_part('template-parts/components/header-social');
			?>

			<?php
			/**
			 * Call to Action
			 */
			get_template_part('template-parts/components/header-cta'); ?>
		</div>

	</header><!-- #masthead -->
</div>