<?php
/**
 * Handels both the activation and update functionality.
 *
 * @package Extender
 */

/**
 * Build the auto-update class.
 *
 * This auto-update class is from a blog post over at wp.tutsplus.com by Abid Omar
 * Here is a direct link to the post in case you'd like to check it out:
 * http://wp.tutsplus.com/tutorials/plugins/a-guide-to-the-wordpress-http-api-automatic-plugin-updates/
 */
class genesis_extender_autoupdate
{
    /**
     * The plugin current version
     * @var string
     */
    public $current_version;

    /**
     * The plugin remote update path
     * @var string
     */
    public $update_path;

    /**
     * Plugin Slug (plugin_directory/plugin_file.php)
     * @var string
     */
    public $plugin_slug;

    /**
     * Plugin name (plugin_file)
     * @var string
     */
    public $slug;

    /**
     * Initialize a new instance of the WordPress Auto-Update class
     * @param string $current_version
     * @param string $update_path
     * @param string $plugin_slug
     */
    function __construct($current_version, $update_path, $plugin_slug)
    {
        // Set the class public variables
        $this->current_version = $current_version;
        $this->update_path = $update_path;
        $this->plugin_slug = $plugin_slug;
        list ($t1, $t2) = explode('/', $plugin_slug);
        $this->slug = str_replace('.php', '', $t2);

        // define the alternative API for updating checking
        add_filter('pre_set_site_transient_update_plugins', array(&$this, 'check_update'));

        // Define the alternative response for information checking
        add_filter('plugins_api', array(&$this, 'check_info'), 10, 3);
    }

    /**
     * Add our self-hosted autoupdate plugin to the filter transient
     *
     * @param $transient
     * @return object $ transient
     */
    public function check_update($transient)
    {
        if (empty($transient->checked)) {
            return $transient;
        }

        // Get the remote version
        $remote_version = $this->getRemote_version();

        // If a newer version is available, add the update
        if (version_compare($this->current_version, $remote_version, '<')) {
            $obj = new stdClass();
            $obj->slug = $this->slug;
            $obj->new_version = $remote_version;
            $obj->url = $this->update_path;
            $obj->package = $this->update_path;
            $transient->response[$this->plugin_slug] = $obj;
        }
        return $transient;
    }

    /**
     * Add our self-hosted description to the filter
     *
     * @param boolean $false
     * @param array $action
     * @param object $arg
     * @return bool|object
     */
    public function check_info($false, $action, $arg)
    {
        if ($arg->slug === $this->slug) {
            $information = $this->getRemote_information();
            return $information;
        }
        return false;
    }

    /**
     * Return the remote version
     * @return string $remote_version
     */
    public function getRemote_version()
    {
        $request = wp_remote_post($this->update_path, array('body' => array('action' => 'version')));
        if (!is_wp_error($request) || wp_remote_retrieve_response_code($request) === 200) {
            return $request['body'];
        }
        return false;
    }

    /**
     * Get information about the remote version
     * @return bool|object
     */
    public function getRemote_information()
    {
        $request = wp_remote_post($this->update_path, array('body' => array('action' => 'info')));
        if (!is_wp_error($request) || wp_remote_retrieve_response_code($request) === 200) {
            return unserialize($request['body']);
        }
        return false;
    }

    /**
     * Return the status of the plugin licensing
     * @return boolean $remote_license
     */
    public function getRemote_license()
    {
        $request = wp_remote_post($this->update_path, array('body' => array('action' => 'license')));
        if (!is_wp_error($request) || wp_remote_retrieve_response_code($request) === 200) {
            return $request['body'];
        }
        return false;
    }
}

add_action( 'admin_init', 'genesis_extender_update' );
/**
 * Perform Genesis Extender updates based on current version number.
 *
 * @since 1.0
 */
function genesis_extender_update()
{
	// Don't do anything if we're on the latest version.
	if( version_compare( get_option( 'genesis_extender_version_number' ), GENEXT_VERSION, '>=' ) )
		return;

	// Update to Genesis Extender 1.0.1
	if( version_compare( get_option( 'genesis_extender_version_number' ), '1.0.1', '<' ) )
	{		
		$genesis_extender_settings = get_option( 'genesis_extender_settings' );
		$new_genesis_extender_settings = array(
			'include_column_class_styles' => 0,
			'minify_stylesheets' => 1
		);
		$genesis_extender_settings = wp_parse_args( $new_genesis_extender_settings, $genesis_extender_settings );
		update_option( 'genesis_extender_settings', $genesis_extender_settings );
		
		update_option( 'genesis_extender_version_number', '1.0.1' );
	}

	// Update to Genesis Extender 1.0.2
	if( version_compare( get_option( 'genesis_extender_version_number' ), '1.0.2', '<' ) )
	{	
		update_option( 'genesis_extender_version_number', '1.0.2' );
	}

	// Update to Genesis Extender 1.0.3
	if( version_compare( get_option( 'genesis_extender_version_number' ), '1.0.3', '<' ) )
	{	
		update_option( 'genesis_extender_version_number', '1.0.3' );
	}

	// Update to Genesis Extender 1.1
	if( version_compare( get_option( 'genesis_extender_version_number' ), '1.1', '<' ) )
	{		
		$genesis_extender_settings = get_option( 'genesis_extender_settings' );
		$new_genesis_extender_settings = array(
			'fancy_dropdowns_active' => 0,
			'html_five_active' => 0
		);
		$genesis_extender_settings = wp_parse_args( $new_genesis_extender_settings, $genesis_extender_settings );
		update_option( 'genesis_extender_settings', $genesis_extender_settings );
		
		update_option( 'genesis_extender_version_number', '1.1' );
	}

	// Update to Genesis Extender 1.2
	if( version_compare( get_option( 'genesis_extender_version_number' ), '1.2', '<' ) )
	{
		$genesis_extender_settings = get_option( 'genesis_extender_settings' );
		$new_genesis_extender_settings = array(
			'include_inpost_cpt_all' => 0
		);
		$genesis_extender_settings = wp_parse_args( $new_genesis_extender_settings, $genesis_extender_settings );
		update_option( 'genesis_extender_settings', $genesis_extender_settings );

		$do_shortcode_find = array( '[', ']' );
		$do_shortcode_replace = array( '&lt;?php echo do_shortcode( \'[', ']\' ); ?&gt;' );
		$updated_genesis_extender_hook_boxes = array();
		$genesis_extender_hook_boxes = get_option( 'genesis_extender_custom_hook_boxes' );
		foreach( $genesis_extender_hook_boxes as $key => $value )
		{
			$value['hook_textarea'] = str_replace( $do_shortcode_find, $do_shortcode_replace, $value['hook_textarea'] );
			$updated_genesis_extender_hook_boxes[$key] = $value;
		}
		update_option( 'genesis_extender_custom_hook_boxes', $updated_genesis_extender_hook_boxes );
		
		update_option( 'genesis_extender_version_number', '1.2' );
	}

	// Update to Genesis Extender 1.2.1
	if( version_compare( get_option( 'genesis_extender_version_number' ), '1.2.1', '<' ) )
	{	
		update_option( 'genesis_extender_version_number', '1.2.1' );
	}

	// Update to Genesis Extender 1.2.2
	if( version_compare( get_option( 'genesis_extender_version_number' ), '1.2.2', '<' ) )
	{	
		update_option( 'genesis_extender_version_number', '1.2.2' );
	}
	
	// Finish the update sequence.
	genesis_extender_activate();
}

/**
 * Perform Genesis Extender activation actions.
 *
 * @since 1.0
 */
function genesis_extender_activate()
{	
	if( !get_option( 'genesis_extender_version_number' ) )
	{
		update_option( 'genesis_extender_version_number', '1.2.2' );
	}
	
	if( !get_option( 'genesis_extender_settings' ) )
	{
		update_option( 'genesis_extender_settings', genesis_extender_settings_defaults() );
	}
	if( !get_option( 'genesis_extender_custom_css' ) )
	{
		update_option( 'genesis_extender_custom_css', genesis_extender_custom_css_options_defaults() );
	}
	if( !get_option( 'genesis_extender_custom_functions' ) )
	{
		update_option( 'genesis_extender_custom_functions', genesis_extender_custom_functions_options_defaults() );
	}
	if( !get_option( 'genesis_extender_custom_js' ) )
	{
		update_option( 'genesis_extender_custom_js', genesis_extender_custom_js_options_defaults() );
	}
	if( !get_option( 'genesis_extender_custom_templates' ) )
	{
		update_option( 'genesis_extender_custom_templates', array() );
	}
	if( !get_option( 'genesis_extender_custom_labels' ) )
	{
		update_option( 'genesis_extender_custom_labels', array() );
	}
	if( !get_option( 'genesis_extender_custom_conditionals' ) )
	{
		update_option( 'genesis_extender_custom_conditionals', array() );
	}
	if( !get_option( 'genesis_extender_custom_widget_areas' ) )
	{
		update_option( 'genesis_extender_custom_widget_areas', array() );
	}
	if( !get_option( 'genesis_extender_custom_hook_boxes' ) )
	{
		update_option( 'genesis_extender_custom_hook_boxes', array() );
	}
	if( !is_dir( CHILD_DIR . '/my-templates' ) )
	{
		mkdir( CHILD_DIR . '/my-templates' );
		@chmod( CHILD_DIR . '/my-templates', 0755 );
	}
	if( !is_dir( genesis_extender_get_stylesheet_location( 'path', $root = true ) ) )
	{
		mkdir( genesis_extender_get_stylesheet_location( 'path', $root = true ) );
		@chmod( genesis_extender_get_stylesheet_location( 'path', $root = true ), 0755 );
	}
	if( !is_dir( genesis_extender_get_stylesheet_location( 'path', $root = true ) . 'plugin' ) )
	{
		mkdir( genesis_extender_get_stylesheet_location( 'path', $root = true ) . 'plugin' );
		@chmod( genesis_extender_get_stylesheet_location( 'path', $root = true ) . 'plugin', 0755 );
	}
	if( !is_dir( genesis_extender_get_stylesheet_location( 'path' ) . 'default-images' ) )
	{
		mkdir( genesis_extender_get_stylesheet_location( 'path' ) . 'default-images' );
		@chmod( genesis_extender_get_stylesheet_location( 'path' ) . 'default-images', 0755 );
		
		mkdir( genesis_extender_get_stylesheet_location( 'path' ) . 'default-images/post-formats' );
		@chmod( genesis_extender_get_stylesheet_location( 'path' ) . 'default-images/post-formats', 0755 );

		$handle = opendir( GENEXT_PATH . 'images' );
		while( false !== ( $file = readdir( $handle ) ) )
		{
			$ext = strtolower( substr( strrchr( $file, '.' ), 1 ) );
			if( $ext == 'jpg' || $ext == 'gif' || $ext == 'png' )
			{
				copy( GENEXT_PATH . 'images/' . $file, genesis_extender_get_stylesheet_location( 'path' ) . 'default-images/' . $file );
			}
		}
		closedir( $handle );
		
		$handle2 = opendir( GENEXT_PATH . 'images/post-formats' );
		while( false !== ( $file = readdir( $handle2 ) ) )
		{
			$ext = strtolower( substr( strrchr( $file, '.' ), 1 ) );
			if( $ext == 'jpg' || $ext == 'gif' || $ext == 'png' )
			{
				copy( GENEXT_PATH . 'images/post-formats/' . $file, genesis_extender_get_stylesheet_location( 'path' ) . 'default-images/post-formats/' . $file );
			}
		}
		closedir( $handle2 );
	}
	if( !is_dir( genesis_extender_get_stylesheet_location( 'path' ) . 'images' ) )
	{
		mkdir( genesis_extender_get_stylesheet_location( 'path' ) . 'images' );
		@chmod( genesis_extender_get_stylesheet_location( 'path' ) . 'images', 0755 );
	}
	if( !is_dir( genesis_extender_get_stylesheet_location( 'path' ) . 'images/adminthumbnails' ) )
	{
		mkdir( genesis_extender_get_stylesheet_location( 'path' ) . 'images/adminthumbnails' );
		@chmod( genesis_extender_get_stylesheet_location( 'path' ) . 'images/adminthumbnails', 0755);
	}
	if( !is_dir( genesis_extender_get_stylesheet_location( 'path' ) . 'tmp' ) )
	{
		mkdir( genesis_extender_get_stylesheet_location( 'path' ) . 'tmp' );
		@chmod( genesis_extender_get_stylesheet_location( 'path' ) . 'tmp', 0755 );
	}
	if( !is_dir( genesis_extender_get_stylesheet_location( 'path' ) . 'tmp/images' ) )
	{
		mkdir( genesis_extender_get_stylesheet_location( 'path' ) . 'tmp/images' );
		@chmod( genesis_extender_get_stylesheet_location( 'path' ) . 'tmp/images', 0755 );
	}
	if( !is_dir( genesis_extender_get_stylesheet_location( 'path' ) . 'tmp/images/adminthumbnails' ) )
	{
		mkdir( genesis_extender_get_stylesheet_location( 'path' ) . 'tmp/images/adminthumbnails' );
		@chmod( genesis_extender_get_stylesheet_location( 'path' ) . 'tmp/images/adminthumbnails', 0755);
	}

	genesis_extender_write_files();
	genesis_extender_create_custom_functions_file();

	$genesis_extender_folders = array( genesis_extender_get_stylesheet_location( 'path' ), genesis_extender_get_stylesheet_location( 'path' ) . 'images', genesis_extender_get_stylesheet_location( 'path' ) . 'adminthumbnails', genesis_extender_get_stylesheet_location( 'path' ) . 'tmp', genesis_extender_get_stylesheet_location( 'path' ) . 'tmp/images', genesis_extender_get_stylesheet_location( 'path' ) . 'tmp/images/adminthumbnails' );
	$genesis_extender_unwritable = false;
	foreach( $genesis_extender_folders as $genesis_extender_folder )
	{
		if( is_dir( $genesis_extender_folder ) && !genesis_extender_writable( $genesis_extender_folder ) )
		{
			$genesis_extender_unwritable = true;
		}
	}
	if( $genesis_extender_unwritable )
	{
		wp_redirect( admin_url( 'admin.php?page=genesis-extender-settings&notice=genesis-extender-unwritable' ) );
	}
}

//end lib/functions/genesis-extender-update.php