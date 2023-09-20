<?php
/**
 * ZT_BTFG Class
 *
 * Handles the plugin functionality.
 *
 * @package WordPress
 * @subpackage Build Trigger for Gatsby
 * @since 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( !class_exists( 'ZT_BTFG' ) ) {

	/**
	 * The main ZT_BTFG class
	 */
	class ZT_BTFG {

		private static $_instance = null;

		var $admin = null,
		    $front = null;

		public static function instance() {

			if ( is_null( self::$_instance ) )
				self::$_instance = new self();

			return self::$_instance;
		}

		function __construct() {

		}

	}
}

function ZT_BTFG() {
	return ZT_BTFG::instance();
}

ZT_BTFG();