<?php
add_shortcode("themedata", "themedata_shortcode_fn");
 
function themedata_shortcode_fn($args) {
    $default = array(
        'name' => 'atw_contacts_email'
    );
    $a = shortcode_atts($default, $args);
    
    return get_theme_mod( $a['name'] );
}
?>