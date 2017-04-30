<?php

/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'ione_add_panels_and_sections_rmenu' ); 
function ione_add_panels_and_sections_rmenu( $wp_customize ) {
	
	$wp_customize->add_panel( 'rmenu', array(
		'priority'    => 140,
		'title'       => __( 'Responsive Menu', 'i-one' ),
		'description' => __( 'Responsive Menu Options', 'i-one' ),
	) );	
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

function ione_custom_setting_rmenu( $controls ) {
	
	//rmgeneral
	//rmsettings

	$controls[] = array(
		'label' => __('Enable Mobile Navigation', 'i-one'),
		'description' => __('Check if you want to activate mobile navigation.', 'i-one'),
		'setting' => 'enabled',
		'default' => '1',
		'type' => 'checkbox',
        'section'  => 'rmgeneral',	
	);

	$controls[] = array(
		'label' => __('Elements to hide in mobile:', 'i-one'),
		'description' => __('Enter the css class/ids for different elements you want to hide on mobile separeted by a comma(,). Example: .nav,#main-menu ', 'i-one'),
		'setting' => 'hide',
		'default' => '',
		'type' => 'text',
        'section'  => 'rmgeneral',		
	);
	
	$controls[] = array(
		'label' => __('Enable Swipe', 'i-one'),
		'description' => __('Enable swipe gesture to open/close menus, Only applicable for left/right menu.', 'i-one'),
		'setting' => 'swipe',
		'default' => 'yes',
		'choices' => array('yes' => 'Yes','no' => 'No'),
		'type' => 'radio',
        'section'  => 'rmgeneral',		
	);
	
	$controls[] = array(
		'label' => __(' Search...', 'i-one'),
		'description' => __(' Select the position of search box or simply hide the search box if you donot need it.', 'i-one'),
		'setting' => 'search_box',
		'default' => 'below_menu',
		'choices' => array('above_menu' => 'Above Menu','below_menu' => 'Below Menu', 'hide'=> 'Hide search box' ),
		'type' => 'select',
        'section'  => 'rmgeneral',		
	);

	$controls[] = array(
		'label' => __(' Search Box Text', 'i-one'),
		'description' => __('Enter the text that would be displayed on the search box placeholder.', 'i-one'),
		'setting' => 'search_box_text',
		'default' => __('Search...', 'i-one'),
		'type' => 'text',
        'section'  => 'rmgeneral',	
	);
		
	$controls[] = array(
		'label' => __('Allow zoom on mobile devices', 'i-one'),
		'description' => __('', 'i-one'),
		'setting' => 'zooming',
		'default' => 'yes',
		'choices' => array('yes' => 'Yes','no' => 'No'),
		'type' => 'radio',
        'section'  => 'rmgeneral',	
	);
		

	// Responsive Menu Settings
	$controls[] = array(
		'label' => __('Menu Symbol Position', 'i-one'),
		'description' => __('Select menu icon position which will be displayed on the menu bar.', 'i-one'),
		'setting' => 'menu_symbol_pos',
		'default' => 'left',
		'class' => 'mini',
		'choices' => array('left' => 'Left','right' => 'Right'),
		'type' => 'select',
        'section'  => 'rmsettings',	
	);

	$controls[] = array(
		'label' => __('Menu Text', 'i-one'),
		'description' => __('Entet the text you would like to display on the menu bar.', 'i-one'),
		'setting' => 'bar_title',
		'default' => __('MENU', 'i-one'),
		'class' => 'mini',
		'type' => 'text',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Menu Open Direction', 'i-one'),
		'description' => __('Select the direction from where menu will open.', 'i-one'),
		'setting' => 'position',
		'default' => 'left',
		'class' => 'mini',
		'choices' => array('left' => 'Left','right' => 'Right', 'top' => 'Top' ),
		'type' => 'select',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Display menu from width (in px)', 'i-one'),
		'description' => __(' Enter the width (in px) below which the responsive menu will be visible on screen', 'i-one'),
		'setting' => 'from_width',
		'default' => 1069,
		'class' => 'mini',
		'type' => 'text',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Menu Width', 'i-one'),
		'description' => __('Enter menu width in (%) only applicable for left and right menu.', 'i-one'),
		'setting' => 'how_wide',
		'default' => '80',
		'class' => 'mini',
		'type' => 'text',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu bar background color', 'i-one'),
		'description' => __('', 'i-one'),
		'setting' => 'bar_bgd',
		'default' => '#000000',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu bar text color', 'i-one'),
		'description' => __('', 'i-one'),
		'setting' => 'bar_color',
		'default' => '#F2F2F2',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu background color', 'i-one'),
		'description' => __('', 'i-one'),
		'setting' => 'menu_bgd',
		'default' => '#2E2E2E',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu text color', 'i-one'),
		'description' => __('', 'i-one'),
		'setting' => 'menu_color',
		'default' => '#CFCFCF',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu mouse over text color', 'i-one'),
		'description' => __('', 'i-one'),
		'setting' => 'menu_color_hover',
		'default' => '#606060',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu icon color', 'i-one'),
		'description' => __('', 'i-one'),
		'setting' => 'menu_icon_color',
		'default' => '#FFFFFF',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu borders(top & left) color', 'i-one'),
		'description' => __('', 'i-one'),
		'setting' => 'menu_border_top',
		'default' => '#0D0D0D',
		'type' => 'color',
        'section'  => 'rmsettings',		
	);
	
	$controls[] = array(
		'label' => __('Menu borders(bottom) color', 'i-one'),
		'description' => __('', 'i-one'),
		'setting' => 'menu_border_bottom',
		'default' => '#131212',
		'type' => 'color',
        'section'  => 'rmsettings',		
	);
	
	$controls[] = array(
		'label' => __('Enable borders for menu items', 'i-one'),
		'description' => __('', 'i-one'),
		'setting' => 'menu_border_bottom_show',
		'default' => 'yes',
		'choices' => array('yes' => 'Yes','no' => 'No'),
		'type' => 'radio',
        'section'  => 'rmsettings',			
	);	
	
	
    return $controls;
}
add_filter( 'kirki/controls', 'ione_custom_setting_rmenu' );



