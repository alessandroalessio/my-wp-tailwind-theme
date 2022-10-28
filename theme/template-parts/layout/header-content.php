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

	<div class="basis-10/12 md:text-right">
		<?php get_template_part('template-parts/components/header-navigation'); ?>
	</div>

</header><!-- #masthead -->