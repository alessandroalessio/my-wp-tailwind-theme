/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
 ( function( $ ) {

	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title a' ).html( newval );
		} );
	} );
    wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '#site-description' ).html( newval );
		} );
	} );
    wp.customize( 'atw_header_logo', function( value ) {
		value.bind( function( newval ) {
			$( '#header-logo img' ).attr('src', newval );
		} );
	} );
	wp.customize( 'atw_header_cta_label', function( value ) {
		value.bind( function( newval ) {
			$( '#header-cta' ).html( newval );
		} );
	} );
	wp.customize( 'atw_header_cta_url', function( value ) {
		value.bind( function( newval ) {
			$( '#header-cta' ).attr('href', newval );
		} );
	} );
	
	wp.customize( 'atw_footer_text', function( value ) {
		value.bind( function( newval ) {
			$( '#footer-text' ).html( newval );
		} );
	} );
} )( jQuery );