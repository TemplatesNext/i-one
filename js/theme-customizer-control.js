// JavaScript Document

(function($,api){ 
	
	wp.customize.bind('ready', function() {		
		
		//===========================================================================
		// Open slider panel 
		wp.customize.previewer.bind( 'expand-slider-options-panel', function(){
			wp.customize.section("blogpage").expand({ allowMultiple: false });
		});																													
	
	});		
	
})(jQuery, wp.customize);
