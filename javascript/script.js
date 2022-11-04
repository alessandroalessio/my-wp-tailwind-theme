/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

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