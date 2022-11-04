<div>
    <h3 class="text-4xl font-serif text-primary mb-4"><?php _e('Follow us on'); ?></h3>
    <?php
    $social_available = [
        'fb' => ['label' => 'Facebook'],
        'ig' => ['label' => 'Instagram'],
        'tw' => ['label' => 'Twitter'],
        'yt' => ['label' => 'YouTube'],
        'lk' => ['label' => 'LinkedIn'],
    ];
    
    foreach ( $social_available AS $key => $item ) : 
        
        if ( get_theme_mod('atw_contacts_'.$key) )  : ?>
            <a href="<?php echo get_theme_mod('atw_contacts_'.$key); ?>" title="<?php echo esc_attr( $item['label'] ); ?>" target="_blank" class="py-2 block">
                <span class="text-2xl font-light font-serif"><?php echo $item['label']; ?></span>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</div>