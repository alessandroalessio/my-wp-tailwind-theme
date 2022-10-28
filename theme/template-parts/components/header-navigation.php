<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'atw' ); ?>" class="bg-primary ml-auto md:inline-block">
    <button aria-controls="primary-menu" aria-expanded="false" class="inline-block md:hidden"><?php esc_html_e( 'Menu', 'atw' ); ?></button>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
        )
    );
    ?>
</nav><!-- #site-navigation -->