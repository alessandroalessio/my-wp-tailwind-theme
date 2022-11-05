<?php
function atw_customizer_section_content( $wp_customize ) {
	$wp_customize->add_section( 'atw_content_section' , array(
		'title'      => __( 'Content', 'atw' ),
		'priority'   => 95
	) );
	// Search
	$wp_customize->add_setting( 'atw_content_container_size' , array(
		'default'	=> 'max-w-full',
	) );
    $wp_customize->add_control( 'atw_content_container_size', array(
        'type' => 'radio',
        'section' => 'atw_content_section', // Add a default or your own section
        'label' => __( 'General Container Size'),
		'description' => _( 'General Container Size for Website Content' ),
        'choices' => array(
            'max-w-full'   => __( 'Max Width Full', 'atw' ),
            'max-w-7xl'   => __( 'Max Width 1280px', 'atw' ),
            'max-w-6xl'   => __( 'Max Width 1152px', 'atw' ),
            'max-w-5xl'   => __( 'Max Width 1024px', 'atw' ),
            'max-w-4xl'   => __( 'Max Width 896px', 'atw' ),
            'max-w-3xl'   => __( 'Max Width 768px', 'atw' ),
        ),
    ) );
}
add_action( 'customize_register', 'atw_customizer_section_content' );