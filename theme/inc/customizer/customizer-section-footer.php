<?php
function atw_customizer_section_footer( $wp_customize ) {
	$wp_customize->add_section( 'atw_footer_section' , array(
		'title'      => __( 'Footer', 'eazytheme' ),
		'priority'   => 100
	) );
	// Text Left
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
	// Text Right
	$wp_customize->add_setting( 'atw_footer_text_right' , array(
		'default'	=> '<ul class="flex space-x-4"><li><a href="/privacy/" title="">Privacy</a></li><li><a href="/cookies/" title="">Cookies</a></li></ul>',
		'transport'   => 'postMessage',
	) );
	$wp_customize->add_control( 'atw_footer_text_right', array(
		 'id'        => 'atw_footer_text_right', 
		 'type'		 => 'textarea',
		 'label'     => __( 'Text right', 'eazytheme' ),
		 'section'   => 'atw_footer_section',
		 'settings'  => 'atw_footer_text_right'
	) );
}
add_action( 'customize_register', 'atw_customizer_section_footer' );