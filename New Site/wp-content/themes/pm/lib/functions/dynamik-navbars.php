<?php

/**
 * Build the various Dynamik Navbar functions.
 *
 * @package Dynamik
 */
 
/**
 * Determine whether or not to register the additional Responsive Dropdown Menus.
 */
if( dynamik_get_settings( 'responsive_enabled' ) &&
	( dynamik_get_responsive( 'navbar_media_query_default' ) == 'tablet_dropdown' ||
	dynamik_get_responsive( 'navbar_media_query_default' ) == 'mobile_dropdown' ) )
{
	add_theme_support( 'genesis-menus', array( 'primary' => __( 'Primary Navigation Menu', 'dynamik' ), 'secondary' => __( 'Secondary Navigation Menu', 'dynamik' ), 'primary_dropdown' => __( 'Responsive Dropdown 1', 'dynamik' ), 'secondary_dropdown' => __( 'Responsive Dropdown 2', 'dynamik' ) ) );
}

/**
 * Determine placement of Nav.
 */
if( dynamik_get_design_alt( 'nav1_location' ) == 'Above Header' )
{
	add_action( 'genesis_before_header', 'dynamik_mobile_nav_1' );
	remove_action( 'genesis_after_header', 'genesis_do_nav' );
	add_action( 'genesis_before_header', 'genesis_do_nav' );
	add_action( 'genesis_before_header', 'dynamik_dropdown_nav_1' );
}
else
{
	add_action( 'genesis_after_header', 'dynamik_mobile_nav_1', 9 );
	add_action( 'genesis_after_header', 'dynamik_dropdown_nav_1' );
}

/**
 * Determine placement of Subnav.
 */
if( dynamik_get_design_alt( 'nav2_location' ) == 'Above Header' )
{
	add_action( 'genesis_before_header', 'dynamik_mobile_nav_2' );
	remove_action( 'genesis_after_header', 'genesis_do_subnav' );
	add_action( 'genesis_before_header', 'genesis_do_subnav' );
	add_action( 'genesis_before_header', 'dynamik_dropdown_nav_2' );
}
else
{
	add_action( 'genesis_after_header', 'dynamik_mobile_nav_2', 9 );
	add_action( 'genesis_after_header', 'dynamik_dropdown_nav_2' );
}

/**
 * Build Nav Mobile Menu HTML.
 *
 * @since 1.2
 */
function dynamik_mobile_nav_1()
{
	if( !has_nav_menu( 'primary' ) ||
		!dynamik_get_settings( 'responsive_enabled' ) ||
		dynamik_get_responsive( 'navbar_media_query_default' ) != 'vertical_toggle' )
		return;
?>
	<h3 class="mobile-primary-toggle"><?php echo dynamik_get_responsive( 'dropdown_menu_1_text' ) ?></h3>
<?php
}

/**
 * Build Subnav Mobile Menu HTML.
 *
 * @since 1.2
 */
function dynamik_mobile_nav_2()
{
	if( !has_nav_menu( 'secondary' ) ||
		!dynamik_get_settings( 'responsive_enabled' ) ||
		dynamik_get_responsive( 'navbar_media_query_default' ) != 'vertical_toggle' )
		return;
?>
	<h3 class="mobile-secondary-toggle"><?php echo dynamik_get_responsive( 'dropdown_menu_2_text' ) ?></h3>
<?php
}
 
/**
 * Build Nav Dropdown HTML.
 *
 * @since 1.0
 */
function dynamik_dropdown_nav_1()
{
	if( !has_nav_menu( 'primary_dropdown' ) ||
		!dynamik_get_settings( 'responsive_enabled' ) ||
		( dynamik_get_responsive( 'navbar_media_query_default' ) != 'tablet_dropdown' &&
		dynamik_get_responsive( 'navbar_media_query_default' ) != 'mobile_dropdown' ) )
		return;
?>
	<div id="dropdown-nav-wrap">	
		<!-- dropdown nav for responsive design -->
		<nav id="dropdown-nav" role="navigation">
			<form id="dropdown-nav-form" action="" method="post">
			<select class="nav-chosen-select">
			<option value=""><?php echo dynamik_get_responsive( 'dropdown_menu_1_text' ) ?></option>
			<?php 
			$menu = wp_nav_menu( array( 'theme_location' => 'primary_dropdown', 'echo' => false ) );
			   if( preg_match_all( '#(<a [^<]+</a>)#', $menu,$matches ) )
			   {
				  $hrefpat = '/(href *= *([\"\']?)([^\"\' ]+)\2)/';
				  foreach( $matches[0] as $link )
				  {
					 if( preg_match( $hrefpat, $link,$hrefs ) )
					 {
						$href = $hrefs[3];
					 }
					 if( preg_match( '#>([^<]+)<#', $link,$names ) )
					 {
						$name = $names[1];
					 }
					 echo "<option value=\"$href\">$name</option>";
				  }
			   }				
			?>
			</select>
			</form>
		</nav><!-- #dropdown-nav -->
		<!-- /end dropdown nav -->
	</div>
<?php
}

/**
 * Build Subnav Dropdown HTML.
 *
 * @since 1.0
 */
function dynamik_dropdown_nav_2()
{
	if( !has_nav_menu( 'secondary_dropdown' ) ||
		!dynamik_get_settings( 'responsive_enabled' ) ||
		( dynamik_get_responsive( 'navbar_media_query_default' ) != 'tablet_dropdown' &&
		dynamik_get_responsive( 'navbar_media_query_default' ) != 'mobile_dropdown' ) )
		return;
?>
	<div id="dropdown-subnav-wrap">	
		<!-- dropdown nav for responsive design -->
		<nav id="dropdown-subnav" role="navigation">
			<form id="dropdown-subnav-form" action="" method="post">
			<select class="subnav-chosen-select">
			<option value=""><?php echo dynamik_get_responsive( 'dropdown_menu_2_text' ) ?></option>
			<?php 
			$menu = wp_nav_menu( array( 'theme_location' => 'secondary_dropdown', 'echo' => false ) );
			   if( preg_match_all( '#(<a [^<]+</a>)#', $menu,$matches ) )
			   {
				  $hrefpat = '/(href *= *([\"\']?)([^\"\' ]+)\2)/';
				  foreach( $matches[0] as $link )
				  {
					 if( preg_match( $hrefpat, $link,$hrefs ) )
					 {
						$href = $hrefs[3];
					 }
					 if( preg_match( '#>([^<]+)<#', $link,$names ) )
					 {
						$name = $names[1];
					 }
					 echo "<option value=\"$href\">$name</option>";
				  }
			   }				
			?>
			</select>
			</form>
		</nav><!-- #dropdown-subnav -->
		<!-- /end dropdown subnav -->
	</div>
<?php
}

//end lib/functions/dynamik-navbar.php