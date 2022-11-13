<?php
function atw_customizer_section_globals( $wp_customize ) {
	$wp_customize->add_section( 'atw_global_section' , array(
		'title'      => __( 'Globals', 'eazytheme' ),
		'priority'   => 80
	) );
    $wp_customize->add_setting( 'atw_allow_pingback' , array(
		'default'	=> 'no',
	) );
    $wp_customize->add_control( 'atw_allow_pingback', array(
        'type' => 'radio',
        'section' => 'atw_global_section', // Add a default or your own section
        'label' => __( 'Allow Pingback'),
        'choices' => array(
          'yes' => __( 'Yes' ),
          'no' => __( 'No' ),
        ),
    ) );
	// Logo
	// $wp_customize->add_setting( 'atw_header_logo' , array(
	// 	'default'	=> '',
	// 	'transport'   => 'postMessage',
	// ) );
	// $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'atw_header_logo', array(
	// 	 'id'        => 'atw_header_logo', 
	// 	 'label'     => __( 'Logo', 'eazytheme' ),
	// 	 'section'   => 'atw_global_section',
	// 	 'settings'  => 'atw_header_logo'
	// ) ) );
}
add_action( 'customize_register', 'atw_customizer_section_globals' );