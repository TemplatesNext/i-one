/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 * Things like site title and description changes.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' == to ) {
				if ( 'remove-header' == _wpCustomizeSettings.values.header_image )
					$( '.home-link' ).css( 'min-height', '0' );
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.home-link' ).css( 'min-height', '230px' );
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
	
} )( jQuery );


jQuery(document).ready(function($) {
	
	if( $('.home-slider-off').length > 0 ) {
		$( '.home-slider-off .iheader .titlebar' ).append( '<div class="editslider">Edit Header</div>' );
	}		
});


(function(wp,$,api){ 
	
	api.bind( 'preview-ready', function() {
		
		/*		
		// About Us Customizer Edits
		$( '#aboutus .editbg' ).on( "click", function() {			
			// Open About us background section wp.customize.section("aboutus_background").expand();
			wp.customize.preview.send( 'expand-aboutus-background-section' );			
		});			
		
		$( '#services .editcontent' ).on( "click", function() {		
			// Open About us options section wp.customize.section("aboutus_options").expand();
			wp.customize.preview.send( 'expand-services-content-panel' );
		});		
		*/								
						
		// Parallax 1 Customizer Edits
		$( '.titlebar' ).on( "click", ".editslider", function() {
			wp.customize.preview.send( 'expand-slider-options-panel' );			
		});											
			
	});

})(window.wp, jQuery, wp.customize);
