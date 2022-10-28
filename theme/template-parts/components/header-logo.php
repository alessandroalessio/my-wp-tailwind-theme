
<div id="site-title" class="inline-block">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home" class="text-2xl font-bold block">
        <?php 
        $header_logo = get_theme_mod('atw_header_logo');
        if ( $header_logo!='' ) : ?>
            <div id="header-logo"><img src="<?php echo $header_logo; ?>"></div>
        <?php else : ?>
            <?php bloginfo( 'name' ); ?></a>
            <span id="site-description" class="block"><?php bloginfo( 'description' ); ?>
        <?php endif; ?>
    </span>
</div>