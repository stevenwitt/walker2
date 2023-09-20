<?php
/**
 * Plugin Name: Build Trigger for Gatsby
 * Description: This plugin will takes webhook url and trigger a build of Gatsby.
 * Version: 1.0.1
 * Author: Zestard Technologies
 * Author URI: https://profiles.wordpress.org/zestardtechnologies/
 * Developer: Zestard Technologies
 * Developer E-Mail: info@zestard.com
 * Text Domain: zt-build-trigger-for-gatsby
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Basic plugin definitions
 *
 * @package Build Trigger for Gatsby
 * @since 1.0
 */
if ( !defined( 'ZT_BTFG_VERSION' ) ) {
	define( 'ZT_BTFG_VERSION', '1.0.1' ); // Version of plugin
}

if ( !defined( 'ZT_BTFG_FILE' ) ) {
	define( 'ZT_BTFG_FILE', __FILE__ ); // Plugin File
}

if ( !defined( 'ZT_BTFG_DIR' ) ) {
	define( 'ZT_BTFG_DIR', dirname( __FILE__ ) ); // Plugin dir
}

if ( !defined( 'ZT_BTFG_BASENAME' ) ) {
	define( 'ZT_BTFG_BASENAME', plugin_basename( __FILE__ ) ); // Plugin base name
}

if ( !defined( 'ZT_BTFG_URL' ) ) {
	define( 'ZT_BTFG_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}

if ( !defined( 'ZT_BTFG_META_PREFIX' ) ) {
	define( 'ZT_BTFG_META_PREFIX', 'ztbtfg_' ); // Plugin metabox prefix
}

if ( !defined( 'ZT_BTFG_PREFIX' ) ) {
	define( 'ZT_BTFG_PREFIX', 'ztbtfg' ); // Plugin prefix
}

if ( !defined( 'ZT_BTFG_TEXTDOMAIN' ) ) {
	define( 'ZT_BTFG_TEXTDOMAIN', 'zt-build-trigger-for-gatsby' ); // Plugin text-domain
}

/**
 * Initialize the main class
 */
if ( !function_exists( 'ZT_BTFG' ) ) {

	//Initialize all the things.
	require_once( ZT_BTFG_DIR . '/inc/class.' . ZT_BTFG_PREFIX . '.php' );

	if ( is_admin() ) {
		require_once( ZT_BTFG_DIR . '/inc/admin/class.' . ZT_BTFG_PREFIX . '.admin.php' );
		require_once( ZT_BTFG_DIR . '/inc/admin/class.' . ZT_BTFG_PREFIX . '.admin.action.php' );
	}

}