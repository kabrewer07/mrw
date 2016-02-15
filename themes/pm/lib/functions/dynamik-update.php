<?php
/**
 * Handels both the activation and update functionality.
 *
 * @package Dynamik
 */
 
if( !empty( $_POST['dynamik_update_check'] ) && $_POST['dynamik_update_check'] == 'trigger' )
{
	delete_transient( 'dynamik-gen-update' );
	set_site_transient( 'update_themes', null );
}
// Debug Auto-Update.
//set_site_transient( 'update_themes', null );

add_filter( 'pre_site_transient_update_themes', 'dynamik_update_push' );
add_filter( 'site_transient_update_themes', 'dynamik_update_push' );
add_filter( 'transient_update_themes', 'dynamik_update_push' );
/**
 * Update Dynamik to latest version.
 *
 * @since 1.0
 * @return latest Dynamik files.
 */
function dynamik_update_push( $data )
{
	$dynamik_update = dynamik_update_check();
	
	if( $dynamik_update )
	{
		if( version_compare( CHILD_THEME_VERSION, $dynamik_update['new_version'], '>=' ) )
			return $data;
		
		$data->response['dynamik-gen'] = $dynamik_update;
	}

	return $data;
}

/**
 * Check to see if a new version of Catayst is available.
 *
 * @since 1.0
 * @return either response or transient.
 */
function dynamik_update_check()
{
	global $wp_version;
	// Debug Auto-Update.
	//delete_transient( 'dynamik-gen-update' );
	$dynamik_transient = get_transient( 'dynamik-gen-update' );
	
	if( $dynamik_transient == false )
	{
		$api_url = 'http://api.cobaltapps.com/dynamik-update/';
		
		// Start checking for an update
		$send_for_check = array(
			'body' => array(
				'action' => 'theme_update', 
				'request' => array(
					'slug' => 'dynamik-gen',
					'version' => CHILD_THEME_VERSION
				)
			),
			'user-agent' => 'WordPress/' . $wp_version . '; ' . home_url()
		);

		$raw_response = wp_remote_post( $api_url, $send_for_check );
		
		if( !is_wp_error( $raw_response ) && ( $raw_response['response']['code'] == 200 ) && is_serialized( $raw_response['body'] ) )
		{
			$response = unserialize( $raw_response['body'] );			
		}
		else
		{
			set_transient( 'dynamik-gen-update', array( 'new_version' => CHILD_THEME_VERSION ), 60*60*24 ); // store for 24 hours
		}
		
		if( !empty( $response ) )
		{
			set_transient( 'dynamik-gen-update', $response, 60*60*24); // store for 24 hours			
			return $response;
		}
	}
	else
	{
		return $dynamik_transient;
	}
}

add_action( 'admin_notices', 'dynamik_update_nag' );
/**
 * Build Dynamik Update Nag HTML.
 *
 * @since 1.0
 */
function dynamik_update_nag()
{
	$user = wp_get_current_user();
	
	if( get_the_author_meta( 'disable_dynamik_gen_update_nag', $user->ID ) )
		return;
		
	$dynamik_update = dynamik_update_check();
		
	if( !current_user_can( 'update_themes' ) )
		return false;
	
	if( version_compare( CHILD_THEME_VERSION, $dynamik_update['new_version'], '>=' ) || empty( $dynamik_update['package'] ) )
		return false;
	
	$update_url = wp_nonce_url( 'update.php?action=upgrade-theme&amp;theme=dynamik-gen', 'upgrade-theme_dynamik-gen' );
	$update_onclick = __( 'All Dynamik core files will be overwritten. Are you sure you want to continue?', 'dynamik' );
	
	echo '<div id="update-nag">';
	printf( __( '<strong>Dynamik %s</strong> is Available! <a href="%s" onclick="return confirm(\'%s\' );">Update Now</a> or <a href="%s">Find Out More</a>.', 'dynamik' ), esc_html( $dynamik_update['new_version'] ), $update_url, esc_js( $update_onclick ), esc_url( $dynamik_update['url'] ), esc_html( $dynamik_update['new_version'] ) );
	echo '</div>';
}

add_filter( 'update_theme_complete_actions', 'dynamik_update_action_links', 10, 2);
/**
 * Build update action link HTML.
 *
 * @since 1.0
 * @return Dynamik update finalize link.
 */
function dynamik_update_action_links( $actions, $theme )
{
	if( $theme != 'dynamik-gen' )
		return $actions;
		
	return '<a href="' . admin_url( 'admin.php?page=dynamik-settings' ) . '">'. __( 'Click here to complete your Dynamik Update', 'dynamik' ) .'</a>';	
}

add_action( 'admin_notices', 'dynamik_updated_notice' );
/**
 * Build "Dynamik Update Success" notice HTML.
 *
 * @since 1.0
 */
function dynamik_updated_notice()
{
	if( !isset( $_GET['page'] ) || $_GET['page'] != 'dynamik-settings' )
		return;
	
	if( isset( $_GET['updated'] ) && $_GET['updated'] == 'dynamik-gen' )
	{
		echo '<div id="update-nag">' . sprintf( __( 'Congratulations! Your update to <strong>Dynamik %s</strong> is complete.', 'dynamik' ), get_option( 'dynamik_gen_version_number' ) ) . '</div>';
	}
}

add_action( 'admin_init', 'dynamik_update' );
/**
 * Perform Dynamik updates based on current version number.
 *
 * @since 1.0
 */
function dynamik_update()
{
	// Don't do anything if we're on the latest version.
	if( version_compare( get_option( 'dynamik_gen_version_number' ), CHILD_THEME_VERSION, '>=' ) )
		return;

	// Update to Dynamik 1.0.1
	if( version_compare( get_option( 'dynamik_gen_version_number' ), '1.0.1', '<' ) )
	{		
		$dynamik_settings = get_option( 'dynamik_gen_theme_settings' );
		$new_dynamik_settings = array(
			'custom_image_size_one_mode' => '',
			'custom_image_size_one_width' => '',
			'custom_image_size_one_height' => '',
			'custom_image_size_two_mode' => '',
			'custom_image_size_two_width' => '',
			'custom_image_size_two_height' => '',
			'custom_image_size_three_mode' => '',
			'custom_image_size_three_width' => '',
			'custom_image_size_three_height' => '',
			'custom_image_size_four_mode' => '',
			'custom_image_size_four_width' => '',
			'custom_image_size_four_height' => '',
			'custom_image_size_five_mode' => '',
			'custom_image_size_five_width' => '',
			'custom_image_size_five_height' => ''
		);
		$dynamik_settings = wp_parse_args( $new_dynamik_settings, $dynamik_settings );
		update_option( 'dynamik_gen_theme_settings', $dynamik_settings );
		
		update_option( 'dynamik_gen_version_number', '1.0.1' );
	}

	// Update to Dynamik 1.0.2
	if( version_compare( get_option( 'dynamik_gen_version_number' ), '1.0.2', '<' ) )
	{
		$custom_functions = get_option( 'dynamik_gen_custom_functions' );
		$new_custom_functions = array(
			'custom_functions_effect_admin' => 0
		);
		$custom_functions = wp_parse_args( $new_custom_functions, $custom_functions );
		update_option( 'dynamik_gen_custom_functions', $custom_functions );

		update_option( 'dynamik_gen_version_number', '1.0.2' );
	}

	// Update to Dynamik 1.0.3
	if( version_compare( get_option( 'dynamik_gen_version_number' ), '1.0.3', '<' ) )
	{
		$dynamik_design_settings = get_option( 'dynamik_gen_design_options' );
		$new_dynamik_settings = array(
			'comment_author_link_color' => '0D72C7',
			'comment_author_link_hover_color' => '0D72C7',
			'comment_author_link_underline' => 'On Hover',
			'comment_author_link_u' => 1
		);
		$dynamik_design_settings = wp_parse_args( $new_dynamik_settings, $dynamik_design_settings );
		update_option( 'dynamik_gen_design_options', $dynamik_design_settings );

		update_option( 'dynamik_gen_version_number', '1.0.3' );
	}

	// Update to Dynamik 1.0.4
	if( version_compare( get_option( 'dynamik_gen_version_number' ), '1.0.4', '<' ) )
	{
		update_option( 'dynamik_gen_version_number', '1.0.4' );
	}

	// Update to Dynamik 1.1
	if( version_compare( get_option( 'dynamik_gen_version_number' ), '1.1', '<' ) )
	{
		$dynamik_settings = get_option( 'dynamik_gen_theme_settings' );
		$new_dynamik_settings = array(
			'fancy_dropdowns_active' => 1,
			'html_five_active' => 0
		);
		$dynamik_settings = wp_parse_args( $new_dynamik_settings, $dynamik_settings );
		update_option( 'dynamik_gen_theme_settings', $dynamik_settings );

		$dynamik_design_settings = get_option( 'dynamik_gen_design_options' );
		$new_dynamik_design_settings = array(
			'comment_form_allowed_tags_font_size' => '14',
			'comment_form_allowed_tags_font_color' => '888888',
			'comment_form_allowed_tags_font_css' => '',
			'comment_form_allowed_tags_bg_type' => 'color',
			'comment_form_allowed_tags_bg_no_color' => ( !$defaults && !empty( $import['comment_form_allowed_tags_bg_no_color'] ) ) ? 1 : 0,
			'comment_form_allowed_tags_bg_color' => 'F5F5F5',
			'comment_form_allowed_tags_bg_image' => '',
			'comment_form_allowed_tags_border_thickness' => '1',
			'comment_form_allowed_tags_border_style' => 'solid',
			'comment_form_allowed_tags_border_color' => 'DDDDDD',
			'comment_form_allowed_tags_margin_top' => '10',
			'comment_form_allowed_tags_margin_bottom' => '20',
			'comment_form_allowed_tags_padding_top' => '20',
			'comment_form_allowed_tags_padding_right' => '20',
			'comment_form_allowed_tags_padding_bottom' => '20',
			'comment_form_allowed_tags_padding_left' => '20',
			'comment_form_allowed_tags_font_u' => 'u',
			'comment_form_allowed_tags_px_em' => 'px'
		);
		$dynamik_design_settings = wp_parse_args( $new_dynamik_design_settings, $dynamik_design_settings );
		update_option( 'dynamik_gen_design_options', $dynamik_design_settings );

		$new_font_type_settings = array(
			'comment_form_allowed_tags' => 'Arial, sans-serif'
		);
		$dynamik_design_settings['font_type'] = wp_parse_args( $new_font_type_settings, $dynamik_design_settings['font_type'] );

		update_option( 'dynamik_gen_version_number', '1.1' );
	}

	// Update to Dynamik 1.2
	if( version_compare( get_option( 'dynamik_gen_version_number' ), '1.2', '<' ) )
	{
		$dynamik_settings = get_option( 'dynamik_gen_theme_settings' );
		$new_dynamik_settings = array(
			'include_inpost_cpt_all' => 0
		);
		$dynamik_settings = wp_parse_args( $new_dynamik_settings, $dynamik_settings );
		update_option( 'dynamik_gen_theme_settings', $dynamik_settings );

		$dynamik_responsive_settings = get_option( 'dynamik_gen_responsive_options' );
		$new_dynamik_responsive_settings = array(
			'vertical_toggle_button_styles' => '.mobile-primary-toggle,
.mobile-secondary-toggle {
	width: 70px;
	margin: 0 auto;
	padding: 6px 10px;
	padding: 0.428571429rem 0.714285714rem;
	font-size: 11px;
	font-size: 0.785714286rem;
	line-height: 1.428571429;
	font-weight: normal;
	color: #7c7c7c;
	text-align: center;
	background-color: #e6e6e6;
	background-repeat: repeat-x;
	background-image: -moz-linear-gradient(top, #f4f4f4, #e6e6e6);
	background-image: -ms-linear-gradient(top, #f4f4f4, #e6e6e6);
	background-image: -webkit-linear-gradient(top, #f4f4f4, #e6e6e6);
	background-image: -o-linear-gradient(top, #f4f4f4, #e6e6e6);
	background-image: linear-gradient(top, #f4f4f4, #e6e6e6);
	border: 1px solid #d2d2d2;
	border-radius: 3px;
	box-shadow: 0 1px 2px rgba(64, 64, 64, 0.1);
	cursor: pointer;
	display: none;
}
.mobile-primary-toggle:hover,
.mobile-secondary-toggle:hover {
	color: #5e5e5e;
	background-color: #ebebeb;
	background-repeat: repeat-x;
	background-image: -moz-linear-gradient(top, #f9f9f9, #ebebeb);
	background-image: -ms-linear-gradient(top, #f9f9f9, #ebebeb);
	background-image: -webkit-linear-gradient(top, #f9f9f9, #ebebeb);
	background-image: -o-linear-gradient(top, #f9f9f9, #ebebeb);
	background-image: linear-gradient(top, #f9f9f9, #ebebeb);
}
.mobile-primary-toggle:active,
.mobile-secondary-toggle:active {
	color: #757575;
	background-color: #e1e1e1;
	background-repeat: repeat-x;
	background-image: -moz-linear-gradient(top, #ebebeb, #e1e1e1);
	background-image: -ms-linear-gradient(top, #ebebeb, #e1e1e1);
	background-image: -webkit-linear-gradient(top, #ebebeb, #e1e1e1);
	background-image: -o-linear-gradient(top, #ebebeb, #e1e1e1);
	background-image: linear-gradient(top, #ebebeb, #e1e1e1);
	box-shadow: inset 0 0 8px 2px #c6c6c6, 0 1px 0 0 #f4f4f4;
	border: none;
}'
		);
		$dynamik_responsive_settings = wp_parse_args( $new_dynamik_responsive_settings, $dynamik_responsive_settings );
		update_option( 'dynamik_gen_responsive_options', $dynamik_responsive_settings );

		$do_shortcode_find = array( '[', ']' );
		$do_shortcode_replace = array( '&lt;?php echo do_shortcode( \'[', ']\' ); ?&gt;' );
		$updated_dynamik_hook_boxes = array();
		$dynamik_hook_boxes = get_option( 'dynamik_gen_custom_hook_boxes' );
		foreach( $dynamik_hook_boxes as $key => $value )
		{
			$value['hook_textarea'] = str_replace( $do_shortcode_find, $do_shortcode_replace, $value['hook_textarea'] );
			$updated_dynamik_hook_boxes[$key] = $value;
		}
		update_option( 'dynamik_gen_custom_hook_boxes', $updated_dynamik_hook_boxes );

		update_option( 'dynamik_gen_version_number', '1.2' );
	}

	// Update to Dynamik 1.2.1
	if( version_compare( get_option( 'dynamik_gen_version_number' ), '1.2.1', '<' ) )
	{
		update_option( 'dynamik_gen_version_number', '1.2.1' );
	}

	// Update to Dynamik 1.2.2
	if( version_compare( get_option( 'dynamik_gen_version_number' ), '1.2.2', '<' ) )
	{
		update_option( 'dynamik_gen_version_number', '1.2.2' );
	}
	
	// Finish the update sequence.
	delete_transient( 'dynamik-gen-update' );
	dynamik_activate();
	wp_redirect( admin_url( 'admin.php?page=dynamik-settings&updated=dynamik-gen' ) );
}

/**
 * Perform Dynamik activation actions.
 *
 * @since 1.0
 */
function dynamik_activate()
{
	global $dynamik_folders;
	
	if( !get_option( 'dynamik_gen_version_number' ) )
	{
		update_option( 'dynamik_gen_version_number', '1.2.2' );
	}
	
	if( !get_option( 'dynamik_gen_theme_settings' ) )
	{
		update_option( 'dynamik_gen_theme_settings', dynamik_theme_settings_defaults() );
	}
	if( !get_option( 'dynamik_gen_design_options' ) )
	{
		update_option( 'dynamik_gen_design_options', dynamik_design_options_defaults() );
	}
	if( !get_option( 'dynamik_gen_responsive_options' ) )
	{
		update_option( 'dynamik_gen_responsive_options', dynamik_responsive_options_defaults() );
	}
	if( !get_option( 'dynamik_gen_design_snapshot_options' ) )
	{
		dynamik_design_snapshot_update( $activation = true );
	}
	if( !get_option( 'dynamik_gen_custom_css' ) )
	{
		update_option( 'dynamik_gen_custom_css', dynamik_custom_css_options_defaults() );
	}
	if( !get_option( 'dynamik_gen_custom_functions' ) )
	{
		update_option( 'dynamik_gen_custom_functions', dynamik_custom_functions_options_defaults() );
	}
	if( !get_option( 'dynamik_gen_custom_js' ) )
	{
		update_option( 'dynamik_gen_custom_js', dynamik_custom_js_options_defaults() );
	}
	if( !get_option( 'dynamik_gen_custom_templates' ) )
	{
		update_option( 'dynamik_gen_custom_templates', array() );
	}
	if( !get_option( 'dynamik_gen_custom_labels' ) )
	{
		update_option( 'dynamik_gen_custom_labels', array() );
	}
	if( !get_option( 'dynamik_gen_custom_conditionals' ) )
	{
		update_option( 'dynamik_gen_custom_conditionals', array() );
	}
	if( !get_option( 'dynamik_gen_custom_widget_areas' ) )
	{
		update_option( 'dynamik_gen_custom_widget_areas', array() );
	}
	if( !get_option( 'dynamik_gen_custom_hook_boxes' ) )
	{
		update_option( 'dynamik_gen_custom_hook_boxes', array() );
	}
	if( !is_dir( CHILD_DIR . '/my-templates' ) )
	{
		mkdir( CHILD_DIR . '/my-templates' );
		@chmod( CHILD_DIR . '/my-templates', 0755 );
	}
	if( !is_dir( dynamik_get_stylesheet_location( 'path', $root = true ) ) )
	{
		mkdir( dynamik_get_stylesheet_location( 'path', $root = true ) );
		@chmod( dynamik_get_stylesheet_location( 'path', $root = true ), 0755 );
	}
	if( !is_dir( dynamik_get_stylesheet_location( 'path', $root = true ) . 'theme' ) )
	{
		mkdir( dynamik_get_stylesheet_location( 'path', $root = true ) . 'theme' );
		@chmod( dynamik_get_stylesheet_location( 'path', $root = true ) . 'theme', 0755 );
	}
	if( !is_dir( dynamik_get_stylesheet_location( 'path' ) . 'default-images' ) )
	{
		mkdir( dynamik_get_stylesheet_location( 'path' ) . 'default-images' );
		@chmod( dynamik_get_stylesheet_location( 'path' ) . 'default-images', 0755 );
		
		mkdir( dynamik_get_stylesheet_location( 'path' ) . 'default-images/post-formats' );
		@chmod( dynamik_get_stylesheet_location( 'path' ) . 'default-images/post-formats', 0755 );

		$handle = opendir( CHILD_DIR . '/images' );
		while( false !== ( $file = readdir( $handle ) ) )
		{
			$ext = strtolower( substr( strrchr( $file, '.' ), 1 ) );
			if( $ext == 'jpg' || $ext == 'gif' || $ext == 'png' )
			{
				copy( CHILD_DIR . '/images/' . $file, dynamik_get_stylesheet_location( 'path' ) . 'default-images/' . $file );
			}
		}
		closedir( $handle );
		
		$handle2 = opendir( CHILD_DIR . '/images/post-formats' );
		while( false !== ( $file = readdir( $handle2 ) ) )
		{
			$ext = strtolower( substr( strrchr( $file, '.' ), 1 ) );
			if( $ext == 'jpg' || $ext == 'gif' || $ext == 'png' )
			{
				copy( CHILD_DIR . '/images/post-formats/' . $file, dynamik_get_stylesheet_location( 'path' ) . 'default-images/post-formats/' . $file );
			}
		}
		closedir( $handle2 );
	}
	$handle3 = opendir( CHILD_DIR . '/images' );
	while( false !== ( $file = readdir( $handle3 ) ) )
	{
		if( $file == 'icon-plus.png' || $file == 'icon-plus-white.png' )
		{
			copy( CHILD_DIR . '/images/' . $file, dynamik_get_stylesheet_location( 'path' ) . 'default-images/' . $file );
		}
	}
	closedir( $handle3 );
	if( !is_dir( dynamik_get_stylesheet_location( 'path' ) . 'images' ) )
	{
		mkdir( dynamik_get_stylesheet_location( 'path' ) . 'images' );
		@chmod( dynamik_get_stylesheet_location( 'path' ) . 'images', 0755 );
	}
	if( !is_dir( dynamik_get_stylesheet_location( 'path' ) . 'images/adminthumbnails' ) )
	{
		mkdir( dynamik_get_stylesheet_location( 'path' ) . 'images/adminthumbnails' );
		@chmod( dynamik_get_stylesheet_location( 'path' ) . 'images/adminthumbnails', 0755);
	}
	if( !is_dir( dynamik_get_stylesheet_location( 'path' ) . 'tmp' ) )
	{
		mkdir( dynamik_get_stylesheet_location( 'path' ) . 'tmp' );
		@chmod( dynamik_get_stylesheet_location( 'path' ) . 'tmp', 0755 );
	}
	if( !is_dir( dynamik_get_stylesheet_location( 'path' ) . 'tmp/images' ) )
	{
		mkdir( dynamik_get_stylesheet_location( 'path' ) . 'tmp/images' );
		@chmod( dynamik_get_stylesheet_location( 'path' ) . 'tmp/images', 0755 );
	}
	if( !is_dir( dynamik_get_stylesheet_location( 'path' ) . 'tmp/images/adminthumbnails' ) )
	{
		mkdir( dynamik_get_stylesheet_location( 'path' ) . 'tmp/images/adminthumbnails' );
		@chmod( dynamik_get_stylesheet_location( 'path' ) . 'tmp/images/adminthumbnails', 0755);
	}

	dynamik_write_files();
	dynamik_create_custom_functions_file();
	
	$dynamik_unwritable = false;
	foreach( $dynamik_folders as $dynamik_folder )
	{
		if( is_dir( $dynamik_folder ) && !dynamik_writable( $dynamik_folder ) )
		{
			$dynamik_unwritable = true;
		}
	}
	if( $dynamik_unwritable )
	{
		wp_redirect( admin_url( 'admin.php?page=dynamik-settings&notice=dynamik-unwritable' ) );
	}
}

//end lib/functions/dynamik-update.php