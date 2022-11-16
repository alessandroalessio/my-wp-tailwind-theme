<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'atw' ); ?>" class="ml-2 flex md:inline-block">
    <button id="navigation-mobile-toggle" aria-controls="primary-menu" aria-expanded="false" class="inline-block md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
        </svg>
        <span class="hidden"><?php esc_html_e( 'Menu', 'atw' ); ?></span>
    </button>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'container'		=> 'ul',
            'menu_class'      => 'hidden md:flex lg:flex space-x-6',
            'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
            'walker' => New atw_walker_menu()
        )
    );
    ?>
</nav><!-- #site-navigation -->