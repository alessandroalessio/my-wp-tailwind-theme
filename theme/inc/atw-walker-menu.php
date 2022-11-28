<?php
class atw_walker_menu extends Walker_Nav_Menu {

    function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        global $post;

        $li_class = '';
        if ( is_array($item->classes) ) {
            foreach ( $item->classes as $k => $class ) {
                $li_class .= $class . ' ';
            }
        } else {
            $li_class = $item->classes;
        }
        if ( is_object($item) && is_object($post) && $post->ID==$item->ID ) $li_class .= ' current';

		$output .= '<li class="'.trim($li_class).'">';

        
        $url = $item->url;
        if ($url && $url != '#') {
			$output .= '<a href="' . $url . '" title="'.$item->post_name.'" class="inline-flex h-full">';
		} else {
			$output .= '<span>';
		}
 
        $output .= $item->title;

        if ($url && $url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}

	}

    function end_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0){
        
        $output .= '</li>';
    }

}