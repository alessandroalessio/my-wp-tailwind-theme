<?php
/**
 * Enqueue scripts and styles.
 */
function atw_scripts() {
	wp_enqueue_style( 'atw-style', get_stylesheet_uri(), array(), ATW_VERSION );
	wp_enqueue_script( 'atw-script', get_template_directory_uri() . '/js/script.min.js', array(), ATW_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'atw_scripts' );