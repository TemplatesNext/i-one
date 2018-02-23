<?php

function ione_customizer_config() {
	

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
        'logo_image'   => get_template_directory_uri() . '/images/logo.png',
  
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
        //'url_path'     => get_template_directory_uri() . '/inc/kirki/',

        'textdomain'   => 'i-one',
		
        'i18n'         => $strings,		
		
		
	);
	
	if ( !is_plugin_active( 'templatesnext-onepager/tx-onepager.php' ) ) {
		$args['url_path'] = get_template_directory_uri() . '/inc/kirki/';
	}

	
	
	return $args;
}
add_filter( 'kirki/config', 'ione_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'ione_add_panels_and_sections' ); 
function ione_add_panels_and_sections( $wp_customize ) {
	
	/*
	* Add panels
	*/
	
	$wp_customize->add_panel( 'slider', array(
		'priority'    => 140,
		'title'       => __( 'Slider', 'i-one' ),
		'description' => __( 'Slides details', 'i-one' ),
	));
	
	$wp_customize->add_panel( 'rmenu', array(
		'priority'    => 130,
		'title'       => __( 'Responsive Menu', 'i-one' ),
		'description' => __( 'Responsive Menu Options', 'i-one' ),
	) );		

    /**
     * Add Sections
     */
    $wp_customize->add_section('basic', array(
        'title'    => __('Basic Settings', 'i-one'),
        'description' => '',
        'priority' => 130,
    ));
	
	$wp_customize->add_section('slides', array(
        'title'    => __('Slides', 'i-one'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 140,
    ));		
	
    $wp_customize->add_section('layout', array(
        'title'    => __('Layout Options', 'i-one'),
        'description' => '',
        'priority' => 130,
    ));	
	
    $wp_customize->add_section('social', array(
        'title'    => __('Social Links', 'i-one'),
        'description' => __('Insert full URL of your social link including &#34;http://&#34; replacing #, Empty the fileld if not using the link.', 'i-one'),
        'priority' => 130,
    ));		
	
    $wp_customize->add_section('blogpage', array(
        'title'    => __('Default Blog Page', 'i-one'),
        'description' => '',
        'priority' => 130,
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
        'priority' => 140,
    ));		
	
	// promo sections
	
	$wp_customize->add_section('nxpromo', array(
        'title'    => __('More About i-one', 'i-one'),
        'description' => '',
        'priority' => 170,
    ));	
	
	// Responsive Menu sections
	
	$wp_customize->add_section('rmgeneral', array(
        'title'    => __('General Options', 'i-one'),
        'panel' => 'rmenu',		
        'description' => '',
        'priority' => 170,
    ));	
	
    $wp_customize->add_section('rmsettings', array(
        'title'    => __('Menu Appearance', 'i-one'),
        'panel' => 'rmenu',
        'description' => '',
        'priority' => 180,
    ));						
	
}


function ione_custom_setting( $controls ) {
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'top_phone',
        'label'    => __( 'Phone Number', 'i-one' ),
        'section'  => 'basic',
        'default'  => '1-000-123-4567',
        'priority' => 1,
		'description' => __( 'Phone number that appears on top bar.', 'i-one' ),
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'top_email',
        'label'    => __( 'Email Address', 'i-one' ),
        'section'  => 'basic',
        'default'  => 'email@example.com',
        'priority' => 1,
		'description' => __( 'Email Id that appears on top bar.', 'i-one' ),		
    );
	/*
	$controls[] = array(
		'type'        => 'upload',
		'settings'     => 'logo-trans',
		'label'       => __( 'Reverse Transparent logo', 'i-one' ),
		'description' => __( 'Transparent logo for the fullscreen slider and dark background. Width 280px, height 72px max.', 'i-one' ),
        'section'  => 'title_tagline',
		'default'     => '',		
		'priority'    => 3,
	);
	*/
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'show_search',
		'label'       => __( 'Show Search', 'i-one' ),
		'description' => __( 'Show search option on main navigation', 'i-one' ),
		'section'     => 'basic',
		'default'     => 0,
		'priority'    => 3,
	);

	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'pre_loader',
		'label'       => __( 'Turn ON Page Preloader', 'i-one' ),
		'description' => __( 'Turn ON/OFF loding animation before page load', 'i-one' ),
		'section'     => 'basic',
		'default'     => 0,		
		'priority'    => 3,
	);					
	
	$controls[] = array(
		'type'        => 'color',
		'settings'     => 'primary_color',
		'label'       => __( 'Primary Color', 'i-one' ),
		'description' => __( 'Choose your theme color', 'i-one' ),
		'section'     => 'colors',
		'default'     => '#e57e26',
		'priority'    => 1,
	);	
	
	$controls[] = array(
		'type'        => 'radio-image',
		'settings'     => 'blog_layout',
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
		'settings'     => 'show_full',
		'label'       => __( 'Show Full Content', 'i-one' ),
		'description' => __( 'Show full content on blog pages', 'i-one' ),
		'section'     => 'layout',
		'default'     => 0,
		'priority'    => 3,
	);		
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'wide_layout',
		'label'       => __( 'Wide layout', 'i-one' ),
		'description' => __( 'Check to have wide layout', 'i-one' ),
		'section'     => 'layout',
		'default'     => 1,
		'priority'    => 4,
	);
	
	//Custom Header
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'header_bg_color',
        'label'    => __( 'Header Background Color', 'i-one' ),
        'section'  => 'customheader',
		'default'     => 'rgb(51, 51, 51)',
		'priority'    => 1,
		'alpha'       => false,
	);
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'header_link_color',
        'label'    => __( 'Link Color', 'i-one' ),
        'section'  => 'customheader',
		'default'     => 'rgb(255, 255, 255)',
		'priority'    => 1,
		'alpha'       => false,
	);
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'header_title_color',
        'label'    => __( 'Site Title Color', 'i-one' ),
        'section'  => 'customheader',
		'default'     => 'rgb(255, 255, 255)',
		'priority'    => 1,
		'alpha'       => false,
	);
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'header_desc_color',
        'label'    => __( 'Site Description Color', 'i-one' ),
        'section'  => 'customheader',
		'default'     => 'rgb(230, 230, 230)',
		'priority'    => 1,
		'alpha'       => false,
	);			
	
	// social links
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_facebook',
        'label'    => __( 'Facebook', 'i-one' ),
        'section'  => 'social',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_twitter',
        'label'    => __( 'Twitter', 'i-one' ),
        'section'  => 'social',
        'default'  => '#',
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_flickr',
        'label'    => __( 'Flickr', 'i-one' ),
        'section'  => 'social',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_feed',
        'label'    => __( 'RSS', 'i-one' ),
        'section'  => 'social',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_instagram',
        'label'    => __( 'Instagram', 'i-one' ),
        'section'  => 'social',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_googleplus',
        'label'    => __( 'Google Plus', 'i-one' ),
        'section'  => 'social',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_youtube',
        'label'    => __( 'YouTube', 'i-one' ),
        'section'  => 'social',
        'default'  => '#',
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_pinterest',
        'label'    => __( 'Pinterest', 'i-one' ),
        'section'  => 'social',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_linkedin',
        'label'    => __( 'Linkedin', 'i-one' ),
        'section'  => 'social',
        'default'  => '#',
        'priority' => 1,
    );	
	
	// Slider

	$controls[] = array(
		'type'        => 'slider',
		'settings'     => 'itrans_sliderspeed',
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
		'settings'     => 'itrans_sliderparallax',
		'label'       => __( 'Parallax Effect', 'i-one' ),
		'description' => __( 'Turn ON/OFF Parallax Effect', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 1,			
		'priority'    => 4,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_overlay',
		'label'       => __( 'Turn Off Slider Overlay Layer', 'i-one' ),
		'description' => __( 'Turn Off/on the dotted slider overlay layer', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 1,
		'priority'    => 4,
	);	
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_ubar',
		'label'       => __( 'Turn On/Off Top Utilitybar', 'i-one' ),
		'description' => __( 'Turn Off/on the top utilitybar containing email/phone and socoal icon links', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 1,
		'priority'    => 5,
	);	
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'slider_height',
		'label'       => __( 'Slider Height (in %)', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 64,
		'choices'     => array(
			'min'  => '0',
			'max'  => '64',
			'step' => '1',
		),
	);				
	
	// slides 	
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
				'itrans_slide_title' => __( 'One Page WordPress Theme', 'i-one' ),
				'itrans_slide_desc'  => __( 'Extremely powerful and flexible one-page multi-purpose WordPress theme', 'i-one' ),
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
		'settings'     => 'slider_stat',
		'label'       => __( 'Turn ON/OFF i-one Slider', 'i-one' ),
		'description' => __( 'Turn Off or On to hide/show default i-one slider', 'i-one' ),
		'section'     => 'blogpage',
		'default'     => 0,
		'priority'    => 0,
	);	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'blogslide_scode',
        'label'    => __( 'Other Slider Shortcode', 'i-one' ),
        'section'  => 'blogpage',
        'default'  => '',
		'description' => __( 'Enter a 3rd party slider shortcode, ex. meta slider, smart slider 2, wow slider, etc.', 'i-one' ),
        'priority' => 2,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'banner_text',
        'label'    => __( 'Banner Text', 'i-one' ),
        'section'  => 'blogpage',
        'default'  => get_bloginfo( 'description' ),
        'priority' => 3,
		'description' => __( 'if you are using a logo and want your site title or slogan to appear on the header banner', 'i-one' ),		
    );
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'blog_header_height',
		'label'       => __( 'Image/Vedio Header Height (in %)', 'i-one' ),
		'section'     => 'header_image',
		'default'     => 64,
		'choices'     => array(
			'min'  => '0',
			'max'  => '100',
			'step' => '1',
		),
		'priority'    => 10,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'header_overlay',
		'label'       => __( 'Turn ON/OFF Checkered Background', 'i-one' ),
		'description' => __( 'Turn ON or OF the image/videio header background', 'i-one' ),
		'section'     => 'header_image',
		'default'     => 1,
		'priority'    => 10,
	);		
	

	//rmgeneral
	//rmsettings

	$controls[] = array(
		'label' => __('Enable Mobile Navigation', 'i-one'),
		'description' => __('Check if you want to activate mobile navigation.', 'i-one'),
		'settings' => 'enabled',
		'default' => '1',
		'type' => 'checkbox',
        'section'  => 'rmgeneral',	
	);

	$controls[] = array(
		'label' => __('Elements to hide in mobile:', 'i-one'),
		'description' => __('Enter the css class/ids for different elements you want to hide on mobile separeted by a comma(,). Example: .nav,#main-menu ', 'i-one'),
		'settings' => 'hide',
		'default' => '',
		'type' => 'text',
        'section'  => 'rmgeneral',		
	);
	
	$controls[] = array(
		'label' => __('Enable Swipe', 'i-one'),
		'description' => __('Enable swipe gesture to open/close menus, Only applicable for left/right menu.', 'i-one'),
		'settings' => 'swipe',
		'default' => 'yes',
		'choices' => array('yes' => __('Yes', 'i-one'),'no' => __('No', 'i-one')),
		'type' => 'radio',
        'section'  => 'rmgeneral',		
	);
	
	$controls[] = array(
		'label' => __('Search Field Position', 'i-one'),
		'description' => __('Select the position of search box or simply hide the search box if you donot need it.', 'i-one'),
		'settings' => 'search_box',
		'default' => 'below_menu',
		'choices' => array('above_menu' => __('Above Menu', 'i-one'), 'below_menu' => __('Below Menu', 'i-one'), 'hide'=> __('Hide search box', 'i-one') ),
		'type' => 'select',
        'section'  => 'rmgeneral',		
	);
		
	$controls[] = array(
		'label' => __('Allow zoom on mobile devices', 'i-one'),
		'settings' => 'zooming',
		'default' => 'yes',
		'choices' => array('yes' => __('Yes', 'i-one'),'no' => __('No', 'i-one')),
		'type' => 'radio',
        'section'  => 'rmgeneral',	
	);
		

	// Responsive Menu Settings
	$controls[] = array(
		'label' => __('Menu Symbol Position', 'i-one'),
		'description' => __('Select menu icon position which will be displayed on the menu bar.', 'i-one'),
		'settings' => 'menu_symbol_pos',
		'default' => 'left',
		'choices' => array('left' => __('Left', 'i-one'),'right' => __('Right', 'i-one')),
		'type' => 'select',
        'section'  => 'rmsettings',	
	);

	$controls[] = array(
		'label' => __('Menu Text', 'i-one'),
		'description' => __('Entet the text you would like to display on the menu bar.', 'i-one'),
		'settings' => 'bar_title',
		'default' => __('MENU', 'i-one'),
		'type' => 'text',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Menu Open Direction', 'i-one'),
		'description' => __('Select the direction from where menu will open.', 'i-one'),
		'settings' => 'position',
		'default' => 'top',
		'choices' => array('left' => 'Left','right' => 'Right', 'top' => 'Top' ),
		'type' => 'select',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Display menu from width (in px)', 'i-one'),
		'description' => __(' Enter the width (in px) below which the responsive menu will be visible on screen', 'i-one'),
		'settings' => 'from_width',
		'default' => 1069,
		'type' => 'text',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Menu Width', 'i-one'),
		'description' => __('Enter menu width in (%) only applicable for left and right menu.', 'i-one'),
		'settings' => 'how_wide',
		'default' => '80',
		'type' => 'text',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu bar background color', 'i-one'),
		'description' => '',
		'settings' => 'bar_bgd',
		'default' => '#e57e26',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu bar text color', 'i-one'),
		'settings' => 'bar_color',
		'default' => '#F2F2F2',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu background color', 'i-one'),
		'settings' => 'menu_bgd',
		'default' => '#2E2E2E',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu text color', 'i-one'),
		'settings' => 'menu_color',
		'default' => '#CFCFCF',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu mouse over text color', 'i-one'),
		'settings' => 'menu_color_hover',
		'default' => '#606060',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu icon color', 'i-one'),
		'settings' => 'menu_icon_color',
		'default' => '#FFFFFF',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu borders(top & left) color', 'i-one'),
		'settings' => 'menu_border_top',
		'default' => '#0D0D0D',
		'type' => 'color',
        'section'  => 'rmsettings',		
	);
	
	$controls[] = array(
		'label' => __('Menu borders(bottom) color', 'i-one'),
		'settings' => 'menu_border_bottom',
		'default' => '#131212',
		'type' => 'color',
        'section'  => 'rmsettings',		
	);
	
	$controls[] = array(
		'label' => __('Enable borders for menu items', 'i-one'),
		'settings' => 'menu_border_bottom_show',
		'default' => 'yes',
		'choices' =>  array('yes' => __('Yes', 'i-one'),'no' => __('No', 'i-one')),
		'type' => 'radio',
        'section'  => 'rmsettings',			
	);	
	
	$controls[] = array(
		'type'        => 'custom',
		'settings'    => 'custom_demo',
		'section'     => 'nxpromo',
		'default'	  => '<div class="promo-box">
        <div class="promo-2">
        	<div class="promo-wrap">
            	<a href="http://templatesnext.in/i-one-landing/" target="_blank">' . __('i-one Demo', 'i-one') . '</a>
                <a href="https://www.facebook.com/templatesnext" target="_blank">' . __('Facebook', 'i-one') . '</a> 
                <a href="http://templatesnext.org/ispirit/landing/forums/" target="_blank">' . __('Support', 'i-one') . '</a>                                 
                <a href="https://wordpress.org/support/view/theme-reviews/i-one#postform" target="_blank">' . __('Rate i-one', 'i-one') . '</a>                
            </div>
        </div>
		</div>',
		'priority' => 10,
	);
	
    return $controls;
}
add_filter( 'kirki/controls', 'ione_custom_setting' );







