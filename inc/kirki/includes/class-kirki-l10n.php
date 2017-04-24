<?php
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

if ( ! class_exists( 'Kirki_l10n' ) ) {

	/**
	 * Handles translations
	 */
	class Kirki_l10n {

		/**
		 * The plugin textdomain
		 *
		 * @access protected
		 * @var string
		 */
		protected $textdomain = 'kirki';

		/**
		 * The class constructor.
		 * Adds actions & filters to handle the rest of the methods.
		 *
		 * @access public
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 * Load the plugin textdomain
		 *
		 * @access public
		 */
		public function load_textdomain() {

			if ( null !== $this->get_path() ) {
				load_textdomain( $this->textdomain, $this->get_path() );
			}
			load_plugin_textdomain( $this->textdomain, false, Kirki::$path . '/languages' );

		}

		/**
		 * Gets the path to a translation file.
		 *
		 * @access protected
		 * @return string Absolute path to the translation file.
		 */
		protected function get_path() {
			$path_found = false;
			$found_path = null;
			foreach ( $this->get_paths() as $path ) {
				if ( $path_found ) {
					continue;
				}
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					$path_found = true;
					$found_path = $path;
				}
			}

			return $found_path;

		}

		/**
		 * Returns an array of paths where translation files may be located.
		 *
		 * @access protected
		 * @return array
		 */
		protected function get_paths() {

			return array(
				WP_LANG_DIR . '/' . $this->textdomain . '-' . get_locale() . '.mo',
				Kirki::$path . '/languages/' . $this->textdomain . '-' . get_locale() . '.mo',
			);

		}

		/**
		 * Shortcut method to get the translation strings
		 *
		 * @static
		 * @access public
		 * @param string $config_id The config ID. See Kirki_Config.
		 * @return array
		 */
		public static function get_strings( $config_id = 'global' ) {

			$translation_strings = array(
				'background-color'      => esc_attr__( 'Background Color', 'i-one' ),
				'background-image'      => esc_attr__( 'Background Image', 'i-one' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'i-one' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'i-one' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'i-one' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'i-one' ),
				'inherit'               => esc_attr__( 'Inherit', 'i-one' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'i-one' ),
				'cover'                 => esc_attr__( 'Cover', 'i-one' ),
				'contain'               => esc_attr__( 'Contain', 'i-one' ),
				'background-size'       => esc_attr__( 'Background Size', 'i-one' ),
				'fixed'                 => esc_attr__( 'Fixed', 'i-one' ),
				'scroll'                => esc_attr__( 'Scroll', 'i-one' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'i-one' ),
				'left-top'              => esc_attr__( 'Left Top', 'i-one' ),
				'left-center'           => esc_attr__( 'Left Center', 'i-one' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'i-one' ),
				'right-top'             => esc_attr__( 'Right Top', 'i-one' ),
				'right-center'          => esc_attr__( 'Right Center', 'i-one' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'i-one' ),
				'center-top'            => esc_attr__( 'Center Top', 'i-one' ),
				'center-center'         => esc_attr__( 'Center Center', 'i-one' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'i-one' ),
				'background-position'   => esc_attr__( 'Background Position', 'i-one' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'i-one' ),
				'on'                    => esc_attr__( 'ON', 'i-one' ),
				'off'                   => esc_attr__( 'OFF', 'i-one' ),
				'all'                   => esc_attr__( 'All', 'i-one' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'i-one' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'i-one' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'i-one' ),
				'greek'                 => esc_attr__( 'Greek', 'i-one' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'i-one' ),
				'khmer'                 => esc_attr__( 'Khmer', 'i-one' ),
				'latin'                 => esc_attr__( 'Latin', 'i-one' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'i-one' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'i-one' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'i-one' ),
				'arabic'                => esc_attr__( 'Arabic', 'i-one' ),
				'bengali'               => esc_attr__( 'Bengali', 'i-one' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'i-one' ),
				'tamil'                 => esc_attr__( 'Tamil', 'i-one' ),
				'telugu'                => esc_attr__( 'Telugu', 'i-one' ),
				'thai'                  => esc_attr__( 'Thai', 'i-one' ),
				'serif'                 => _x( 'Serif', 'font style', 'i-one' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'i-one' ),
				'monospace'             => _x( 'Monospace', 'font style', 'i-one' ),
				'font-family'           => esc_attr__( 'Font Family', 'i-one' ),
				'font-size'             => esc_attr__( 'Font Size', 'i-one' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'i-one' ),
				'line-height'           => esc_attr__( 'Line Height', 'i-one' ),
				'font-style'            => esc_attr__( 'Font Style', 'i-one' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'i-one' ),
				'top'                   => esc_attr__( 'Top', 'i-one' ),
				'bottom'                => esc_attr__( 'Bottom', 'i-one' ),
				'left'                  => esc_attr__( 'Left', 'i-one' ),
				'right'                 => esc_attr__( 'Right', 'i-one' ),
				'center'                => esc_attr__( 'Center', 'i-one' ),
				'justify'               => esc_attr__( 'Justify', 'i-one' ),
				'color'                 => esc_attr__( 'Color', 'i-one' ),
				'add-image'             => esc_attr__( 'Add Image', 'i-one' ),
				'change-image'          => esc_attr__( 'Change Image', 'i-one' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'i-one' ),
				'add-file'              => esc_attr__( 'Add File', 'i-one' ),
				'change-file'           => esc_attr__( 'Change File', 'i-one' ),
				'no-file-selected'      => esc_attr__( 'No File Selected', 'i-one' ),
				'remove'                => esc_attr__( 'Remove', 'i-one' ),
				'select-font-family'    => esc_attr__( 'Select a font-family', 'i-one' ),
				'variant'               => esc_attr__( 'Variant', 'i-one' ),
				'subsets'               => esc_attr__( 'Subset', 'i-one' ),
				'size'                  => esc_attr__( 'Size', 'i-one' ),
				'height'                => esc_attr__( 'Height', 'i-one' ),
				'spacing'               => esc_attr__( 'Spacing', 'i-one' ),
				'ultra-light'           => esc_attr__( 'Ultra-Light 100', 'i-one' ),
				'ultra-light-italic'    => esc_attr__( 'Ultra-Light 100 Italic', 'i-one' ),
				'light'                 => esc_attr__( 'Light 200', 'i-one' ),
				'light-italic'          => esc_attr__( 'Light 200 Italic', 'i-one' ),
				'book'                  => esc_attr__( 'Book 300', 'i-one' ),
				'book-italic'           => esc_attr__( 'Book 300 Italic', 'i-one' ),
				'regular'               => esc_attr__( 'Normal 400', 'i-one' ),
				'italic'                => esc_attr__( 'Normal 400 Italic', 'i-one' ),
				'medium'                => esc_attr__( 'Medium 500', 'i-one' ),
				'medium-italic'         => esc_attr__( 'Medium 500 Italic', 'i-one' ),
				'semi-bold'             => esc_attr__( 'Semi-Bold 600', 'i-one' ),
				'semi-bold-italic'      => esc_attr__( 'Semi-Bold 600 Italic', 'i-one' ),
				'bold'                  => esc_attr__( 'Bold 700', 'i-one' ),
				'bold-italic'           => esc_attr__( 'Bold 700 Italic', 'i-one' ),
				'extra-bold'            => esc_attr__( 'Extra-Bold 800', 'i-one' ),
				'extra-bold-italic'     => esc_attr__( 'Extra-Bold 800 Italic', 'i-one' ),
				'ultra-bold'            => esc_attr__( 'Ultra-Bold 900', 'i-one' ),
				'ultra-bold-italic'     => esc_attr__( 'Ultra-Bold 900 Italic', 'i-one' ),
				'invalid-value'         => esc_attr__( 'Invalid Value', 'i-one' ),
				'add-new'           	=> esc_attr__( 'Add new', 'i-one' ),
				'row'           		=> esc_attr__( 'row', 'i-one' ),
				'limit-rows'            => esc_attr__( 'Limit: %s rows', 'i-one' ),
				'open-section'          => esc_attr__( 'Press return or enter to open this section', 'i-one' ),
				'back'                  => esc_attr__( 'Back', 'i-one' ),
				'reset-with-icon'       => sprintf( esc_attr__( '%s Reset', 'i-one' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
				'text-align'            => esc_attr__( 'Text Align', 'i-one' ),
				'text-transform'        => esc_attr__( 'Text Transform', 'i-one' ),
				'none'                  => esc_attr__( 'None', 'i-one' ),
				'capitalize'            => esc_attr__( 'Capitalize', 'i-one' ),
				'uppercase'             => esc_attr__( 'Uppercase', 'i-one' ),
				'lowercase'             => esc_attr__( 'Lowercase', 'i-one' ),
				'initial'               => esc_attr__( 'Initial', 'i-one' ),
				'select-page'           => esc_attr__( 'Select a Page', 'i-one' ),
				'open-editor'           => esc_attr__( 'Open Editor', 'i-one' ),
				'close-editor'          => esc_attr__( 'Close Editor', 'i-one' ),
				'switch-editor'         => esc_attr__( 'Switch Editor', 'i-one' ),
				'hex-value'             => esc_attr__( 'Hex Value', 'i-one' ),
			);

			$config = apply_filters( 'kirki/config', array() );

			if ( isset( $config['i18n'] ) ) {
				$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
			}

			return apply_filters( 'kirki/' . $config_id . '/l10n', $translation_strings );

		}
	}
}
