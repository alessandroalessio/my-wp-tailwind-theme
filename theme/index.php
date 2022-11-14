<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atw
 */

get_header();
?>

	<section id="primary">
		<main id="main" class="<?php atw_main_classes('px-6 mx-auto'); ?>">

		<?php if ( is_home() && get_theme_mod('atw_content_hero_title') ) : ?>
			<div id="hero" class="bg-gray-100 rounded-xl p-8 mb-12">
				<h2 class="font-bold text-3xl"><?php echo get_theme_mod('atw_content_hero_title'); ?></h2>
				<p class="font-serif my-4"><?php echo get_theme_mod('atw_content_hero_text'); ?></p>
				<div class="text-right"><a href="<?php echo get_theme_mod('atw_content_hero_cta_url'); ?>" class="btn btn-primary"><?php echo get_theme_mod('atw_content_hero_cta_label'); ?></a></div>
			</div>
		<?php endif; ?>

		<?php
		if ( have_posts() ) {

			if ( is_home() && ! is_front_page() ) :
				?>
				<header class="entry-header">
					<h1 class="entry-title"><?php single_post_title(); ?></h1>
				</header><!-- .entry-header -->
				<?php
			endif;

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			atw_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
