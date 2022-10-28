<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atw
 */

?>

<header id="masthead" class="flex flex-row border-b py-5 px-2 items-center">

	<div class="basis-2/12">
		<?php get_template_part('template-parts/components/header-logo'); ?>
	</div>

	<div class="basis-10/12">
		<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'atw' ); ?>">
			<button aria-controls="primary-menu" aria-expanded="false" class="inline-block md:hidden"><?php esc_html_e( 'Menu', 'atw' ); ?></button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>

</header><!-- #masthead -->