jQuery(document).ready(function($) {

	var fadeoutFunc = setInterval(fadeOutMessages, 8000);

	function fadeOutMessages() {
		jQuery('#ztbtfg_manual_btn').nextAll().fadeOut(1000);		
	}

	function myStopFunction() {
		clearInterval(fadeoutFunc);
	}

	if ( jQuery('#ztbtfg_manual_trigger').is(':checked') ) {
		jQuery('#ztbtfg_manual_btn').removeAttr('disabled');		
	}

	jQuery(document).on('change', '#ztbtfg_builds_per_day', function(event) {
		event.preventDefault();
		/* Act on the event */
		var max_build = jQuery(this).val();
		jQuery('#ztbtfg_notification_limit').attr('max', max_build);
	});
	
	jQuery(document).on('change', '#ztbtfg_manual_trigger', function(event) {
		event.preventDefault();
		/* Act on the event */		
		jQuery('#ztbtfg_manual_btn').removeAttr('disabled');		
	});

	jQuery(document).on('change', '#ztbtfg_auto_trigger', function(event) {
		event.preventDefault();
		/* Act on the event */
		jQuery('#ztbtfg_manual_btn').attr('disabled', 'disabled');
	});

	jQuery(document).on('click', '#ztbtfg_manual_btn', function(event) {
		event.preventDefault();
		/* Act on the event */

		jQuery.ajax({
			url: ztbtfg_frontend_ajax_object.ajax_url,
			type: 'POST',			
			data: { action: 'ztbtfg_trigger_manual_build' },
			success: function(response) {
				var obj_response = JSON.parse(response);
				
				if (obj_response.last_trigger_date) {
					jQuery('#ztbtfg_last_trigger_date').text(obj_response.last_trigger_date);
				}

				if (obj_response.build_count) {
					jQuery('#ztbtfg_build_count').text(obj_response.build_count);
				}

				if (obj_response.message) {
					jQuery('#ztbtfg_manual_btn').parent().append(obj_response.message);
				}

				if (obj_response.error) {
					jQuery('#ztbtfg_manual_btn').parent().append(obj_response.error);
				}								
			},
			error: function(xhr, textStatus, errorThrown) {
				//called when there is an error
			}
		});
		
	});

});