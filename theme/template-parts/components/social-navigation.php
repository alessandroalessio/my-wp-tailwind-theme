<div>
    <h3 class="text-4xl font-serif text-primary mb-4"><?php _e('Follow us on'); ?></h3>
    <ul class="flex justify-center space-x-4">
        <?php
        $social_available = [
            'fb' => ['label' => 'Facebook', 'slug' => 'facebook'],
            'ig' => ['label' => 'Instagram', 'slug' => 'instagram'],
            'tw' => ['label' => 'Twitter', 'slug' => 'twitter'],
            'yt' => ['label' => 'YouTube', 'slug' => 'youtube'],
            'lk' => ['label' => 'LinkedIn', 'slug' => 'linkedin'],
        ];
        
        foreach ( $social_available AS $key => $item ) : 
            
            if ( get_theme_mod('atw_contacts_'.$key) )  : ?>
                <li class="inline-flex px-2">
                    <a href="<?php echo get_theme_mod('atw_contacts_'.$key); ?>" title="<?php echo esc_attr( $item['label'] ); ?>" target="_blank" class="py-2 block">
                        <div><img src="https://cdn.jsdelivr.net/npm/simple-icons@v7/icons/<?php echo $item['slug']; ?>.svg" class="invert w-12 h-12 block" /></div>
                        <span class="text-2xl font-light font-serif hidden"><?php echo $item['label']; ?></span>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>