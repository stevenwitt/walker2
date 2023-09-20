<?php
/**
 * ZT_BTFG_Admin Class
 *
 * Handles the Admin functionality.
 *
 * @package WordPress
 * @subpackage Build Trigger in Gatsby Admin
 * @since 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( !class_exists( 'ZT_BTFG_Admin' ) ) {

	/**
	 * The ZT_BTFG_Admin Class
	 */
	class ZT_BTFG_Admin {

		var $action = null,
		    $filter = null;

		public $options;

		function __construct() {

			//action to create settings
			add_action( 'admin_init', array($this, 'ztbtfg_settings_init') );

			add_action( 'admin_enqueue_scripts',  array( $this, 'action__init' ) );

			$this->options = get_option( 'ztbtfg_settings' );

		}

		/*
		   ###     ######  ######## ####  #######  ##    ##  ######
		  ## ##   ##    ##    ##     ##  ##     ## ###   ## ##    ##
		 ##   ##  ##          ##     ##  ##     ## ####  ## ##
		##     ## ##          ##     ##  ##     ## ## ## ##  ######
		######### ##          ##     ##  ##     ## ##  ####       ##
		##     ## ##    ##    ##     ##  ##     ## ##   ### ##    ##
		##     ##  ######     ##    ####  #######  ##    ##  ######
		*/

		//create settings
		function ztbtfg_settings_init() {

			if ( false === ( $ztbtfg_global_time = get_transient( 'ztbtfg_global_time' ) ) ) {
				set_transient( 'ztbtfg_global_time', '1', 86400 );

				if(!get_option('ztbtfg_build_count')){
				    add_option( 'ztbtfg_build_count', 0 );
				} else {
					update_option( 'ztbtfg_build_count', 0 );
				}
			}

		    register_setting( 'zt_build_trigger_for_gatsby', 'ztbtfg_settings' );
		    add_settings_section(
		        'ztbtfg_section',
		        esc_html__( 'Settings', ZT_BTFG_TEXTDOMAIN ),
		        '',
		        'zt_build_trigger_for_gatsby'
		    );
		    add_settings_field(
		        'ztbtfg_webhook_url',
		        esc_html__( 'Insert Webhook URL', ZT_BTFG_TEXTDOMAIN ),
		        array($this, 'ztbtfg_webhook_url_render'),
		        'zt_build_trigger_for_gatsby',
		        'ztbtfg_section'
		    );
		    add_settings_field(
		        'ztbtfg_trigger_type',
		        esc_html__( 'Select Trigger type', ZT_BTFG_TEXTDOMAIN ),
		        array($this, 'ztbtfg_trigger_type_render'),
		        'zt_build_trigger_for_gatsby',
		        'ztbtfg_section'
		    );
		    add_settings_field(
		        'ztbtfg_manual_btn',
		        esc_html__( 'Click this button to run webhook URL manually', ZT_BTFG_TEXTDOMAIN ),
		        array($this, 'ztbtfg_manual_btn_render'),
		        'zt_build_trigger_for_gatsby',
		        'ztbtfg_section'
		    );
		    add_settings_field(
		        'ztbtfg_builds_per_day',
		        esc_html__( 'Allow maximum number of build per day', ZT_BTFG_TEXTDOMAIN ),
		        array($this, 'ztbtfg_builds_per_day_render'),
		        'zt_build_trigger_for_gatsby',
		        'ztbtfg_section'
		    );
		    add_settings_field(
		        'ztbtfg_notification_limit',
		        esc_html__( 'Notification limit for builds', ZT_BTFG_TEXTDOMAIN ),
		        array($this, 'ztbtfg_notification_limit_render'),
		        'zt_build_trigger_for_gatsby',
		        'ztbtfg_section'
		    );
		    add_settings_field(
		        'ztbtfg_require_notification',
		        esc_html__( 'Require custom notification?', ZT_BTFG_TEXTDOMAIN ),
		        array($this, 'ztbtfg_require_notification_render'),
		        'zt_build_trigger_for_gatsby',
		        'ztbtfg_section'
		    );
		}

		function action__init() {
			wp_register_script( ZT_BTFG_PREFIX . '_admin_js', ZT_BTFG_URL.'assets/js/admin.js', array(), ZT_BTFG_VERSION, true);
            wp_enqueue_script( ZT_BTFG_PREFIX . '_admin_js' );         

            wp_localize_script( ZT_BTFG_PREFIX . '_admin_js', 'ztbtfg_frontend_ajax_object', array(
					'ajax_url' => admin_url( 'admin-ajax.php' )
				)
			);
		}

		/*
		######## #### ##       ######## ######## ########   ######
		##        ##  ##          ##    ##       ##     ## ##    ##
		##        ##  ##          ##    ##       ##     ## ##
		######    ##  ##          ##    ######   ########   ######
		##        ##  ##          ##    ##       ##   ##         ##
		##        ##  ##          ##    ##       ##    ##  ##    ##
		##       #### ########    ##    ######## ##     ##  ######
		*/


		/*
		######## ##     ## ##    ##  ######  ######## ####  #######  ##    ##  ######
		##       ##     ## ###   ## ##    ##    ##     ##  ##     ## ###   ## ##    ##
		##       ##     ## ####  ## ##          ##     ##  ##     ## ####  ## ##
		######   ##     ## ## ## ## ##          ##     ##  ##     ## ## ## ##  ######
		##       ##     ## ##  #### ##          ##     ##  ##     ## ##  ####       ##
		##       ##     ## ##   ### ##    ##    ##     ##  ##     ## ##   ### ##    ##
		##        #######  ##    ##  ######     ##    ####  #######  ##    ##  ######
		*/

		//create settings callback function for webhook url
		function ztbtfg_webhook_url_render() {							  
		    echo '<input type="url" name="ztbtfg_settings[ztbtfg_webhook_url]"
		    value="' . $this->options["ztbtfg_webhook_url"] . '" class="regular-text code" placeholder="Enter your webhook URL here...">';

		    echo '<p class="description">' . esc_html__( 'Above URL will be provided by your hosting company as a custom webhook', ZT_BTFG_TEXTDOMAIN ) . '</p><br>';
		}

		//create settings callback function for trigger type
		function ztbtfg_trigger_type_render() {			
		?>
		<input type="radio" name="ztbtfg_settings[ztbtfg_trigger_type]" id="ztbtfg_manual_trigger" value="Manual" <?php echo ($this->options["ztbtfg_trigger_type"] == 'Manual') ? 'checked' : '' ?>><label for="ztbtfg_manual_trigger">Manual</label>
		<input type="radio" name="ztbtfg_settings[ztbtfg_trigger_type]" id="ztbtfg_auto_trigger" value="Automatic" <?php echo ($this->options["ztbtfg_trigger_type"] == 'Automatic') ? 'checked' : '' ?> disabled><label for="ztbtfg_auto_trigger" style="color: #8c9d97;">Automatic (Coming soon...)</label>
		<?php		    
		}

		//create settings callback function for manual trigger button
		function ztbtfg_manual_btn_render() {
		    echo '<input type="button" id="ztbtfg_manual_btn" name="ztbtfg_settings[ztbtfg_manual_btn]"
		    value="Manual Trigger" class="button button-primary" disabled>';
		}
		
		//create settings callback function for manual trigger button
		function ztbtfg_builds_per_day_render() {
		?>
		    <input type="number" id="ztbtfg_builds_per_day" name="ztbtfg_settings[ztbtfg_builds_per_day]" class="code" min="1" max="1000" value="<?php echo ($this->options["ztbtfg_builds_per_day"] != 0) ? $this->options["ztbtfg_builds_per_day"] : 25; ?>">
		<?php
		}

		//create settings callback function for manual trigger button
		function ztbtfg_notification_limit_render() {
		?>
		    <input type="number" id="ztbtfg_notification_limit" name="ztbtfg_settings[ztbtfg_notification_limit]" class="code" min="1" max="1000" value="<?php echo ($this->options["ztbtfg_notification_limit"] != 0) ? $this->options["ztbtfg_notification_limit"] : 25; ?>">
		<?php
		}

		//create settings callback function for manual trigger button
		function ztbtfg_require_notification_render() {
		?>
		<input type="checkbox" name="ztbtfg_settings[ztbtfg_require_notification]"
		    value="1" class="regular-text code" <?php echo ($this->options["ztbtfg_require_notification"] == '1') ? 'checked' : '' ?>>
		<?php
		    echo '<p class="description">' . esc_html__( 'Click here to recieve notification when build limit exceeds', ZT_BTFG_TEXTDOMAIN ) . '</p><br>';
		}
	}

	add_action( 'plugins_loaded', function() {
		ZT_BTFG()->admin = new ZT_BTFG_Admin;
	} );
}
