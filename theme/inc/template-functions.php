<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package atw
 */

/**
 * Changes comment form default fields.
 *
 * @param array $defaults The default comment form arguments.
 *
 * @return array Returns the modified fields.
 */
function atw_comment_form_defaults( $defaults ) {
	$comment_field = $defaults['comment_field'];

	// Adjust height of comment form.
	$defaults['comment_field'] = preg_replace( '/rows="\d+"/', 'rows="5"', $comment_field );

	return $defaults;
}
add_filter( 'comment_form_defaults', 'atw_comment_form_defaults' );

/**
 * Filters the default archive titles.
 */
function atw_get_the_archive_title() {
	if ( is_category() ) {
		$title = __( 'Category Archives: ', 'atw' ) . '<span>' . single_term_title( '', false ) . '</span>';
	} elseif ( is_tag() ) {
		$title = __( 'Tag Archives: ', 'atw' ) . '<span>' . single_term_title( '', false ) . '</span>';
	} elseif ( is_author() ) {
		$title = __( 'Author Archives: ', 'atw' ) . '<span>' . get_the_author_meta( 'display_name' ) . '</span>';
	} elseif ( is_year() ) {
		$title = __( 'Yearly Archives: ', 'atw' ) . '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'atw' ) ) . '</span>';
	} elseif ( is_month() ) {
		$title = __( 'Monthly Archives: ', 'atw' ) . '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'atw' ) ) . '</span>';
	} elseif ( is_day() ) {
		$title = __( 'Daily Archives: ', 'atw' ) . '<span>' . get_the_date() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$cpt   = get_post_type_object( get_queried_object()->name );
		$title = sprintf(
			/* translators: %s: Post type singular name */
			esc_html__( '%s Archives', 'atw' ),
			$cpt->labels->singular_name
		);
	} elseif ( is_tax() ) {
		$tax   = get_taxonomy( get_queried_object()->taxonomy );
		$title = sprintf(
			/* translators: %s: Taxonomy singular name */
			esc_html__( '%s Archives', 'atw' ),
			$tax->labels->singular_name
		);
	} else {
		$title = __( 'Archives:', 'atw' );
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'atw_get_the_archive_title' );

/**
 * Determines if post thumbnail can be displayed.
 */
function atw_can_show_post_thumbnail() {
	return apply_filters( 'atw_can_show_post_thumbnail', ! post_password_required() && ! is_attachment() && has_post_thumbnail() );
}

/**
 * Returns the size for avatars used in the theme.
 */
function atw_get_avatar_size() {
	return 60;
}

/**
 * Create the continue reading link
 */
function atw_continue_reading_link() {

	if ( ! is_admin() ) {
		$continue_reading = sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s', 'atw' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="sr-only">"', '"</span>', false )
		);

		return '... <a href="' . esc_url( get_permalink() ) . '" class="read-more">' . $continue_reading . '</a>';
	}
}

// Filter the excerpt more link.
add_filter( 'excerpt_more', 'atw_continue_reading_link' );

// Filter the content more link.
add_filter( 'the_content_more_link', 'atw_continue_reading_link' );

/**
 * Outputs a comment in the HTML5 format.
 *
 * This function overrides the default WordPress comment output in HTML5 format,
 * adding the required class for Tailwind Typography. Based on the
 * `html5_comment()` function from WordPress core.
 *
 * @param WP_Comment $comment Comment to display.
 * @param array      $args    An array of arguments.
 * @param int        $depth   Depth of the current comment.
 */
function atw_html5_comment( $comment, $args, $depth ) {
	$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

	$commenter          = wp_get_current_commenter();
	$show_pending_links = ! empty( $commenter['comment_author'] );

	if ( $commenter['comment_author_email'] ) {
		$moderation_note = __( 'Your comment is awaiting moderation.', 'atw' );
	} else {
		$moderation_note = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.', 'atw' );
	}
	?>
	<<?php echo esc_attr( $tag ); ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $comment->has_children ? 'parent' : '', $comment ); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
					if ( 0 !== $args['avatar_size'] ) {
						echo get_avatar( $comment, $args['avatar_size'] );
					}
					?>
					<?php
					$comment_author = get_comment_author_link( $comment );

					if ( '0' === $comment->comment_approved && ! $show_pending_links ) {
						$comment_author = get_comment_author( $comment );
					}

					printf(
						/* translators: %s: Comment author link. */
						wp_kses_post( __( '%s <span class="says">says:</span>', 'atw' ) ),
						sprintf( '<b class="fn">%s</b>', wp_kses_post( $comment_author ) )
					);
					?>
				</div><!-- .comment-author -->

				<div class="comment-metadata">
					<?php
					printf(
						'<a href="%s"><time datetime="%s">%s</time></a>',
						esc_url( get_comment_link( $comment, $args ) ),
						esc_attr( get_comment_time( 'c' ) ),
						esc_html(
							sprintf(
							/* translators: 1: Comment date, 2: Comment time. */
								__( '%1$s at %2$s', 'atw' ),
								get_comment_date( '', $comment ),
								get_comment_time()
							)
						)
					);

					edit_comment_link( __( 'Edit', 'atw' ), ' <span class="edit-link">', '</span>' );
					?>
				</div><!-- .comment-metadata -->

				<?php if ( '0' === $comment->comment_approved ) : ?>
				<em class="comment-awaiting-moderation"><?php echo esc_html( $moderation_note ); ?></em>
				<?php endif; ?>
			</footer><!-- .comment-meta -->

			<div class="comment-content prose">
				<?php comment_text(); ?>
			</div><!-- .comment-content -->

			<?php
			if ( '1' === $comment->comment_approved || $show_pending_links ) {
				comment_reply_link(
					array_merge(
						$args,
						array(
							'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<div class="reply">',
							'after'     => '</div>',
						)
					)
				);
			}
			?>
		</article><!-- .comment-body -->
	<?php
}

// Helpers
include_once __DIR__.'/helpers.php';
include_once __DIR__.'/atw-walker-menu.php';

// Core Extensions
include_once __DIR__.'/core/pingback.php';
include_once __DIR__.'/core/allow-svg.php';

// Customizer Extension
include_once __DIR__.'/customizer/customizer-section-globals.php';
include_once __DIR__.'/customizer/customizer-section-header.php';
include_once __DIR__.'/customizer/customizer-section-content.php';
include_once __DIR__.'/customizer/customizer-section-footer.php';
include_once __DIR__.'/customizer/customizer-section-contacts.php';

// Shortcode
include_once __DIR__.'/shortcode/themedata.php';
include_once __DIR__.'/shortcode/alert.php';
include_once __DIR__.'/shortcode/button.php';
include_once __DIR__.'/shortcode/social-icons.php';

// TGM (Reccomended Plugins Activator)
include_once __DIR__.'/reccomended-plugins.php';

// Custom Fields (CMB2)
include_once __DIR__.'/cmb2/content-fields.php';

// Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

function atw_customizer_live_preview(){
	wp_enqueue_script( 
		'mytheme-themecustomizer',
		get_template_directory_uri().'/inc/customizer/theme-customizer.js',
		array( 'jquery','customize-preview' ),
		'1.0',						//Define a version (optional) 
		true
	);
}
add_action( 'customize_preview_init', 'atw_customizer_live_preview' );