<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'atw' ); ?>" class="ml-auto md:inline-block">
    <button aria-controls="primary-menu" aria-expanded="false" class="inline-block md:hidden"><?php esc_html_e( 'Menu', 'atw' ); ?></button>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'container'		=> 'ul',
            'menu_class'      => 'hidden md:flex lg:flex space-x-3',
            'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
            'walker' => New atw_walker_menu()
        )
    );
    ?>
</nav><!-- #site-navigation -->