/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

if ( document.getElementById('search-toggle') ) {
    let searchToggle = document.getElementById('search-toggle');

    searchToggle.addEventListener('click', () => {
        document.getElementById('search-overlay').classList.toggle('hidden');
        console.log('clicky');
    });
}