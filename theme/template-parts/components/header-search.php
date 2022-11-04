<div id="search-toggle" class="inline-block cursor-pointer mx-2 p-2 rounded-full hover:bg-primary hover:text-white duration-500 ease-in-out">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
    </svg>
</div>

<div id="search-overlay" class="fixed w-full h-screen top-0 left-0 z-50 bg-black/75 duration-150 ease-in-out hidden">
    <div class="flex w-full h-screen items-center text-center">
        <form action="/" method="get" class="flex w-full text-center justify-center items-center mx-12 md:w-2/4 md:mx-auto relative">
            <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Type something..." class="bg-transparent border-b w-full focus:outline-none p-4 text-lg text-white focus:border-b focus:border-primary font-serif" />
            <span class="inline-block ml-2 absolute right-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </span>
            <small id="search-close" class="absolute w-full py-4 top-full text-center text-white/50 hover:text-white/75 cursor-pointer tracking-widest text-xs">CHIUDI</small>
        </form>
    </div>
</div>