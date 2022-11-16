<?php
function atw_customizer_section_content( $wp_customize ) {
	$wp_customize->add_section( 'atw_content_section' , array(
		'title'      => __( 'Content', 'atw' ),
		'priority'   => 95
	) );
	// Container Size
	$wp_customize->add_setting( 'atw_content_container_size' , array(
		'default'	=> 'max-w-full',
	) );
    $wp_customize->add_control( 'atw_content_container_size', array(
        'type' => 'select',
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

	// Hero TItle
	$wp_customize->add_setting( 'atw_content_hero_title' , array(
		'default'	=> '',
		'transport'   => 'postMessage',
	) );
	$wp_customize->add_control( 'atw_content_hero_title', array(
		 'id'        => 'atw_content_hero_title', 
		 'type'		 => 'text',
		 'label'     => __( 'Hero (only for Home Page)', 'atw' ),
         'description' => __( 'Title for Hero Section', 'atw' ),
		 'section'   => 'atw_content_section',
		 'settings'  => 'atw_content_hero_title'
	) );
    // Hero Text
	$wp_customize->add_setting( 'atw_content_hero_text' , array(
		'default'	=> '',
		'transport'   => 'postMessage',
	) );
	$wp_customize->add_control( 'atw_content_hero_text', array(
		 'id'        => 'atw_content_hero_text', 
		 'type'		 => 'textarea',
         'description' => __( 'Text for Hero Section', 'atw' ),
		 'section'   => 'atw_content_section',
		 'settings'  => 'atw_content_hero_text'
	) );
    // Hero CTA Label
	$wp_customize->add_setting( 'atw_content_hero_cta_label' , array(
		'default'	=> '',
		'transport'   => 'postMessage',
	) );
	$wp_customize->add_control( 'atw_content_hero_cta_label', array(
		 'id'        => 'atw_content_hero_cta_label', 
		 'type'		 => 'text',
         'description' => __( 'Call to Action Label for Hero Section', 'atw' ),
		 'section'   => 'atw_content_section',
		 'settings'  => 'atw_content_hero_cta_label'
	) );
    // Hero CTA URL
	$wp_customize->add_setting( 'atw_content_hero_cta_url' , array(
		'default'	=> '',
		'transport'   => 'postMessage',
	) );
	$wp_customize->add_control( 'atw_content_hero_cta_url', array(
		 'id'        => 'atw_content_hero_cta_url', 
		 'type'		 => 'text',
         'description' => __( 'Call to Action URL for Hero Section', 'atw' ),
		 'section'   => 'atw_content_section',
		 'settings'  => 'atw_content_hero_cta_url'
	) );
}
add_action( 'customize_register', 'atw_customizer_section_content' );