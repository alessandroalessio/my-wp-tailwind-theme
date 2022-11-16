<?php
add_shortcode("alert", "alert_shortcode_fn");
 
function alert_shortcode_fn($args, $content) {
    $default = array(
        'type' => 'warning'
    );
    $a = shortcode_atts($default, $args);
    
    return '<div class="alert alert-'.$a['type'].'">'.$content.'</div>';
}
?>