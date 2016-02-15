<?php 
/*
Plugin Name: Genesis Extender
Version: 1.2.2
Plugin URI: http://genesis.extenderplugin.com/
Description: The ultimate Genesis Child Theme companion Plugin.
Author: The Catalyst Team
Author URI: http://catalysttheme.com/
License: GPLv2 or later
License URI: http://www.opensource.org/licenses/gpl-license.php
*/

/**
 * @package Extender
 */
 
/**
 * Define stuff.
 */
if( !defined( 'GENEXT_URL' ) )
	define( 'GENEXT_URL', plugin_dir_url( __FILE__ ) );
if( !defined( 'GENEXT_PATH' ) )
	define( 'GENEXT_PATH', plugin_dir_path( __FILE__ ) );
if( !defined( 'GENEXT_BASENAME' ) )
	define( 'GENEXT_BASENAME', plugin_basename( __FILE__ ) );
if( defined( 'PARENT_THEME_NAME' ) && PARENT_THEME_NAME == 'Genesis' )
	define( 'GENESIS_ACTIVE', true );

define( 'GENEXT_FILE', __FILE__ );
define( 'GENEXT_VERSION', '1.2.2' );

/**
 * Localization.
 */
load_plugin_textdomain( 'extender', false, dirname( plugin_basename( __FILE__ ) ) . '/lib/languages' );

/**
 * Include Genesis Extender files.
 */
require_once( GENEXT_PATH . 'lib/init.php' );

/**
 * Run if Genesis Extender was just activated.
 */
if( is_admin() )
{
	register_activation_hook( __FILE__, 'genesis_extender_activate' );

	add_action( 'admin_init', 'genesis_extender_require_genesis_framework' );
	/**
	 * Make sure the Genesis Framework is active and if it is not, deactivate this Plugin.
	 *
	 * @since 1.0
	 */
	function genesis_extender_require_genesis_framework()
	{
		$plugin = plugin_basename( __FILE__ );
		$plugin_data = get_plugin_data( __FILE__, false );
	 
		if( !defined( 'PARENT_THEME_NAME' ) || PARENT_THEME_NAME != 'Genesis' )
		{
			if( is_plugin_active( $plugin ) )
			{
				deactivate_plugins( $plugin );
				wp_die( "'" . $plugin_data['Name'] . "' requires the Genesis Framework! Deactivating Plugin.<br /><br />Back to <a href='" . admin_url() . "plugins.php'>Plugins page</a>." );
			}
		}
	}

	add_action( 'init', 'genesis_extender_activate_au' );
	/**
	 * Load the auto-update class.
	 *
	 * @since 1.0
	 */
	function genesis_extender_activate_au()
	{
	    $genext_plugin_current_version = '1.2.2';
	    $genext_plugin_remote_path = 'http://api.cobaltapps.com/extender-update/update.php';
	    $genext_plugin_slug = plugin_basename( __FILE__ );
	    new genesis_extender_autoupdate( $genext_plugin_current_version, $genext_plugin_remote_path, $genext_plugin_slug );
	}
}