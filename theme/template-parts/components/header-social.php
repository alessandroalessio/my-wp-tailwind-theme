<div id="header-social-toggle" class="inline-block cursor-pointer mx-2 p-2 duration-500 ease-in-out hover:text-primary hover:rotate-180">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>
</div>

<div id="header-social-overlay" class="fixed w-full h-screen top-0 left-0 z-50 bg-black/75 duration-150 ease-in-out hidden">
    <div class="flex w-full h-screen items-center text-center">
        <div class="text-white w-3/4 mx-auto">
            <small id="header-social-close" class="block w-full py-4 mb-4 text-center text-white/50 hover:text-white/75 cursor-pointer tracking-widest text-xs"><?php _e('Close'); ?></small>
            <div>
                <?php get_template_part('template-parts/components/social-navigation'); ?>
            </div>
        </div>
    </div>
</div>