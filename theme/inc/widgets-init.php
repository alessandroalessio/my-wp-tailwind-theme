<?php
function atw_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'atw' ),
			'id'            => 'footer',
			'description'   => __( 'Add widgets here to appear in your footer.', 'atw' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'atw_widgets_init' );
