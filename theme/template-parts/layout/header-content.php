<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atw
 */

?>
<div id="main-header-wrapper" class="<?php echo ( get_theme_mod('atw_header_fullfixed')=='true' ) ? 'fullfixed' : ''; ?> bg-transparent">
	<header id="masthead" class="flex max-w-7xl mx-auto py-12 items-center justify-between <?php echo ( get_theme_mod('atw_header_fixed_on_scroll')=='true' ) ? 'fix-on-scroll' : ''; ?>">

		<div class="text-right w-full">
			<?php get_template_part('template-parts/components/header-logo'); ?>
		</div>

	</header><!-- #masthead -->
</div>