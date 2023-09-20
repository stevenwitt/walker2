<?php
/**
 * ZT_BTFG_Admin_Action Class
 *
 * Handles the admin functionality.
 *
 * @package WordPress
 * @subpackage Build Trigger for Gatsby Admin Actions
 * @since 1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( !class_exists( 'ZT_BTFG_Admin_Action' ) ){

	/**
	 *  The ZT_BTFG_Admin_Action Class
	 */
	class ZT_BTFG_Admin_Action {

		function __construct()  {

			//action to trigger option in sidebar menu
			add_action( 'admin_menu', array($this, 'ztbtfg_menu') );

			//action to call function on post save
			add_action( 'save_post', array($this, 'ztbtfg_triggers_webhook_on_save_post'), 10, 3 );

			//action to add function with ajax 
			add_action( 'wp_ajax_ztbtfg_trigger_manual_build', array($this, 'ztbtfg_trigger_manual_build') );
			add_action( 'wp_ajax_nopriv_ztbtfg_trigger_manual_build', array($this, 'ztbtfg_trigger_manual_build') );

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

		//triggers option in sidebar menu
		function ztbtfg_menu() {
		    add_submenu_page( 'tools.php', esc_html__( 'Build Trigger for Gatsby', ZT_BTFG_TEXTDOMAIN ), esc_html__( 'Build Trigger for Gatsby', ZT_BTFG_TEXTDOMAIN ), 'manage_options', 'build-trigger-for-gatsby', array($this, 'ztbtfg_options_page') );
		}

		//Trigger the Webhook each time a Post or Page is updated
		function ztbtfg_triggers_webhook_on_save_post( $post_id, $post, $update ) {

			$ztbtfg_settings = get_option( 'ztbtfg_settings' );
			$max_build_per_day = $ztbtfg_settings['ztbtfg_builds_per_day'];
			$get_build_count = get_option( 'ztbtfg_build_count' );

			//check trigger type
			if ( $ztbtfg_settings['ztbtfg_trigger_type'] == 'Manual' ) {
				return;
			}

			//check max build per day limit not exceeds
			if ( $get_build_count >= $max_build_per_day ) {
				return;
			}

			//prevent to call webhook url twice
			if( ! ( wp_is_post_revision( $post_id) || wp_is_post_autosave( $post_id ) ) ) {
				//for these status webhook will not call
				$status_array = array( 'pending', 'draft', 'auto-draft', 'trash' );
			    if ( in_array($post->post_status, $status_array) ) {
			    	return;
			    }

			    //check whether post is publish or update
			    if ( $update == true || $update == false ) {		    	

				    if (
				        ! array_key_exists( 'ztbtfg_webhook_url', $ztbtfg_settings ) ||
				        empty( $ztbtfg_settings['ztbtfg_webhook_url'] )
				    ) {
				        return false;
				    }

				    $webhook_url = esc_url( $ztbtfg_settings['ztbtfg_webhook_url'] );

				    $response = wp_remote_post( $webhook_url );			

				    if ( is_wp_error( $response ) ) {
				        $error_message = $response->get_error_message();
				        error_log( "Headless Trigger: " . $error_message, 0 );
				    } else {
				        update_option( 'ztbtfg_last_trigger', time() );
				        
				        $build_count = get_option( 'ztbtfg_build_count' );
				        $count = (int)$build_count + 1;		        	
				        update_option( 'ztbtfg_build_count', $count );

				        //do email
		       			$this->do_email();
				    }
			    }			
			} // end if

		}

		function ztbtfg_trigger_manual_build() {
			$ztbtfg_settings = get_option( 'ztbtfg_settings' );
			$max_build_per_day = $ztbtfg_settings['ztbtfg_builds_per_day'];
			$get_build_count = get_option( 'ztbtfg_build_count' );
			$last_trigger = get_option( 'ztbtfg_last_trigger' );

			//check trigger type
			if ( $ztbtfg_settings['ztbtfg_trigger_type'] == 'Automatic' ) {
				return;
			}

			//check max build per day limit not exceeds
			if ( $get_build_count >= $max_build_per_day ) {
				//return;
				$response = array(
		        				'last_trigger_date' => date( 'l jS \of F Y h:i:s A', $last_trigger ),
		        				'message' => '<p style="color: red;">'.esc_html( 'You have reached to your Build limit. So, you can not run build today. Try again tomorrow.').'</p>'
		        			);
				echo json_encode($response);
				exit();

			}			

		    if (
		        ! array_key_exists( 'ztbtfg_webhook_url', $ztbtfg_settings ) ||
		        empty( $ztbtfg_settings['ztbtfg_webhook_url'] )
		    ) {
		        return false;
		    }

		    $webhook_url = esc_url( $ztbtfg_settings['ztbtfg_webhook_url'] );

		    $response = wp_remote_post( $webhook_url );

		    if ( is_wp_error( $response ) ) {
		        $error_message = $response->get_error_message();
		        error_log( "Headless Trigger: " . $error_message, 0 );		        

		        $response = array(
		        				'last_trigger_date' => date( 'l jS \of F Y h:i:s A', $last_trigger ),
		        				'error' => '<p>'.$error_message.'</p>',
		        				'message' => '<p style="color: red;">'.esc_html( 'Could not run Webhook URL' ).'</p>'
		        			);

		    } else {
		        update_option( 'ztbtfg_last_trigger', time() );		        

		        $build_count = get_option( 'ztbtfg_build_count' );
				update_option( 'ztbtfg_build_count', (int)$build_count + 1 );
				$new_build_count = get_option( 'ztbtfg_build_count' );
		        
		        $response = array(
		        				'last_trigger_date' => date( 'l jS \of F Y h:i:s A', $last_trigger ),
		        				'build_count' => $new_build_count,
		        				'error' => '',
		        				'message' => '<p style="color: green;">'.esc_html( 'Webhook URL has been successfully executed by Manual trigger' ).'</p>'
		        			);	

		        //do email
		       	$this->do_email();
		    }		    

		    echo json_encode($response);
		    exit();
		}
		

		/*
		######## ##     ## ##    ##  ######  ######## ####  #######  ##    ##  ######
		##       ##     ## ###   ## ##    ##    ##     ##  ##     ## ###   ## ##    ##
		##       ##     ## ####  ## ##          ##     ##  ##     ## ####  ## ##
		######   ##     ## ## ## ## ##          ##     ##  ##     ## ## ## ##  ######
		##       ##     ## ##  #### ##          ##     ##  ##     ## ##  ####       ##
		##       ##     ## ##   ### ##    ##    ##     ##  ##     ## ##   ### ##    ##
		##        #######  ##    ##  ######     ##    ####  #######  ##    ##  ######
		*/

		//triggers option in sidebar menu callback function
		function ztbtfg_options_page() {
		    settings_errors();

		    echo '<h1>' . esc_html__( 'Build Trigger for Gatsby', ZT_BTFG_TEXTDOMAIN ) . '</h1>';		

		    $last_trigger = get_option( 'ztbtfg_last_trigger' );
		    $build_count = get_option( 'ztbtfg_build_count' );		    

		    if ( ! empty( $last_trigger ) && $build_count >= 0 ) {
		        echo esc_html__( 'Latest trigger: ', ZT_BTFG_TEXTDOMAIN );
		        echo '<strong id="ztbtfg_last_trigger_date">' . date( 'l jS \of F Y h:i:s A', $last_trigger ) . '</strong><br>';
		        echo esc_html__( 'No. of Build executed in last 24 hours: ', ZT_BTFG_TEXTDOMAIN );
		        echo '<strong id="ztbtfg_build_count">' . $build_count . '</strong>';
		    }

		    echo '<form action="options.php" method="post" id="zt_build_trigger_for_gatsby">';
		    settings_fields( 'zt_build_trigger_for_gatsby' );
		    do_settings_sections( 'zt_build_trigger_for_gatsby' );
		    submit_button();
		    echo '</form>';
		}


		function do_email() {
			$ztbtfg_settings = get_option( 'ztbtfg_settings' );
			$ztbtfg_notification_limit = $ztbtfg_settings['ztbtfg_notification_limit'];
			$get_build_count = get_option( 'ztbtfg_build_count' );

			if ( isset($ztbtfg_settings['ztbtfg_require_notification']) && $ztbtfg_settings['ztbtfg_require_notification'] == 1 ) {
				if ( $get_build_count >= $ztbtfg_notification_limit ) {

					$admin_users = get_users('role=Administrator');
				
					foreach ($admin_users as $ak => $av) {				
						$to = $av->data->user_email;
						$subject = esc_html__( 'Reminder about Build limit exceeds - Build Trigger for Gatsby', ZT_BTFG_TEXTDOMAIN );
						$body = '<p>Hi '.$av->data->display_name.',</p>';
						$body .= '<p>You reached to minimum limit of generating build per day on Gatsby site '.get_bloginfo("name").'. System will stop automatic generate build if limit reach to '.$ztbtfg_settings["ztbtfg_builds_per_day"].'.</p>';
						$body .= '<p><b>Note: Default limit for generating build in Gatsby is '.$ztbtfg_settings["ztbtfg_builds_per_day"].'.</b></p>';
						$body .= '<p>Thanks,<br>'.get_bloginfo("name").'</p>';				
						$headers = array('Content-Type: text/html; charset=UTF-8');						
						 
						wp_mail( $to, $subject, $body, $headers );
					}

				}	
			}			
		}
	}

	add_action( 'plugins_loaded' , function() {
		ZT_BTFG()->admin->action = new ZT_BTFG_Admin_Action;
	} );
}
