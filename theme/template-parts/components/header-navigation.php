<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'atw' ); ?>" class="ml-auto md:inline-block">
    <button aria-controls="primary-menu" aria-expanded="false" class="inline-block md:hidden"><?php esc_html_e( 'Menu', 'atw' ); ?></button>

    <?php
    // wp_nav_menu(
    //     array(
    //         'theme_location' => 'menu-1',
    //         'menu_id'        => 'primary-menu',
    //         'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
    //     )
    // );
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'container'		=> 'ul',
            // 'container_id'    => 'primary-menu',
            // 'container_class' => 'md:ml-auto hidden md:flex flex-wrap items-center text-base justify-center mr-12 mt-5 w-7/12',
            'menu_class'      => 'lg:flex',
            // 'li_class'        => 'mr-1',
            'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
            // 'fallback_cb'     => false,
            'walker' => New atw_walker_menu()
        )
    );
    // wp_nav_menu(
    //     array(
    //         'theme_location' => 'menu-1',
    //         'container'		=> 'ul',
    //         // 'container_id'    => 'primary-menu',
    //         // 'container_class' => 'md:ml-auto hidden md:flex flex-wrap items-center text-base justify-center mr-12 mt-5 w-7/12',
    //         'menu_class'      => 'lg:flex',
    //         // 'li_class'        => 'mr-1',
    //         'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
    //         // 'fallback_cb'     => false,
    //     )
    // );
    ?>
</nav><!-- #site-navigation -->