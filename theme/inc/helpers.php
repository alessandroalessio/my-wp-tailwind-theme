<?php
function is_svg($file_url){
    $file_path = str_replace( get_site_url(), rtrim(ABSPATH, '/'), $file_url);
    if ( file_exists($file_path) ) {
        $file_info = pathinfo($file_path);
        if ( $file_info['extension']=='svg' ){
            return [
                'extension' => 'svg',
                'url' => $file_url,
                'content' => file_get_contents($file_path)
            ];
        }
        echo '<pre style="background: #efefef; padding:1em; border:1px solid #ddd;">'; var_dump($file_info); echo '</pre>';
    } else {
        return null;
    }
    
}