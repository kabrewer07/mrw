<?php

$role_object = get_role('editor');
$role_object->add_cap('edit_theme_options');


/** Start the engine */
require_once( get_template_directory() . '/lib/init.php' );

/** Create additional color style options */
add_theme_support( 'genesis-style-selector', array( 'signature-silver' => 'Silver', 'signature-green' => 'Green', 'signature-red' => 'Red', 'signature-brown' => 'Brown', 'signature-blue' => 'Blue', 'signature-black' => 'Black' ) );

add_action( 'genesis_meta', 'signature_add_viewport_meta_tag' );
function signature_add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

add_filter('body_class','signature_color_body_class');

function signature_color_body_class($classes) {
	$color = "red";
	if(isset($_GET['color'])) $color = $_GET['color'];

	$classes[] = 'signature-'.$color;
	return $classes;
}





if(isset($_GET['background'])) add_filter('body_class','signature_background_body_class');
function signature_background_body_class($classes) {
	$background = $_GET['background'];
	$classes[] = 'signature-'.$background;
	return $classes;
}


/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', 'signature Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/themes/signature' );

$content_width = apply_filters( 'content_width', 600, 430, 920 );

/** Add new image sizes */
add_image_size( 'communities', 125, 80, TRUE );
add_image_size( 'featured', 100, 100, TRUE );
add_image_size( 'properties', 280, 200, TRUE );
add_image_size( 'slider', 590, 300, TRUE );

/** Add support for structural wraps */
add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner', 'connect', 'welcome', 'footer-widgets', 'footer', 'disclaimer' ) );

/** Add suport for custom background */
add_theme_support( 'custom-background', array() );


/** Add support for custom header */
add_theme_support( 'genesis-custom-header', array( 'width' => 920, 'height' => 400, 'textcolor' => '333' ) );

/** Reposition the secondary navigation */
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_before_header', 'genesis_do_subnav' );

add_action('genesis_before_header','signature_add_demo_nav');
function signature_add_demo_nav() {


	/** If menu is assigned to theme location, output */
	$menu_obj = wp_get_nav_menu_object( 'Demo' );
	if (!empty($menu_obj) ) {

		$args = array(
			'menu' => 'Demo',
			'container'      => '',
			'menu_class'     => 'menu demo-menu',
			'echo'           => 0,
		);

		$nav = wp_nav_menu( $args );

		$pattern = genesis_markup( '<nav class="demo">%2$s%1$s%3$s</nav>', '<div id="nav-demo">%2$s%1$s%3$s</div>', 0 );

		$nav_output = sprintf( $pattern, $nav, genesis_structural_wrap( 'nav', 'open', 0 ), genesis_structural_wrap( 'nav', 'close', 0 ) );

		echo apply_filters( 'genesis_do_nav', $nav_output, $nav, $args );

	}
}





/** Add top search after header */
add_action( 'genesis_after_header', 'signature_top_search' );
/**
 * Add top search widget area on Genesis after header hook
 *
 */
function signature_top_search() {
	if ( !is_front_page() && is_active_sidebar( 'top-search' ) ) {
		echo '<div class="top-search">';
		dynamic_sidebar( 'top-search' );
		echo '</div><!-- end .top-search -->';
	}	
}

/** Add support for 4 footer widgets */
add_theme_support( 'genesis-footer-widgets', 4 );

/** Add disclaimer below footer */
add_action( 'genesis_after', 'signature_disclaimer' );
/**
 * Add disclaimer widget area on Genesis after hook
 *
 */
function signature_disclaimer() {
	if ( is_active_sidebar( 'disclaimer' ) ) {
		echo '<div class="disclaimer">';
		genesis_structural_wrap( 'disclaimer' );
		dynamic_sidebar( 'disclaimer' );
		genesis_structural_wrap( 'disclaimer', 'close' );
		echo '</div><!-- end .disclaimer -->';
	}		
}

add_filter( 'signature_property_details', 'signature_property_details_filter' );
/**
 * Filter the property details array.
 *
 */
function signature_property_details_filter( $details ) {
	
	$details['col1'] = array( 
	    __( 'Price:', 'apl' ) => '_listing_price', 
	    __( 'Address:', 'apl' ) => '_listing_address', 
	    __( 'City:', 'apl' ) => '_listing_city', 
	    __( 'State:', 'apl' ) => '_listing_state', 
	    __( 'ZIP:', 'apl' ) => '_listing_zip' 
	);
	$details['col2'] = array( 
	    __( 'MLS #:', 'apl' ) => '_listing_mls', 
	    __( 'Square Feet:', 'apl' ) => '_listing_sqft', 
	    __( 'Bedrooms:', 'apl' ) => '_listing_bedrooms', 
	    __( 'Bathrooms:', 'apl' ) => '_listing_bathrooms', 
	    __( 'Basement:', 'apl' ) => '_listing_basement' 
	);
	
	return $details;
	
}

add_filter( 'signature_featured_listings_widget_loop', 'signature_featured_listings_widget_loop_filter' );
/**
 * Filter the loop output of the signature Featured Listings Widget.
 *
 */
function signature_featured_listings_widget_loop_filter( $loop ) {
	
	$loop = ''; /** initialze the $loop variable */

	$loop .= sprintf( '<a href="%s">%s</a>', get_permalink(), genesis_get_image( array( 'size' => 'properties' ) ) );

	$loop .= sprintf( '<span class="listing-price">%s</span>', genesis_get_custom_field('_listing_price') );
	$custom_text = genesis_get_custom_field( '_listing_text' );
	if( strlen( $custom_text ) )
		$loop .= sprintf( '<span class="listing-text">%s</span>', esc_html( $custom_text ) );
	$loop .= sprintf( '<span class="listing-address">%s</span>', genesis_get_custom_field('_listing_address') );
	$loop .= sprintf( '<span class="listing-city-state-zip">%s %s, %s</span>', genesis_get_custom_field('_listing_city'), genesis_get_custom_field('_listing_state'), genesis_get_custom_field('_listing_zip') );

	$loop .= sprintf( '<a href="%s" class="more-link">%s</a>', get_permalink(), __( 'View Listing', 'apl' ) );
	
	return $loop;
	
}

/** Register widget areas */
genesis_register_sidebar( array(
	'id'			=> 'top-search',
	'name'			=> __( 'Top Search', 'signature' ),
	'description'	=> __( 'This is the top search section.', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'slider',
	'name'			=> __( 'Slider', 'signature' ),
	'description'	=> __( 'This is the slider section.', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'property-search',
	'name'			=> __( 'Property Search', 'signature' ),
	'description'	=> __( 'This is the property search section.', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'connect',
	'name'			=> __( 'Connect', 'signature' ),
	'description'	=> __( 'This is the black bar with connect info', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'news',
	'name'			=> __( 'In the News', 'signature' ),
	'description'	=> __( 'This is the In the News section.', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'meet',
	'name'			=> __( 'Meet', 'signature' ),
	'description'	=> __( 'This is the meet section.', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'book',
	'name'			=> __( 'Book', 'signature' ),
	'description'	=> __( 'This is the book section.', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'testimonials',
	'name'			=> __( 'Testimonials', 'signature' ),
	'description'	=> __( 'This is the testimonials section.', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'properties',
	'name'			=> __( 'Properties', 'signature' ),
	'description'	=> __( 'This is the properties section.', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'featured-bottom-left',
	'name'			=> __( 'Featured Bottom Left', 'signature' ),
	'description'	=> __( 'This is the featured bottom left section.', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'featured-bottom-right',
	'name'			=> __( 'Featured Bottom Right', 'signature' ),
	'description'	=> __( 'This is the featured bottom right section.', 'signature' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'disclaimer',
	'name'			=> __( 'Disclaimer', 'signature' ),
	'description'	=> __( 'This is the disclaimer section.', 'signature' ),
) );


/**
 * Custom header callback.
 *
 * It outputs special CSS to the document head, modifying the look of the header
 * based on user input.
 *
 * @since 1.6.0
 */
 remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

function genesis_custom_header_style() {

	/** If no options set, don't waste the output. Do nothing. */
	if ( HEADER_IMAGE == get_header_image() )
		return;

	/** Header image CSS */
	//$logo = get_stylesheet_directory_uri().'/images/logo.png';
	$output = sprintf( '#featured-header { background: url(%s) no-repeat; background-size:cover; }', esc_url( get_header_image() ) );
	//$output .= sprintf( '#header #title-area { background: url(%s) no-repeat; }', esc_url( $logo ) );
	
	printf( '<style type="text/css">%s</style>', $output );

}

add_filter( 'stylesheet_uri', 'child_stylesheet_uri' );
/**
 * Cache bust the style.css reference.
 *
 */
function child_stylesheet_uri( $stylesheet_uri ) {
    return add_query_arg( 'v', filemtime( get_stylesheet_directory() . '/style.css' ), $stylesheet_uri );
}