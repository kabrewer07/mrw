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
		


			
			echo '<div class="featured-top" id="featured-header" style="width:100%; min-height:200px; height:auto;">';
	

 

			
				echo '<div class="slider">';
				dynamic_sidebar( 'slider' );
				echo '</div><!-- end .slider -->';

				echo '<div class="property-quick-search">';
				dynamic_sidebar( 'property-search' );
				echo '</div><!-- end .property-quick-search -->';

			echo '</div><!-- end .featured-top -->';	
		
		}
		
		if ( is_active_sidebar( 'connect' ) ) {
			echo '<div class="connect-info black-wrap"><div class="inner-wrap clearfix">';
			genesis_structural_wrap( 'connect' );
			dynamic_sidebar( 'connect' );
			genesis_structural_wrap( 'connect', 'close' );
			echo '</div></div><!-- end .connect-info -->';
		}
		
		if ( is_active_sidebar( 'news' ) ) {
			echo '<div class="news inner-wrap home-section">';
			genesis_structural_wrap( 'news' );
			dynamic_sidebar( 'news' );
			genesis_structural_wrap( 'news', 'close' );
			echo '</div><!-- end .news -->';
		}
		
		if ( is_active_sidebar( 'meet' ) ) {
			echo '<div class="meet inner-wrap home-section clearfix">';
			genesis_structural_wrap( 'meet' );
			dynamic_sidebar( 'meet' );
			genesis_structural_wrap( 'meet', 'close' );
			echo '</div><!-- end .meet -->';
		}
		
		if ( is_active_sidebar( 'book' ) ) {
			echo '<div class="book inner-wrap home-section">';
			genesis_structural_wrap( 'book' );
			dynamic_sidebar( 'book' );
			genesis_structural_wrap( 'book', 'close' );
			echo '</div><!-- end .book -->';
		}

		if ( is_active_sidebar( 'testimonials' ) ) {
			echo '<div class="testimonials-section outer-wrap home-section">';
			genesis_structural_wrap( 'testimonials' );
			dynamic_sidebar( 'testimonials' );
			genesis_structural_wrap( 'testimonials', 'close' );
			echo '</div><!-- end .testimonials -->';
		}
		
		// if ( is_active_sidebar( 'properties' ) ) {
			// echo '<div class="properties">';
			// dynamic_sidebar( 'properties' );
			// echo '</div><!-- end .properties -->';
		// }		
// 				
// 		
// 		
		// if ( is_active_sidebar( 'featured-bottom-left' ) || is_active_sidebar( 'featured-bottom-right' ) ) {
// 		
			// echo '<div class="featured-bottom">';
// 		
				// echo '<div class="featured-bottom-left">';
				// dynamic_sidebar( 'featured-bottom-left' );
				// echo '</div><!-- end .featured-bottom-left -->';
// 
				// echo '<div class="featured-bottom-right">';
				// dynamic_sidebar( 'featured-bottom-right' );
				// echo '</div><!-- end .featured-bottom-right -->';
// 
			// echo '</div><!-- end .featured-bottom -->';	
// 		
		// }
		
}

genesis();