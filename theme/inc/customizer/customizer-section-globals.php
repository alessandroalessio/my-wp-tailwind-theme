<?php
function atw_customizer_section_globals( $wp_customize ) {
	$wp_customize->add_section( 'atw_global_section' , array(
		'title'      => __( 'Globals', 'eazytheme' ),
		'priority'   => 80
	) );
	// Pingback
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
	// Globally add Tailwind CSS
    $wp_customize->add_setting( 'atw_global_add_tailwind' , array(
		'default'	=> 'no',
	) );
    $wp_customize->add_control( 'atw_global_add_tailwind', array(
        'type' => 'radio',
        'section' => 'atw_global_section', // Add a default or your own section
        'label' => __( 'Add full Tailwind CSS'),
        'choices' => array(
          'yes' => __( 'Yes' ),
          'no' => __( 'No' ),
        ),
    ) );
}
add_action( 'customize_register', 'atw_customizer_section_globals' );