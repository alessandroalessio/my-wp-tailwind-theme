/* eslint-env node */

const selectors = ( 'editor' === process.env._TW_TARGET ) ? {
	'post-title-selector': '.editor-post-title__input',
} : {
	'post-title-selector': '.entry-title',
};

module.exports = {
	plugins: [
		require( 'postcss-import-ext-glob' ),
		require( 'postcss-preset-env' ),
		require( 'postcss-import' ),
		require( 'postcss-simple-vars' )( { variables: selectors } ),
		require( 'tailwindcss/nesting' ),
		require( 'tailwindcss' ),
	],
};
