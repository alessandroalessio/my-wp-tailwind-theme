<?php
if ( get_theme_mod('atw_allow_pingback')=='yes' ) {
    function atw_pingback_header() {
        if ( is_singular() && pings_open() ) {
            printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
        }
    }
    add_action( 'wp_head', 'atw_pingback_header' );
}
?>