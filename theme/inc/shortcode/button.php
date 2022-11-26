<?php
add_shortcode("button", "button_shortcode_fn");
 
function button_shortcode_fn($args, $content) {
    $default = array(
        'href' => '#',
        'type' => 'primary',
        'target' => '_self',
        'extra_classes' => ''
    );
    $a = shortcode_atts($default, $args);
    
    return '<a href="'.$a['href'].'" target="'.$a['target'].'" class="btn btn-'.$a['type'].' '.$a['extra_classes'].'">'.$content.'</a>';
}
?>