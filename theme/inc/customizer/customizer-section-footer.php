<?php
function atw_customizer_section_footer( $wp_customize ) {
	$wp_customize->add_section( 'atw_footer_section' , array(
		'title'      => __( 'Footer', 'eazytheme' ),
		'priority'   => 100
	) );
	// Logo
	$wp_customize->add_setting( 'atw_footer_text' , array(
		'default'	=> '&copy; My Website',
		'transport'   => 'postMessage',
	) );
	$wp_customize->add_control( 'atw_footer_text', array(
		 'id'        => 'atw_footer_text', 
		 'type'		 => 'textarea',
		 'label'     => __( 'Text', 'eazytheme' ),
		 'section'   => 'atw_footer_section',
		 'settings'  => 'atw_footer_text'
	) );
}
add_action( 'customize_register', 'atw_customizer_section_footer' );