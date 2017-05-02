<?php

function ione_customizer_config() {
	

    $url  = get_stylesheet_directory_uri() . '/inc/kirki/';
	
    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'i-one' ),
        'background-image' => __( 'Background Image', 'i-one' ),
        'no-repeat' => __( 'No Repeat', 'i-one' ),
        'repeat-all' => __( 'Repeat All', 'i-one' ),
        'repeat-x' => __( 'Repeat Horizontally', 'i-one' ),
        'repeat-y' => __( 'Repeat Vertically', 'i-one' ),
        'inherit' => __( 'Inherit', 'i-one' ),
        'background-repeat' => __( 'Background Repeat', 'i-one' ),
        'cover' => __( 'Cover', 'i-one' ),
        'contain' => __( 'Contain', 'i-one' ),
        'background-size' => __( 'Background Size', 'i-one' ),
        'fixed' => __( 'Fixed', 'i-one' ),
        'scroll' => __( 'Scroll', 'i-one' ),
        'background-attachment' => __( 'Background Attachment', 'i-one' ),
        'left-top' => __( 'Left Top', 'i-one' ),
        'left-center' => __( 'Left Center', 'i-one' ),
        'left-bottom' => __( 'Left Bottom', 'i-one' ),
        'right-top' => __( 'Right Top', 'i-one' ),
        'right-center' => __( 'Right Center', 'i-one' ),
        'right-bottom' => __( 'Right Bottom', 'i-one' ),
        'center-top' => __( 'Center Top', 'i-one' ),
        'center-center' => __( 'Center Center', 'i-one' ),
        'center-bottom' => __( 'Center Bottom', 'i-one' ),
        'background-position' => __( 'Background Position', 'i-one' ),
        'background-opacity' => __( 'Background Opacity', 'i-one' ),
        'ON' => __( 'ON', 'i-one' ),
        'OFF' => __( 'OFF', 'i-one' ),
        'all' => __( 'All', 'i-one' ),
        'cyrillic' => __( 'Cyrillic', 'i-one' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'i-one' ),
        'devanagari' => __( 'Devanagari', 'i-one' ),
        'greek' => __( 'Greek', 'i-one' ),
        'greek-ext' => __( 'Greek Extended', 'i-one' ),
        'khmer' => __( 'Khmer', 'i-one' ),
        'latin' => __( 'Latin', 'i-one' ),
        'latin-ext' => __( 'Latin Extended', 'i-one' ),
        'vietnamese' => __( 'Vietnamese', 'i-one' ),
        'serif' => _x( 'Serif', 'font style', 'i-one' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'i-one' ),
        'monospace' => _x( 'Monospace', 'font style', 'i-one' ),
    );	

	$args = array(
  
        // Change the logo image. (URL) Point this to the path of the logo file in your theme directory
                // The developer recommends an image size of about 250 x 250
        //'logo_image'   => get_template_directory_uri() . '/images/logo.png',
  
        // The color of active menu items, help bullets etc.
        'color_active' => '#95c837',
		
		// Color used on slider controls and image selects
		//'color_accent' => '#dd9933',
		
		// The generic background color
		//'color_back' => '#f7f7f7',
	
        // Color used for secondary elements and desable/inactive controls
        'color_light'  => '#e7e7e7',
  
        // Color used for button-set controls and other elements
        'color_select' => '#34495e',
		 
        
        // For the parameter here, use the handle of your stylesheet you use in wp_enqueue
        'stylesheet_id' => 'customize-styles', 
		
        // Only use this if you are bundling the plugin with your theme (see above)
        'url_path'     => get_template_directory_uri() . '/inc/kirki/',

        'textdomain'   => 'i-one',
		
        'i18n'         => $strings,		
		
		
	);
	
	
	return $args;
}
add_filter( 'kirki/config', 'ione_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'ione_add_panels_and_sections' ); 
function ione_add_panels_and_sections( $wp_customize ) {
	
	
	$wp_customize->add_panel( 'slider', array(
		'priority'    => 170,
		'title'       => __( 'Slider', 'i-one' ),
		'description' => __( 'Slides details', 'i-one' ),
	) );

    /**
     * Add Sections
     */
    $wp_customize->add_section('basic', array(
        'title'    => __('Basic Settings', 'i-one'),
        'description' => '',
        'priority' => 130,
    ));
	
    $wp_customize->add_section('layout', array(
        'title'    => __('Layout Options', 'i-one'),
        'description' => '',
        'priority' => 140,
    ));	

    $wp_customize->add_section('social', array(
        'title'    => __('Social Links', 'i-one'),
        'description' => __('Insert full URL of your social link including &#34;http://&#34; replacing #', 'i-one'),
        'priority' => 170,
    ));		
	
    $wp_customize->add_section('blogpage', array(
        'title'    => __('Default Blog Page', 'i-one'),
        'description' => '',
        'priority' => 180,
    ));
	
    $wp_customize->add_section('customheader', array(
        'title'    => __('Custom Header', 'i-one'),
        'description' => '',
        'priority' => 190,
    ));		
	
	// slider sections
	
	$wp_customize->add_section('slidersettings', array(
        'title'    => __('Slide Settings', 'i-one'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 180,
    ));		
	
	$wp_customize->add_section('slides', array(
        'title'    => __('Slides', 'i-one'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 190,
    ));	
	
	// promo sections
	
	$wp_customize->add_section('nxpromo', array(
        'title'    => __('More About i-one', 'i-one'),
        'description' => '',
        'priority' => 230,
    ));	
				
	
}

function ione_custom_setting( $controls ) {
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'top_phone',
        'label'    => __( 'Phone Number', 'i-one' ),
        'section'  => 'basic',
        'default'  => '',
        'priority' => 1,
		'description' => __( 'Phone number that appears on top bar.', 'i-one' ),
    );
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'top_email',
        'label'    => __( 'Email Address', 'i-one' ),
        'section'  => 'basic',
        'default'  => '',
        'priority' => 1,
		'description' => __( 'Email Id that appears on top bar.', 'i-one' ),		
    );
	
	$controls[] = array(
		'type'        => 'upload',
		'setting'     => 'logo',
		'label'       => __( 'Site header logo', 'i-one' ),
		'description' => __( 'Width 280px, height 72px max. Upload logo for header', 'i-one' ),
        'section'  => 'basic',
		//'default'     => get_template_directory_uri() . '/images/logo.png',
		'default'     => '',		
		'priority'    => 1,
	);	
	/*
	$controls[] = array(
		'type'        => 'upload',
		'setting'     => 'logo-trans',
		'label'       => __( 'Transparent logo', 'i-one' ),
		'description' => __( 'Transparent logo for the fullscreen slider. Width 280px, height 72px max.', 'i-one' ),
        'section'  => 'basic',
		//'default'     => get_template_directory_uri() . '/images/logo-trans.png',
		'default'     => '',
		'priority'    => 1,
	);
	*/
	$controls[] = array(
		'type'        => 'switch',
		'setting'     => 'top_serach',
		'label'       => __( 'Turn ON/OFF Top Navigation Search Form', 'i-one' ),
		'section'     => 'basic',
		'default'     => 0,
		'priority'    => 1,
	);		
	
	
	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'primary_color',
		'label'       => __( 'Primary Color', 'i-one' ),
		'description' => __( 'Choose your theme color', 'i-one' ),
		'section'     => 'layout',
		'default'     => '#e57e26',
		'priority'    => 1,
	);	
	
	$controls[] = array(
		'type'        => 'radio-image',
		'setting'     => 'blog_layout',
		'label'       => __( 'Blog Posts Layout', 'i-one' ),
		'description' => __( '(Choose blog posts layout (one column/two column)', 'i-one' ),
		'section'     => 'layout',
		'default'     => '2',
		'priority'    => 2,
		'choices'     => array(
			'1' => get_template_directory_uri() . '/images/onecol.png',
			'2' => get_template_directory_uri() . '/images/twocol.png',
		),
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'setting'     => 'show_full',
		'label'       => __( 'Show Full Content', 'i-one' ),
		'description' => __( 'Show full content on blog pages', 'i-one' ),
		'section'     => 'layout',
		'default'     => 0,
		'priority'    => 3,
	);		
	
	$controls[] = array(
		'type'        => 'switch',
		'setting'     => 'wide_layout',
		'label'       => __( 'Wide layout', 'i-one' ),
		'description' => __( 'Check to have wide layout', 'i-one' ),
		'section'     => 'layout',
		'default'     => 1,
		'priority'    => 4,
	);
	
	$controls[] = array(
		'type'        => 'textarea',
		'setting'     => 'extra_style',
		'label'       => __( 'Additional style', 'i-one' ),
		'description' => __( 'add extra style(CSS) codes here', 'i-one' ),
		'section'     => 'layout',
		'default'     => '',
		'priority'    => 10,
	);	
	
	// social links
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'itrans_social_facebook',
        'label'    => __( 'Facebook', 'i-one' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'itrans_social_twitter',
        'label'    => __( 'Twitter', 'i-one' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'itrans_social_flickr',
        'label'    => __( 'Flickr', 'i-one' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'itrans_social_feed',
        'label'    => __( 'RSS', 'i-one' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'itrans_social_instagram',
        'label'    => __( 'Instagram', 'i-one' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'itrans_social_googleplus',
        'label'    => __( 'Google Plus', 'i-one' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'itrans_social_youtube',
        'label'    => __( 'YouTube', 'i-one' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'itrans_social_pinterest',
        'label'    => __( 'Pinterest', 'i-one' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'itrans_social_linkedin',
        'label'    => __( 'Linkedin', 'i-one' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );	
	
	// Slider

	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'itrans_sliderspeed',
		'label'       => __( 'Slide Duration', 'i-one' ),
		'description' => __( 'Slide visibility in second', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 6,
		'priority'    => 1,
		'choices'     => array(
			'min'  => 1,
			'max'  => 30,
			'step' => 1
		),
	);

	// Parallax Effect
	$controls[] = array(
		'type'        => 'switch',
		'setting'     => 'itrans_sliderparallax',
		'label'       => __( 'Parallax Effect', 'i-one' ),
		'description' => __( 'Turn ON/OFF Parallax Effect', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 1,			
		'priority'    => 4,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'setting'     => 'slider_overlay',
		'label'       => __( 'Turn Off Slider Overlay Layer', 'i-one' ),
		'description' => __( 'Turn Off/on the dotted slider overlay layer', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 1,
		'priority'    => 4,
	);			
	
	$controls[] = array(
		'type'        => 'repeater',
		'label'       => __( 'Slides', 'i-one' ),
		'section'     => 'slides',
		'priority'    => 10,
		'settings'    => 'ione_slides',
		'row_label'   => array( 
			'type' => 'text', 
			'value' => __( 'Slide', 'i-one' ),
		),
		'choices' 	  => array(
			'limit' => 4,
		),		
		'default'     => array(
			array(
				'itrans_slide_title' => __( 'Welcome To i-one', 'i-one' ),
				'itrans_slide_desc'  => __( 'To start setting up i-one go to appearance &gt; customize.', 'i-one' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-one' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide1.jpg',												
			),
			array(
				'itrans_slide_title' => __( 'Responsive & Touch Ready', 'i-one' ),
				'itrans_slide_desc'  => __( 'i-one is 100% responsive and touch ready.', 'i-one' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-one' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide2.jpg',												
			),
			array(
				'itrans_slide_title' => __( 'One Page Business WordPress Theme', 'i-one' ),
				'itrans_slide_desc'  => __( 'Extremely powerful and flexible one page WordPress business theme', 'i-one' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-one' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide3.jpg',												
			),
			array(
				'itrans_slide_title' => __( 'Easy to Customize', 'i-one' ),
				'itrans_slide_desc'  => __( 'All controls in one place, Setup your busines website in minutes..', 'i-one' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-one' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide4.jpg',												
			),									
		),
		'fields' => array(
			'itrans_slide_title' => array(
				'type'     => 'text',
				'label'    => __( 'Title', 'i-one' ),
				'default'  => '',
			),
			'itrans_slide_desc' => array(
				'type'     => 'textarea',
				'label'    => __( 'Description', 'i-one' ),
				'default'  => '',
			),
			'itrans_slide_linktext' => array(
				'type'     => 'text',
				'label'    => __( 'Link text', 'i-one' ),
				'default'  => '',
			),
			'itrans_slide_linkurl' => array(
				'type'     => 'text',
				'label'    => __( 'Link URL', 'i-one' ),
				'default'  => '',
			),
			'itrans_slide_image' => array(
				'type'     => 'image',
				'label'    => __( 'Image', 'i-one' ),
				'default'  => '',
			),		
				
		)
	);	
	

	
	// Blog page setting
	
	$controls[] = array(
		'type'        => 'switch',
		'setting'     => 'slider_stat',
		'label'       => __( 'Turn ON/OFF i-one Slider', 'i-one' ),
		'description' => __( 'Turn ON or OFF to show/hide default i-one slider', 'i-one' ),
		'section'     => 'blogpage',
		'default'     => 0,
		'priority'    => 1,
	);	
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'blogslide_scode',
        'label'    => __( 'Other Slider Shortcode', 'i-one' ),
        'section'  => 'blogpage',
        'default'  => '',
		'description' => __( 'Enter a 3rd party slider shortcode, ex. meta slider, smart slider 2, wow slider, etc.', 'i-one' ),
        'priority' => 2,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'banner_text',
        'label'    => __( 'Banner Text', 'i-one' ),
        'section'  => 'blogpage',
        'default'  => get_bloginfo( 'description' ),
        'priority' => 3,
		'description' => __( 'if you are using a logo and want your site title or slogan to appear on the header banner', 'i-one' ),		
    );
	
    $controls[] = array(
        'type'     => 'text',
        'setting'  => 'video_url',
        'label'    => __( 'YouTube Video URL', 'i-one' ),
        'section'  => 'blogpage',
        'default'  => '',
        'priority' => 3,
		'description' => __( 'Video background for the home page header', 'i-one' ),		
    );	
	
	$controls[] = array(
        'type'        => 'background',
        'settings'    => 'home_header_background',
        'label'       => __( 'Blog page header background', 'i-one' ),
        'section'     => 'blogpage',
        'default'     => array(
            'image'    => get_template_directory_uri() . '/images/bg/bg6.jpg',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'center-center',
        ),
        'priority'    => 5,
        'output'      => '.home .site .iheader .imagebg',
    );
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'blog_header_height',
		'label'       => __( 'Image/Vedio Header Height (in %)', 'i-one' ),
		'section'     => 'blogpage',
		'default'     => 64,
		'choices'     => array(
			'min'  => '0',
			'max'  => '100',
			'step' => '1',
		),
	);
	
	// Blog page setting
	
	$controls[] = array(
        'type'     => 'color',
        'setting'  => 'header_bg_color',
        'label'    => __( 'Header Background Color', 'txo' ),
        'section'  => 'customheader',
		'default'     => 'rgb(51, 51, 51)',
		'priority'    => 1,
		'alpha'       => false,
	);
	$controls[] = array(
        'type'     => 'color',
        'setting'  => 'header_link_color',
        'label'    => __( 'Link Color', 'txo' ),
        'section'  => 'customheader',
		'default'     => 'rgb(255, 255, 255)',
		'priority'    => 1,
		'alpha'       => false,
	);
	$controls[] = array(
        'type'     => 'color',
        'setting'  => 'header_title_color',
        'label'    => __( 'Site Title Color', 'txo' ),
        'section'  => 'customheader',
		'default'     => 'rgb(255, 255, 255)',
		'priority'    => 1,
		'alpha'       => false,
	);
	$controls[] = array(
        'type'     => 'color',
        'setting'  => 'header_desc_color',
        'label'    => __( 'Site Description Color', 'txo' ),
        'section'  => 'customheader',
		'default'     => 'rgb(230, 230, 230)',
		'priority'    => 1,
		'alpha'       => false,
	);			

	

	// Promo setting
	
	$controls[] = array(
		'type'        => 'custom',
		'settings'    => 'custom_demo',
		'label' => __( 'TemplatesNext Promo', 'i-one' ),
		'section'     => 'nxpromo',
		'default'	  => '<div class="promo-box">
        <div class="promo-2">
        	<div class="promo-wrap">
                <!-- <a href="http://templatesnext.org/ispirit/landing/" target="_blank">Go Premium</a> --> 			
            	<a href="http://templatesnext.in/i-one/" target="_blank">i-one Demo</a>
                <a href="https://www.facebook.com/templatesnext" target="_blank">Facebook</a> 
                <a href="http://templatesnext.org/ispirit/landing/forums/" target="_blank">Support</a>                                 
                <!-- <a href="http://templatesnext.in/i-one/docs">Documentation</a> -->
                <a href="https://wordpress.org/support/view/theme-reviews/i-one#postform" target="_blank">Rate i-one</a>                
                <div class="donate">                
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="M2HN47K2MQHAN">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="If you like my work, you can buy me">If you like my work, you can buy me</td></tr><tr><td><select name="os0">
                        <option value="a cup of coffee">1 cup of coffee $10.00 USD</option>
                        <option value="2 cup of coffee">2 cup of coffee $20.00 USD</option>
                        <option value="3 cup of coffee">3 cup of coffee $30.00 USD</option>
                    </select></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>                                                                          
            </div>
        </div>
		</div>',
		'priority' => 10,
	);
	
    return $controls;
}
add_filter( 'kirki/controls', 'ione_custom_setting' );


/**
 * Font awesome
 */


if( ! function_exists('ione_font_awesome') ){
	function ione_font_awesome(){
		
		$ione_font_icons = '<ul class="nx-falist">';
		
			$ione_font_icons .= '<li type="fa" data-value="fa-glass"  class="fa fa-glass"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-music"  class="fa fa-music"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-search"  class="fa fa-search"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-envelope-o"  class="fa fa-envelope-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-heart"  class="fa fa-heart"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-star"  class="fa fa-star"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-star-o"  class="fa fa-star-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-user"  class="fa fa-user"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-film"  class="fa fa-film"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-th-large"  class="fa fa-th-large"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-th"  class="fa fa-th"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-th-list"  class="fa fa-th-list"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-check"  class="fa fa-check"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-times"  class="fa fa-times"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-search-plus"  class="fa fa-search-plus"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-search-minus"  class="fa fa-search-minus"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-power-off"  class="fa fa-power-off"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-signal"  class="fa fa-signal"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-gear"  class="fa fa-gear"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cog"  class="fa fa-cog"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-trash-o"  class="fa fa-trash-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-home"  class="fa fa-home"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-o"  class="fa fa-file-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-clock-o"  class="fa fa-clock-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-road"  class="fa fa-road"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-download"  class="fa fa-download"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-circle-o-down"  class="fa fa-arrow-circle-o-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-circle-o-up"  class="fa fa-arrow-circle-o-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-inbox"  class="fa fa-inbox"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-play-circle-o"  class="fa fa-play-circle-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-rotate-right"  class="fa fa-rotate-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-repeat"  class="fa fa-repeat"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-refresh"  class="fa fa-refresh"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-list-alt"  class="fa fa-list-alt"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-lock"  class="fa fa-lock"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-flag"  class="fa fa-flag"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-headphones"  class="fa fa-headphones"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-volume-off"  class="fa fa-volume-off"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-volume-down"  class="fa fa-volume-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-volume-up"  class="fa fa-volume-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-qrcode"  class="fa fa-qrcode"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-barcode"  class="fa fa-barcode"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-tag"  class="fa fa-tag"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-tags"  class="fa fa-tags"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-book"  class="fa fa-book"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bookmark"  class="fa fa-bookmark"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-print"  class="fa fa-print"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-camera"  class="fa fa-camera"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-font"  class="fa fa-font"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bold"  class="fa fa-bold"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-italic"  class="fa fa-italic"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-text-height"  class="fa fa-text-height"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-text-width"  class="fa fa-text-width"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-align-left"  class="fa fa-align-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-align-center"  class="fa fa-align-center"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-align-right"  class="fa fa-align-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-align-justify"  class="fa fa-align-justify"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-list"  class="fa fa-list"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-dedent"  class="fa fa-dedent"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-outdent"  class="fa fa-outdent"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-indent"  class="fa fa-indent"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-video-camera"  class="fa fa-video-camera"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-photo"  class="fa fa-photo"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-image"  class="fa fa-image"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-picture-o"  class="fa fa-picture-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-pencil"  class="fa fa-pencil"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-map-marker"  class="fa fa-map-marker"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-adjust"  class="fa fa-adjust"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-tint"  class="fa fa-tint"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-edit"  class="fa fa-edit"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-pencil-square-o"  class="fa fa-pencil-square-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-share-square-o"  class="fa fa-share-square-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-check-square-o"  class="fa fa-check-square-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrows"  class="fa fa-arrows"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-step-backward"  class="fa fa-step-backward"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-fast-backward"  class="fa fa-fast-backward"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-backward"  class="fa fa-backward"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-play"  class="fa fa-play"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-pause"  class="fa fa-pause"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-stop"  class="fa fa-stop"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-forward"  class="fa fa-forward"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-fast-forward"  class="fa fa-fast-forward"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-step-forward"  class="fa fa-step-forward"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-eject"  class="fa fa-eject"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-chevron-left"  class="fa fa-chevron-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-chevron-right"  class="fa fa-chevron-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-plus-circle"  class="fa fa-plus-circle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-minus-circle"  class="fa fa-minus-circle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-times-circle"  class="fa fa-times-circle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-check-circle"  class="fa fa-check-circle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-question-circle"  class="fa fa-question-circle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-info-circle"  class="fa fa-info-circle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-crosshairs"  class="fa fa-crosshairs"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-times-circle-o"  class="fa fa-times-circle-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-check-circle-o"  class="fa fa-check-circle-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-ban"  class="fa fa-ban"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-left"  class="fa fa-arrow-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-right"  class="fa fa-arrow-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-up"  class="fa fa-arrow-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-down"  class="fa fa-arrow-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-mail-forward"  class="fa fa-mail-forward"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-share"  class="fa fa-share"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-expand"  class="fa fa-expand"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-compress"  class="fa fa-compress"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-plus"  class="fa fa-plus"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-minus"  class="fa fa-minus"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-asterisk"  class="fa fa-asterisk"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-exclamation-circle"  class="fa fa-exclamation-circle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-gift"  class="fa fa-gift"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-leaf"  class="fa fa-leaf"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-fire"  class="fa fa-fire"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-eye"  class="fa fa-eye"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-eye-slash"  class="fa fa-eye-slash"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-warning"  class="fa fa-warning"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-exclamation-triangle"  class="fa fa-exclamation-triangle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-plane"  class="fa fa-plane"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-calendar"  class="fa fa-calendar"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-random"  class="fa fa-random"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-comment"  class="fa fa-comment"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-magnet"  class="fa fa-magnet"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-chevron-up"  class="fa fa-chevron-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-chevron-down"  class="fa fa-chevron-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-retweet"  class="fa fa-retweet"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-shopping-cart"  class="fa fa-shopping-cart"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-folder"  class="fa fa-folder"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-folder-open"  class="fa fa-folder-open"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrows-v"  class="fa fa-arrows-v"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrows-h"  class="fa fa-arrows-h"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-twitter-square"  class="fa fa-twitter-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-facebook-square"  class="fa fa-facebook-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-camera-retro"  class="fa fa-camera-retro"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-key"  class="fa fa-key"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-gears"  class="fa fa-gears"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cogs"  class="fa fa-cogs"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-comments"  class="fa fa-comments"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-thumbs-o-up"  class="fa fa-thumbs-o-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-thumbs-o-down"  class="fa fa-thumbs-o-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-star-half"  class="fa fa-star-half"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-heart-o"  class="fa fa-heart-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sign-out"  class="fa fa-sign-out"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-linkedin-square"  class="fa fa-linkedin-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-thumb-tack"  class="fa fa-thumb-tack"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-external-link"  class="fa fa-external-link"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sign-in"  class="fa fa-sign-in"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-trophy"  class="fa fa-trophy"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-github-square"  class="fa fa-github-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-upload"  class="fa fa-upload"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-lemon-o"  class="fa fa-lemon-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-phone"  class="fa fa-phone"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-square-o"  class="fa fa-square-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bookmark-o"  class="fa fa-bookmark-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-phone-square"  class="fa fa-phone-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-twitter"  class="fa fa-twitter"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-facebook"  class="fa fa-facebook"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-github"  class="fa fa-github"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-unlock"  class="fa fa-unlock"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-credit-card"  class="fa fa-credit-card"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-rss"  class="fa fa-rss"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-hdd-o"  class="fa fa-hdd-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bullhorn"  class="fa fa-bullhorn"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bell"  class="fa fa-bell"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-certificate"  class="fa fa-certificate"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-hand-o-right"  class="fa fa-hand-o-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-hand-o-left"  class="fa fa-hand-o-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-hand-o-up"  class="fa fa-hand-o-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-hand-o-down"  class="fa fa-hand-o-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-circle-left"  class="fa fa-arrow-circle-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-circle-right"  class="fa fa-arrow-circle-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-circle-up"  class="fa fa-arrow-circle-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-circle-down"  class="fa fa-arrow-circle-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-globe"  class="fa fa-globe"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-wrench"  class="fa fa-wrench"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-tasks"  class="fa fa-tasks"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-filter"  class="fa fa-filter"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-briefcase"  class="fa fa-briefcase"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrows-alt"  class="fa fa-arrows-alt"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-group"  class="fa fa-group"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-users"  class="fa fa-users"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-chain"  class="fa fa-chain"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-link"  class="fa fa-link"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cloud"  class="fa fa-cloud"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-flask"  class="fa fa-flask"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cut"  class="fa fa-cut"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-scissors"  class="fa fa-scissors"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-copy"  class="fa fa-copy"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-files-o"  class="fa fa-files-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-paperclip"  class="fa fa-paperclip"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-save"  class="fa fa-save"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-floppy-o"  class="fa fa-floppy-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-square"  class="fa fa-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-navicon"  class="fa fa-navicon"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-reorder"  class="fa fa-reorder"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bars"  class="fa fa-bars"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-list-ul"  class="fa fa-list-ul"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-list-ol"  class="fa fa-list-ol"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-strikethrough"  class="fa fa-strikethrough"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-underline"  class="fa fa-underline"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-table"  class="fa fa-table"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-magic"  class="fa fa-magic"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-truck"  class="fa fa-truck"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-pinterest"  class="fa fa-pinterest"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-pinterest-square"  class="fa fa-pinterest-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-google-plus-square"  class="fa fa-google-plus-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-google-plus"  class="fa fa-google-plus"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-money"  class="fa fa-money"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-caret-down"  class="fa fa-caret-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-caret-up"  class="fa fa-caret-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-caret-left"  class="fa fa-caret-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-caret-right"  class="fa fa-caret-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-columns"  class="fa fa-columns"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-unsorted"  class="fa fa-unsorted"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort"  class="fa fa-sort"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort-down"  class="fa fa-sort-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort-desc"  class="fa fa-sort-desc"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort-up"  class="fa fa-sort-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort-asc"  class="fa fa-sort-asc"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-envelope"  class="fa fa-envelope"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-linkedin"  class="fa fa-linkedin"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-rotate-left"  class="fa fa-rotate-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-undo"  class="fa fa-undo"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-legal"  class="fa fa-legal"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-gavel"  class="fa fa-gavel"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-dashboard"  class="fa fa-dashboard"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-tachometer"  class="fa fa-tachometer"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-comment-o"  class="fa fa-comment-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-comments-o"  class="fa fa-comments-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-flash"  class="fa fa-flash"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bolt"  class="fa fa-bolt"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sitemap"  class="fa fa-sitemap"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-umbrella"  class="fa fa-umbrella"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-paste"  class="fa fa-paste"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-clipboard"  class="fa fa-clipboard"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-lightbulb-o"  class="fa fa-lightbulb-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-exchange"  class="fa fa-exchange"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cloud-download"  class="fa fa-cloud-download"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cloud-upload"  class="fa fa-cloud-upload"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-user-md"  class="fa fa-user-md"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-stethoscope"  class="fa fa-stethoscope"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-suitcase"  class="fa fa-suitcase"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bell-o"  class="fa fa-bell-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-coffee"  class="fa fa-coffee"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cutlery"  class="fa fa-cutlery"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-text-o"  class="fa fa-file-text-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-building-o"  class="fa fa-building-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-hospital-o"  class="fa fa-hospital-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-ambulance"  class="fa fa-ambulance"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-medkit"  class="fa fa-medkit"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-fighter-jet"  class="fa fa-fighter-jet"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-beer"  class="fa fa-beer"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-h-square"  class="fa fa-h-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-plus-square"  class="fa fa-plus-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-angle-double-left"  class="fa fa-angle-double-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-angle-double-right"  class="fa fa-angle-double-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-angle-double-up"  class="fa fa-angle-double-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-angle-double-down"  class="fa fa-angle-double-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-angle-left"  class="fa fa-angle-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-angle-right"  class="fa fa-angle-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-angle-up"  class="fa fa-angle-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-angle-down"  class="fa fa-angle-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-desktop"  class="fa fa-desktop"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-laptop"  class="fa fa-laptop"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-tablet"  class="fa fa-tablet"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-mobile-phone"  class="fa fa-mobile-phone"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-mobile"  class="fa fa-mobile"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-circle-o"  class="fa fa-circle-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-quote-left"  class="fa fa-quote-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-quote-right"  class="fa fa-quote-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-spinner"  class="fa fa-spinner"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-circle"  class="fa fa-circle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-mail-reply"  class="fa fa-mail-reply"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-reply"  class="fa fa-reply"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-github-alt"  class="fa fa-github-alt"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-folder-o"  class="fa fa-folder-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-folder-open-o"  class="fa fa-folder-open-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-smile-o"  class="fa fa-smile-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-frown-o"  class="fa fa-frown-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-meh-o"  class="fa fa-meh-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-gamepad"  class="fa fa-gamepad"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-keyboard-o"  class="fa fa-keyboard-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-flag-o"  class="fa fa-flag-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-flag-checkered"  class="fa fa-flag-checkered"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-terminal"  class="fa fa-terminal"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-code"  class="fa fa-code"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-mail-reply-all"  class="fa fa-mail-reply-all"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-reply-all"  class="fa fa-reply-all"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-star-half-empty"  class="fa fa-star-half-empty"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-star-half-full"  class="fa fa-star-half-full"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-star-half-o"  class="fa fa-star-half-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-location-arrow"  class="fa fa-location-arrow"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-crop"  class="fa fa-crop"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-code-fork"  class="fa fa-code-fork"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-unlink"  class="fa fa-unlink"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-chain-broken"  class="fa fa-chain-broken"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-question"  class="fa fa-question"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-info"  class="fa fa-info"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-exclamation"  class="fa fa-exclamation"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-superscript"  class="fa fa-superscript"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-subscript"  class="fa fa-subscript"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-eraser"  class="fa fa-eraser"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-puzzle-piece"  class="fa fa-puzzle-piece"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-microphone"  class="fa fa-microphone"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-microphone-slash"  class="fa fa-microphone-slash"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-shield"  class="fa fa-shield"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-calendar-o"  class="fa fa-calendar-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-fire-extinguisher"  class="fa fa-fire-extinguisher"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-rocket"  class="fa fa-rocket"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-maxcdn"  class="fa fa-maxcdn"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-chevron-circle-left"  class="fa fa-chevron-circle-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-chevron-circle-right"  class="fa fa-chevron-circle-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-chevron-circle-up"  class="fa fa-chevron-circle-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-chevron-circle-down"  class="fa fa-chevron-circle-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-anchor"  class="fa fa-anchor"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-unlock-alt"  class="fa fa-unlock-alt"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bullseye"  class="fa fa-bullseye"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-ellipsis-h"  class="fa fa-ellipsis-h"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-ellipsis-v"  class="fa fa-ellipsis-v"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-rss-square"  class="fa fa-rss-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-play-circle"  class="fa fa-play-circle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-ticket"  class="fa fa-ticket"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-minus-square"  class="fa fa-minus-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-minus-square-o"  class="fa fa-minus-square-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-level-up"  class="fa fa-level-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-level-down"  class="fa fa-level-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-check-square"  class="fa fa-check-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-pencil-square"  class="fa fa-pencil-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-external-link-square"  class="fa fa-external-link-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-share-square"  class="fa fa-share-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-compass"  class="fa fa-compass"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-toggle-down"  class="fa fa-toggle-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-caret-square-o-down"  class="fa fa-caret-square-o-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-toggle-up"  class="fa fa-toggle-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-caret-square-o-up"  class="fa fa-caret-square-o-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-toggle-right"  class="fa fa-toggle-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-caret-square-o-right"  class="fa fa-caret-square-o-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-euro"  class="fa fa-euro"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-eur"  class="fa fa-eur"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-gbp"  class="fa fa-gbp"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-dollar"  class="fa fa-dollar"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-usd"  class="fa fa-usd"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-rupee"  class="fa fa-rupee"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-inr"  class="fa fa-inr"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cny"  class="fa fa-cny"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-rmb"  class="fa fa-rmb"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-yen"  class="fa fa-yen"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-jpy"  class="fa fa-jpy"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-ruble"  class="fa fa-ruble"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-rouble"  class="fa fa-rouble"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-rub"  class="fa fa-rub"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-won"  class="fa fa-won"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-krw"  class="fa fa-krw"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bitcoin"  class="fa fa-bitcoin"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-btc"  class="fa fa-btc"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file"  class="fa fa-file"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-text"  class="fa fa-file-text"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort-alpha-asc"  class="fa fa-sort-alpha-asc"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort-alpha-desc"  class="fa fa-sort-alpha-desc"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort-amount-asc"  class="fa fa-sort-amount-asc"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort-amount-desc"  class="fa fa-sort-amount-desc"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort-numeric-asc"  class="fa fa-sort-numeric-asc"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sort-numeric-desc"  class="fa fa-sort-numeric-desc"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-thumbs-up"  class="fa fa-thumbs-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-thumbs-down"  class="fa fa-thumbs-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-youtube-square"  class="fa fa-youtube-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-youtube"  class="fa fa-youtube"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-xing"  class="fa fa-xing"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-xing-square"  class="fa fa-xing-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-youtube-play"  class="fa fa-youtube-play"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-dropbox"  class="fa fa-dropbox"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-stack-overflow"  class="fa fa-stack-overflow"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-instagram"  class="fa fa-instagram"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-flickr"  class="fa fa-flickr"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-adn"  class="fa fa-adn"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bitbucket"  class="fa fa-bitbucket"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bitbucket-square"  class="fa fa-bitbucket-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-tumblr"  class="fa fa-tumblr"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-tumblr-square"  class="fa fa-tumblr-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-long-arrow-down"  class="fa fa-long-arrow-down"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-long-arrow-up"  class="fa fa-long-arrow-up"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-long-arrow-left"  class="fa fa-long-arrow-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-long-arrow-right"  class="fa fa-long-arrow-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-apple"  class="fa fa-apple"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-windows"  class="fa fa-windows"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-android"  class="fa fa-android"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-linux"  class="fa fa-linux"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-dribbble"  class="fa fa-dribbble"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-skype"  class="fa fa-skype"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-foursquare"  class="fa fa-foursquare"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-trello"  class="fa fa-trello"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-female"  class="fa fa-female"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-male"  class="fa fa-male"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-gittip"  class="fa fa-gittip"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sun-o"  class="fa fa-sun-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-moon-o"  class="fa fa-moon-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-archive"  class="fa fa-archive"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bug"  class="fa fa-bug"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-vk"  class="fa fa-vk"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-weibo"  class="fa fa-weibo"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-renren"  class="fa fa-renren"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-pagelines"  class="fa fa-pagelines"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-stack-exchange"  class="fa fa-stack-exchange"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-circle-o-right"  class="fa fa-arrow-circle-o-right"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-arrow-circle-o-left"  class="fa fa-arrow-circle-o-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-toggle-left"  class="fa fa-toggle-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-caret-square-o-left"  class="fa fa-caret-square-o-left"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-dot-circle-o"  class="fa fa-dot-circle-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-wheelchair"  class="fa fa-wheelchair"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-vimeo-square"  class="fa fa-vimeo-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-turkish-lira"  class="fa fa-turkish-lira"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-try"  class="fa fa-try"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-plus-square-o"  class="fa fa-plus-square-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-space-shuttle"  class="fa fa-space-shuttle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-slack"  class="fa fa-slack"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-envelope-square"  class="fa fa-envelope-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-wordpress"  class="fa fa-wordpress"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-openid"  class="fa fa-openid"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-institution"  class="fa fa-institution"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bank"  class="fa fa-bank"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-university"  class="fa fa-university"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-mortar-board"  class="fa fa-mortar-board"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-graduation-cap"  class="fa fa-graduation-cap"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-yahoo"  class="fa fa-yahoo"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-google"  class="fa fa-google"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-reddit"  class="fa fa-reddit"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-reddit-square"  class="fa fa-reddit-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-stumbleupon-circle"  class="fa fa-stumbleupon-circle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-stumbleupon"  class="fa fa-stumbleupon"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-delicious"  class="fa fa-delicious"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-digg"  class="fa fa-digg"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-pied-piper"  class="fa fa-pied-piper"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-pied-piper-alt"  class="fa fa-pied-piper-alt"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-drupal"  class="fa fa-drupal"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-joomla"  class="fa fa-joomla"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-language"  class="fa fa-language"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-fax"  class="fa fa-fax"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-building"  class="fa fa-building"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-child"  class="fa fa-child"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-paw"  class="fa fa-paw"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-spoon"  class="fa fa-spoon"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cube"  class="fa fa-cube"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cubes"  class="fa fa-cubes"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-behance"  class="fa fa-behance"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-behance-square"  class="fa fa-behance-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-steam"  class="fa fa-steam"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-steam-square"  class="fa fa-steam-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-recycle"  class="fa fa-recycle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-automobile"  class="fa fa-automobile"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-car"  class="fa fa-car"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-cab"  class="fa fa-cab"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-taxi"  class="fa fa-taxi"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-tree"  class="fa fa-tree"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-spotify"  class="fa fa-spotify"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-deviantart"  class="fa fa-deviantart"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-soundcloud"  class="fa fa-soundcloud"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-database"  class="fa fa-database"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-pdf-o"  class="fa fa-file-pdf-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-word-o"  class="fa fa-file-word-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-excel-o"  class="fa fa-file-excel-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-powerpoint-o"  class="fa fa-file-powerpoint-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-photo-o"  class="fa fa-file-photo-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-picture-o"  class="fa fa-file-picture-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-image-o"  class="fa fa-file-image-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-zip-o"  class="fa fa-file-zip-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-archive-o"  class="fa fa-file-archive-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-sound-o"  class="fa fa-file-sound-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-audio-o"  class="fa fa-file-audio-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-movie-o"  class="fa fa-file-movie-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-video-o"  class="fa fa-file-video-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-file-code-o"  class="fa fa-file-code-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-vine"  class="fa fa-vine"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-codepen"  class="fa fa-codepen"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-jsfiddle"  class="fa fa-jsfiddle"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-life-bouy"  class="fa fa-life-bouy"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-life-saver"  class="fa fa-life-saver"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-support"  class="fa fa-support"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-life-ring"  class="fa fa-life-ring"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-circle-o-notch"  class="fa fa-circle-o-notch"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-ra"  class="fa fa-ra"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-rebel"  class="fa fa-rebel"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-ge"  class="fa fa-ge"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-empire"  class="fa fa-empire"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-git-square"  class="fa fa-git-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-git"  class="fa fa-git"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-hacker-news"  class="fa fa-hacker-news"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-tencent-weibo"  class="fa fa-tencent-weibo"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-qq"  class="fa fa-qq"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-wechat"  class="fa fa-wechat"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-weixin"  class="fa fa-weixin"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-send"  class="fa fa-send"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-paper-plane"  class="fa fa-paper-plane"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-send-o"  class="fa fa-send-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-paper-plane-o"  class="fa fa-paper-plane-o"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-history"  class="fa fa-history"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-circle-thin"  class="fa fa-circle-thin"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-header"  class="fa fa-header"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-paragraph"  class="fa fa-paragraph"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-sliders"  class="fa fa-sliders"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-share-alt"  class="fa fa-share-alt"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-share-alt-square"  class="fa fa-share-alt-square"> </li>';
			$ione_font_icons .= '<li type="fa" data-value="fa-bomb"  class="fa fa-bomb"> </li>';
				
		$ione_font_icons .= '</ul>';	
		
		return $ione_font_icons;
	}
}


