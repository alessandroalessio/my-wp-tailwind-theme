<?php
add_shortcode("socialicons", "social_icons_shortcode_fn");
 
function social_icons_shortcode_fn($args, $content) {
    $default = array(
        'icons' => true,
        'label' => false,
        'color' => '', // white or coloured
    );
    $a = shortcode_atts($default, $args);

    $output = '<div class="social-icons">';
    $output .= ( get_theme_mod('atw_contacts_fb')!='' ) ? '<a href="'.get_theme_mod('atw_contacts_fb').'" title="Facebook"><span class="social-icon facebook'.$a['color'].'"></span></a>' : '';
    $output .= ( get_theme_mod('atw_contacts_ig')!='' ) ? '<a href="'.get_theme_mod('atw_contacts_ig').'" title="Instagram"><span class="social-icon instagram'.$a['color'].'"></span></a>' : '';
    $output .= ( get_theme_mod('atw_contacts_lk')!='' ) ? '<a href="'.get_theme_mod('atw_contacts_lk').'" title="Linkedin"><span class="social-icon linkedin'.$a['color'].'"></span></a>' : '';
    $output .= ( get_theme_mod('atw_contacts_tw')!='' ) ? '<a href="'.get_theme_mod('atw_contacts_tw').'" title="Twitter"><span class="social-icon twitter'.$a['color'].'"></span></a>' : '';
    $output .= ( get_theme_mod('atw_contacts_yt')!='' ) ? '<a href="'.get_theme_mod('atw_contacts_yt').'" title="YouTube"><span class="social-icon youtube'.$a['color'].'"></span></a>' : '';
    $output .= '</div>';

    return $output;
}
?>