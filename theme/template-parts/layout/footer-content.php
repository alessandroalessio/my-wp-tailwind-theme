<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atw
 */

?>

<div class="footer-wrapper border-t-6 pt-8">
	<footer class="max-w-7xl m-auto">
		<?php if ( is_active_sidebar( 'footer' ) ) : ?>
			<div id="footer-top" class="md:flex py-5 px-0 md:justify-between md:space-x-5">
				<?php dynamic_sidebar( 'footer' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( get_theme_mod('atw_footer_text')!='' ) : ?>
			<div id="footer-bottom" class="text-xs font-thin py-8 px-0 <?php echo ( get_theme_mod('atw_footer_text_right')!='' ) ? 'flex items-center justify-between' : ''; ?>">
				<div id="footer-text" class="text-left leading-5">
					<?php echo get_theme_mod('atw_footer_text'); ?>
				</div>

				<?php if ( get_theme_mod('atw_footer_text_right')!='' ) : ?>
					<div id="footer-text-right" class="text-center">
						<?php echo get_theme_mod('atw_footer_text_right');?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>

	</footer><!-- #colophon -->
</div>

<?php get_template_part('template-parts/components/whatsapp-cta'); ?>