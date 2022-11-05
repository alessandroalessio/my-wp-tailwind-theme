<?php
function atw_customizer_section_contacts( $wp_customize ) {
	$wp_customize->add_section( 'atw_contacts_section' , array(
        'title'      => __( 'Contacts', 'eazytheme' ),
        'priority'   => 150
    ) );
    // Email
    $wp_customize->add_setting( 'atw_contacts_email' , array(
         'default'		=> '',
         'sanitize_callback' => 'sanitize_email'
     ) );
     $wp_customize->add_control( 'atw_contacts_email', array(
        'id'        => 'atw_contacts_fb', 
        'label'     => __( 'Email', 'eazytheme' ),
        'section'   => 'atw_contacts_section',
        'settings'  => 'atw_contacts_email'
     ) );
    // Phone
    $wp_customize->add_setting( 'atw_contacts_phone' , array(
        'default'		=> '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'atw_contacts_phone', array(
       'id'        => 'atw_contacts_fb', 
       'label'     => __( 'Phone', 'eazytheme' ),
       'section'   => 'atw_contacts_section',
       'settings'  => 'atw_contacts_phone'
    ) );
     // Facebook
     $wp_customize->add_setting( 'atw_contacts_fb' , array(
        'default'		=> '',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( 'atw_contacts_fb', array(
       'id'        => 'atw_contacts_fb', 
       'label'     => __( 'Facebook', 'eazytheme' ),
       'section'   => 'atw_contacts_section',
       'settings'  => 'atw_contacts_fb'
    ) );
    // Instagram
    $wp_customize->add_setting( 'atw_contacts_ig' , array(
       'default'		=> '',
       'sanitize_callback' => 'esc_url_raw'
   ) );
   $wp_customize->add_control( 'atw_contacts_ig', array(
      'id'        => 'atw_contacts_ig', 
      'label'     => __( 'Instagram', 'eazytheme' ),
      'section'   => 'atw_contacts_section',
      'settings'  => 'atw_contacts_ig'
   ) );
   // Linkedin
   $wp_customize->add_setting( 'atw_contacts_lk' , array(
      'default'		=> '',
      'sanitize_callback' => 'esc_url_raw'
  ) );
  $wp_customize->add_control( 'atw_contacts_lk', array(
     'id'        => 'atw_contacts_lk', 
     'label'     => __( 'Linkedin', 'eazytheme' ),
     'section'   => 'atw_contacts_section',
     'settings'  => 'atw_contacts_lk'
  ) );
   // Twitter
   $wp_customize->add_setting( 'atw_contacts_tw' , array(
      'default'		=> '',
      'sanitize_callback' => 'esc_url_raw'
  ) );
  $wp_customize->add_control( 'atw_contacts_tw', array(
     'id'        => 'atw_contacts_tw', 
     'label'     => __( 'Twitter', 'eazytheme' ),
     'section'   => 'atw_contacts_section',
     'settings'  => 'atw_contacts_tw'
  ) );
  // YouTube
  $wp_customize->add_setting( 'atw_contacts_yt' , array(
     'default'		=> '',
     'sanitize_callback' => 'esc_url_raw'
 ) );
 $wp_customize->add_control( 'atw_contacts_yt', array(
    'id'        => 'atw_contacts_yt', 
    'label'     => __( 'YouTube', 'eazytheme' ),
    'section'   => 'atw_contacts_section',
    'settings'  => 'atw_contacts_yt'
 ) );
 // Whatsapp
 $wp_customize->add_setting( 'atw_contacts_whatsapp' , array(
    'default'		=> '',
) );
$wp_customize->add_control( 'atw_contacts_whatsapp', array(
   'id'        => 'atw_contacts_whatsapp', 
   'label'     => __( 'Whatsapp', 'eazytheme' ),
   'section'   => 'atw_contacts_section',
   'settings'  => 'atw_contacts_whatsapp'
) );
$wp_customize->add_setting( 'atw_contacts_show_whatsapp', array(
   'default' => 'no',
 ) );
 
 $wp_customize->add_control( 'atw_contacts_show_whatsapp', array(
   'type' => 'select',
   'section' => 'atw_contacts_section', // Add a default or your own section
   'label' => __( 'Show Whatsapp Call to Action', 'atw' ),
   'description' => __( 'Display Whatsapp Button Fixed', 'atw' ),
   'choices' => array(
     'no' => __( 'No' ),
     'yes-bottom-right' => __( 'Yes, on bottom right', 'atw' ),
     'yes-bottom-left' => __( 'Yes, on bottom left', 'atw' ),
   ),
 ) );
}
add_action( 'customize_register', 'atw_customizer_section_contacts' );