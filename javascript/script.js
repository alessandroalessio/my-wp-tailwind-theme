/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

document.addEventListener("DOMContentLoaded", function() {

    /**
     * Navigation Mobile
     */
    if ( document.getElementById('navigation-mobile-toggle') ) {
        let navMobileToggle = document.getElementById('navigation-mobile-toggle');
        navMobileToggle.addEventListener('click', () => {
            document.getElementById('navigation-overlay').classList.toggle('hidden');
        });

        let navMoobileClose = document.getElementById('navigation-overlay-close');
        navMoobileClose.addEventListener('click', () => {
            document.getElementById('navigation-overlay').classList.toggle('hidden');

        });
    }

    /**
     * Header Social
     */
    if ( document.getElementById('header-social-toggle') ) {
        let headerSocialToggle = document.getElementById('header-social-toggle');
        headerSocialToggle.addEventListener('click', () => {
            document.getElementById('header-social-overlay').classList.toggle('hidden');
        });

        let headerSocialClose = document.getElementById('header-social-close');
        headerSocialClose.addEventListener('click', () => {
            document.getElementById('header-social-overlay').classList.toggle('hidden');

        });
    }

    /**
     * Header Fixed on Scroll
     */
    if ( document.getElementById('masthead') && document.getElementById('masthead').classList.contains('fix-on-scroll') ) {
    
        // Wrap original header
        let headerOriginal = document.getElementById('masthead');
        let headerOriginalWrapper = document.getElementById('main-header-wrapper');
        
        // Set height or original header wrapper
        headerOriginalWrapper.style.height = headerOriginal.offsetHeight + 'px';
        
        // Created cloned wrapper
        let headerFixedWrapper = document.createElement('div');
        headerFixedWrapper.classList.add("header-fixed-wrapper");
        document.body.insertBefore(headerFixedWrapper, document.body.firstChild);
        
        window.addEventListener("resize", event => {
        let changedHeader = document.getElementById('masthead');
            headerOriginalWrapper.style.height = changedHeader.offsetHeight + 'px';
        });
        
        window.addEventListener("scroll", event => {
            let scroll = window.pageYOffset;
            headerFixedWrapperChilds = headerFixedWrapper.childElementCount;
            if (scroll>200 && headerFixedWrapperChilds==0) {  
                headerFixedWrapper.appendChild( headerOriginal );
                setTimeout(() => {
                headerOriginal.classList.add('sticky');
                }, 100);
            } else if ( scroll==0 ) {
                headerOriginal.classList.remove('sticky');
                headerOriginalWrapper.appendChild( headerOriginal );
            }
        });

    }

    /**
     * Search
     */
    if ( document.getElementById('search-toggle') ) {
        let searchToggle = document.getElementById('search-toggle');
        searchToggle.addEventListener('click', () => {
            document.getElementById('search-overlay').classList.toggle('hidden');
        });

        let searchClose = document.getElementById('search-close');
        searchClose.addEventListener('click', () => {
            document.getElementById('search-overlay').classList.toggle('hidden');

        });
    }
    
});