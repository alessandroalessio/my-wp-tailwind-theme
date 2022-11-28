<div id="navigation-overlay" class="fixed w-full h-screen top-0 left-0 z-50 bg-black/75 duration-150 ease-in-out hidden">
    <div class="flex w-full h-screen items-center text-center">
        <div class="text-white w-3/4 mx-auto">
            <small id="navigation-overlay-close" class="block w-full py-4 mb-4 text-center text-white/50 hover:text-white/75 cursor-pointer tracking-widest text-xs"><?php _e('Close'); ?></small>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'container'		=> 'ul',
                    'menu_class'      => 'font-serif text-xl flex flex-col space-y-3',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    // 'walker' => New atw_walker_menu()
                )
            );
            ?>
        </div>
    </div>
</div>