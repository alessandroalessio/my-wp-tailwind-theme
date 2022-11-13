<?php
add_action( 'cmb2_admin_init', 'cmb2_content_fields' );

function cmb2_content_fields() {

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'content_fields',
        'title'         => __( 'Content Settings', 'atw' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'side',
        'priority'      => 'low',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Container Size', 'atw' ),
        'id'         => 'content_container_size',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'max-w-full',
        'options'          => array(
            'max-w-full'   => __( 'Max Width Full', 'atw' ),
            'max-w-7xl'   => __( 'Max Width 1280px', 'atw' ),
            'max-w-6xl'   => __( 'Max Width 1152px', 'atw' ),
            'max-w-5xl'   => __( 'Max Width 1024px', 'atw' ),
            'max-w-4xl'   => __( 'Max Width 896px', 'atw' ),
            'max-w-3xl'   => __( 'Max Width 768px', 'atw' ),
        ),
    ) );


}
?>