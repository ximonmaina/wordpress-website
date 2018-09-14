/**
 * Live-update changed settings in real time in the Customizer preview.
 */

( function( $ ) {
	var style = $( '#highresponsive-color-scheme-css' ),
		api = wp.customize;

	if ( ! style.length ) {
		style = $( 'head' ).append( '<style type="text/css" id="highresponsive-color-scheme-css" />' )
		                    .find( '#highresponsive-color-scheme-css' );
	}

	// Site title.
	api( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	// Site tagline.
	api( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Add custom-background-image body class when background image is added.
	api( 'background_image', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).toggleClass( 'custom-background-image', '' !== to );
		} );
	} );

	// Color Scheme CSS.
	api.bind( 'preview-ready', function() {
		api.preview.bind( 'update-color-scheme-css', function( css ) {
			style.html( css );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-identity' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-identity' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-identity, .site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );

( function( api ) {
	// Pagination: Show description only when Infinite Scroll is selected.
    wp.customize( 'highresponsive_pagination_type', function( setting ) {
        setting.bind( function( value ) {
        	alert(value);
            if( 'infinite-scroll' == value ) {
                jQuery('#sub-accordion-section-decree_pagination_options .description.customize-section-description').show();
            }else{
                jQuery('#sub-accordion-section-decree_pagination_options .description.customize-section-description').hide();
            }
        } );
    } );
} )( wp.customize );

jQuery( document ).ready(function() {
    // Check and hide or show description as per the options.

    var pagination_type = jQuery('#customize-control-highresponsive_pagination_type select').val();
    if( 'infinite-scroll' == pagination_type ) {
        jQuery('#sub-accordion-section-decree_pagination_options .description.customize-section-description').show();
    }else{
        jQuery('#sub-accordion-section-decree_pagination_options .description.customize-section-description').hide();
    }

} );
