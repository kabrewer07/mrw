<?php

add_action( 'genesis_meta', 'signature_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function signature_home_genesis_meta() {

	if ( is_active_sidebar( 'slider' ) || is_active_sidebar( 'property-search' ) || is_active_sidebar( 'properties' ) || is_active_sidebar( 'welcome' ) || is_active_sidebar( 'communities' ) || is_active_sidebar( 'featured-bottom-left' ) || is_active_sidebar( 'featured-bottom-right' ) ) {
	
		remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_loop', 'signature_home_loop_helper' );
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	}
}

/**
 * Display widget content for homepage sections.
 *
 */
function signature_home_loop_helper() {

		if ( is_active_sidebar( 'slider' ) || is_active_sidebar( 'property-search' ) ) {
		


			
			echo '<div class="featured-top" id="featured-header" style="width:100%; max-width:920px; min-height:200px; height:auto;">';
	

 

			
				echo '<div class="slider">';
				dynamic_sidebar( 'slider' );
				echo '</div><!-- end .slider -->';

				echo '<div class="property-quick-search">';
				dynamic_sidebar( 'property-search' );
				echo '</div><!-- end .property-quick-search -->';

			echo '</div><!-- end .featured-top -->';	
		
		}
		
		if ( is_active_sidebar( 'welcome' ) ) {
			echo '<div class="welcome">';
			genesis_structural_wrap( 'welcome' );
			dynamic_sidebar( 'welcome' );
			genesis_structural_wrap( 'welcome', 'close' );
			echo '</div><!-- end .welcome -->';
		}
		
		if ( is_active_sidebar( 'communities' ) ) {
			echo '<div class="communities">';
			echo '<h4>' . __( 'Communities', 'signature' ) . '</h4>';
			dynamic_sidebar( 'communities' );
			echo '</div><!-- end .communities -->';
		}
		echo '<div style="width:100%;max-width:920px;height:auto;margin:auto;margin-top:20px;"><iframe src="//player.vimeo.com/video/113641523?title=0&amp;byline=0&amp;portrait=0" style="width:100%;height:520px;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
		
		if ( is_active_sidebar( 'properties' ) ) {
			echo '<div class="properties">';
			dynamic_sidebar( 'properties' );
			echo '</div><!-- end .properties -->';
		}		
				
		
		
		if ( is_active_sidebar( 'featured-bottom-left' ) || is_active_sidebar( 'featured-bottom-right' ) ) {
		
			echo '<div class="featured-bottom">';
		
				echo '<div class="featured-bottom-left">';
				dynamic_sidebar( 'featured-bottom-left' );
				echo '</div><!-- end .featured-bottom-left -->';

				echo '<div class="featured-bottom-right">';
				dynamic_sidebar( 'featured-bottom-right' );
				echo '</div><!-- end .featured-bottom-right -->';

			echo '</div><!-- end .featured-bottom -->';	
		
		}
		
}

genesis();