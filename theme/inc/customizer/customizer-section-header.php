<?php
function atw_customizer_section_header( $wp_customize ) {
	$wp_customize->add_section( 'atw_header_section' , array(
		'title'      => __( 'Header', 'eazytheme' ),
		'priority'   => 90
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
}
add_action( 'customize_register', 'atw_customizer_section_header' );