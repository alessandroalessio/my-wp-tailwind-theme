<?php
class atw_walker_menu extends Walker_Nav_Menu {

    function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        global $post;

        $li_class = $item->classes;
        $li_class .= 'mx-2';
        if ( $post->ID==$item->ID ) $li_class .= ' current';

		$output .= '<li class="'.trim($li_class).'">';
        
        $url = get_permalink( $item->ID );
        if ($url && $url != '#') {
			$output .= '<a href="' . $url . '" title="'.$item->post_name.'">';
		} else {
			$output .= '<span>';
		}
 
        $output .= $item->post_title;

        if ($url && $url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}


        $output .= '</li>';
	}

}