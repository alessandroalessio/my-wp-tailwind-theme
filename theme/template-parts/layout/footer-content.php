<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atw
 */

?>

<footer>
	<?php if ( is_active_sidebar( 'footer' ) ) : ?>
		<div id="footer-top" class="flex py-5 px-6 justify-between space-x-5 bg-gray-100">
			<?php dynamic_sidebar( 'footer' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( get_theme_mod('atw_footer_text')!='' ) : ?>
		<div id="footer-bottom" class="border-t py-5 px-6">
			<div id="footer-text" class="text-center">
				<?php echo get_theme_mod('atw_footer_text'); ?>
			</div>
		</div>
	<?php endif; ?>

</footer><!-- #colophon -->

<?php get_template_part('template-parts/components/whatsapp-cta'); ?>