<?php
/**
 * The main Kirki object
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Early exit if the class already exists
if ( class_exists( 'Kirki_Toolkit' ) ) {
	return;
}

class Kirki_Toolkit {

	/** @var Kirki The only instance of this class */
	public static $instance = null;

	public static $version = '1.0.2';

	public $font_registry = null;
	public $scripts       = null;
	public $api           = null;
	public $styles        = array();

	/**
	 * Access the single instance of this class
	 * @return Kirki
	 */
	public static function get_instance() {
		if ( null == self::$instance ) {
			self::$instance = new Kirki_Toolkit();
		}
		return self::$instance;
	}

	/**
	 * Shortcut method to get the translation strings
	 */
	public static function i18n() {

		$i18n = array(
			'background-color'      => __( 'Background Color', 'i-one' ),
			'background-image'      => __( 'Background Image', 'i-one' ),
			'no-repeat'             => __( 'No Repeat', 'i-one' ),
			'repeat-all'            => __( 'Repeat All', 'i-one' ),
			'repeat-x'              => __( 'Repeat Horizontally', 'i-one' ),
			'repeat-y'              => __( 'Repeat Vertically', 'i-one' ),
			'inherit'               => __( 'Inherit', 'i-one' ),
			'background-repeat'     => __( 'Background Repeat', 'i-one' ),
			'cover'                 => __( 'Cover', 'i-one' ),
			'contain'               => __( 'Contain', 'i-one' ),
			'background-size'       => __( 'Background Size', 'i-one' ),
			'fixed'                 => __( 'Fixed', 'i-one' ),
			'scroll'                => __( 'Scroll', 'i-one' ),
			'background-attachment' => __( 'Background Attachment', 'i-one' ),
			'left-top'              => __( 'Left Top', 'i-one' ),
			'left-center'           => __( 'Left Center', 'i-one' ),
			'left-bottom'           => __( 'Left Bottom', 'i-one' ),
			'right-top'             => __( 'Right Top', 'i-one' ),
			'right-center'          => __( 'Right Center', 'i-one' ),
			'right-bottom'          => __( 'Right Bottom', 'i-one' ),
			'center-top'            => __( 'Center Top', 'i-one' ),
			'center-center'         => __( 'Center Center', 'i-one' ),
			'center-bottom'         => __( 'Center Bottom', 'i-one' ),
			'background-position'   => __( 'Background Position', 'i-one' ),
			'background-opacity'    => __( 'Background Opacity', 'i-one' ),
			'ON'                    => __( 'ON', 'i-one' ),
			'OFF'                   => __( 'OFF', 'i-one' ),
			'all'                   => __( 'All', 'i-one' ),
			'cyrillic'              => __( 'Cyrillic', 'i-one' ),
			'cyrillic-ext'          => __( 'Cyrillic Extended', 'i-one' ),
			'devanagari'            => __( 'Devanagari', 'i-one' ),
			'greek'                 => __( 'Greek', 'i-one' ),
			'greek-ext'             => __( 'Greek Extended', 'i-one' ),
			'khmer'                 => __( 'Khmer', 'i-one' ),
			'latin'                 => __( 'Latin', 'i-one' ),
			'latin-ext'             => __( 'Latin Extended', 'i-one' ),
			'vietnamese'            => __( 'Vietnamese', 'i-one' ),
			'serif'                 => _x( 'Serif', 'font style', 'i-one' ),
			'sans-serif'            => _x( 'Sans Serif', 'font style', 'i-one' ),
			'monospace'             => _x( 'Monospace', 'font style', 'i-one' ),
		);

		$config = apply_filters( 'kirki/config', array() );

		if ( isset( $config['i18n'] ) ) {
			$i18n = wp_parse_args( $config['i18n'], $i18n );
		}

		return $i18n;

	}

	/**
	 * Shortcut method to get the font registry.
	 */
	public static function fonts() {
		return self::get_instance()->font_registry;
	}

	/**
	 * Constructor is private, should only be called by get_instance()
	 */
	private function __construct() {
	}

}
