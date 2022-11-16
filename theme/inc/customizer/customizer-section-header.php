<?php
function atw_customizer_section_header( $wp_customize ) {
	$wp_customize->add_section( 'atw_header_section' , array(
		'title'      => __( 'Header', 'eazytheme' ),
		'priority'   => 90
	) );
	// Header Fixed on Scroll
	$wp_customize->add_setting( 'atw_header_fixed_on_scroll', array(
		'default' => 'false',
		'transport'   => 'postMessage',
	) );
	  
	$wp_customize->add_control( 'atw_header_fixed_on_scroll', array(
		'type' => 'radio',
		'section' => 'atw_header_section',
		'label' => __( 'Header Fixed on Scroll' ),
		'choices' => array(
			'true' => __( 'Yes' ),
			'false' => __( 'No' ),
		),
	) );
	// Logo
	$wp_customize->add_setting( 'atw_header_logo' , array(
		'default'	=> '',
		'transport'   => 'postMessage',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'atw_header_logo', array(
		 'id'        => 'atw_header_logo', 
		 'label'     => __( 'Logo', 'eazytheme' ),
		 'section'   => 'atw_header_section',
		 'settings'  => 'atw_header_logo'
	) ) );
	// Search
	$wp_customize->add_setting( 'atw_show_search_in_header' , array(
		'default'	=> 'no',
	) );
    $wp_customize->add_control( 'atw_show_search_in_header', array(
        'type' => 'radio',
        'section' => 'atw_header_section', // Add a default or your own section
        'label' => __( 'Show Search in Header'),
		'description' => _( 'To view changes in customizer you need to reload' ),
        'choices' => array(
          'yes-right' => __( 'Yes, on right' ),
		  'yes-left' => __( 'Yes, on left' ),
          'no' => __( 'No' ),
        ),
    ) );
	// Call to Action
	$wp_customize->add_setting( 'atw_header_cta_url' , array(
		'default'	=> '',
	) );
    $wp_customize->add_control( 'atw_header_cta_url', array(
        'type' => 'text',
        'section' => 'atw_header_section', // Add a default or your own section
        'label' => __( 'Call to Action'),
		'description' => _( 'Insert URL for Call to Action' )
    ) );
	$wp_customize->add_setting( 'atw_header_cta_label' , array(
		'default'	=> '',
	) );
    $wp_customize->add_control( 'atw_header_cta_label', array(
        'type' => 'text',
        'section' => 'atw_header_section', // Add a default or your own section
        'label' => __( ''),
		'description' => _( 'Insert Label for Call to Action' )
    ) );
}
add_action( 'customize_register', 'atw_customizer_section_header' );