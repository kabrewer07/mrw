<?php
/**
 * Builds the Genesis Extender General Settings admin content.
 *
 * @package Extender
 */
?>

<div id="genesis-extender-settings-nav-general-box" class="genesis-extender-all-options">
	<h3 style="margin-bottom:15px; float:left;"><?php _e( 'General Settings', 'extender' ); ?></h3>

	<div class="genesis-extender-optionbox-2col-left-wrap">

		<div class="genesis-extender-optionbox-outer-2col">
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'Static Homepage', 'extender' ); ?></h4>
				
				<div class="bg-box">	
					<p>
						<input type="checkbox" id="genesis-extender-static-homepage" name="extender[static_homepage]" value="1" <?php if( checked( 1, genesis_extender_get_settings( 'static_homepage' ) ) ); ?> /> <?php _e( 'Activate the Genesis Extender Static Homepage', 'extender' ); ?>
						<span id="static-homepage-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
					</p>
					
					<div class="tooltip tooltip-400">
						<h5><?php _e( 'Take Control of Your Homepage:', 'extender' ); ?></h5>
						<p>
							<?php _e( 'When activated, the Genesis Extender Static Homepage feature allows you to gain different levels of control over the homepage of your Genesis powered website.', 'extender' ); ?>
						</p>
					</div>

					<p style="display:none;" class="genesis-extender-static-homepage-box">
						<?php _e( 'Select An EZ Home Widget Area Structure:', 'extender' ); ?>
						<span id="genesis-extender-ez-home-wa-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
					</p>

					<div class="tooltip tooltip-400">
						<h5><?php _e( 'Quick & Easy Homepage Setup', 'extender' ); ?></h5>
						<p><?php _e( 'The following drop-down menu provides dozens of possible homepage Widget Area Structures to choose from. When selected you will not only find your Widget Area Structure displaying on your homepage, but corresponding Widget Areas will be available in Appearance > Widgets, ready for you to add your content.', 'extender' ); ?></p>
						<p>
							<?php _e( '<strong>Please Note:</strong> You can also leave this feature "Disabled" and build your own Custom Homepage using the Custom Widget Areas and Hook Boxes, following', 'extender' ); ?>
							<a href="http://genesis.extenderplugin.com/custom-home-page/"><?php _e( 'THIS TUTORIAL', 'extender' ); ?></a>.
							<?php _e( 'Or you can even combine the two and create some crazy awesome static homepage setups!', 'extender' ); ?>
						</p>
					</div>

					<p style="display:none;" class="genesis-extender-static-homepage-box">
						<select id="genesis-extender-ez-homepage-select" name="extender[ez_homepage_select]" size="1" style="width:250px;">
							<?php genesis_extender_list_ez_home_structure_options( genesis_extender_get_settings( 'ez_homepage_select' ) ); ?>
						</select> <span id="genesis-extender-ez-home-wa-reference-tooltip" class="tooltip-mark tooltip-bottom-center">[<?php _e( 'Examples', 'extender' ); ?>]</span>
					</p>

					<div class="tooltip tooltip-500">
						<h5><?php _e( 'EZ Home Structure Reference Examples:', 'extender' ); ?></h5>
						<p><img src="<?php echo GENEXT_URL ?>/lib/css/images/tooltips/tooltip-home-wa-reference.png"/></p>
					</div>
					
					<p style="display:none;" class="genesis-extender-static-homepage-box">
						<strong><?php _e( 'Static Homepage Type:', 'extender' ); ?></strong>
						<label><?php _e( 'Full Page', 'extender' ); ?></label> <input id="genesis-extender-static-homepage-full" class="genesis-extender-static-homepage-type" type="radio" name="extender[static_homepage_type]" value="full" <?php if( genesis_extender_get_settings( 'static_homepage_type' ) == 'full' ) echo 'checked="checked" '; ?>/>
						<label><?php _e( 'Content Column', 'extender' ); ?></label> <input id="genesis-extender-static-homepage-content" class="genesis-extender-static-homepage-type" type="radio" name="extender[static_homepage_type]" value="content" <?php if( genesis_extender_get_settings( 'static_homepage_type' ) == 'content' ) echo 'checked="checked" '; ?>/>
						<span id="static-homepage-type-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
					</p>
					
					<div class="tooltip tooltip-400">
						<h5><?php _e( 'Full Page:', 'extender' ); ?></h5>
						<p>
							<?php _e( 'When "Full Page" is selected the Static Homepage area takes over the entire #inner div area (ie. both the Content Column and Sidebars are replaced).', 'extender' ); ?>
						</p>
						
						<h5><?php _e( 'Content Column:', 'extender' ); ?></h5>
						<p>
							<?php _e( 'When "Content Column" is selected the Static Homepage area only takes up the space inside the main #content div. This is ideal if you still want to use the Primary, and possibly Secondary, Sidebars on your Static Homepage.', 'extender' ); ?>
						</p>
					</div>

					<p style="display:none;" id="genesis-extender-static-homepage-content-box">
						<?php _e( 'Static Homepage Layout:', 'extender' ); ?> <select id="genesis-extender-static-homepage-content-layout" name="extender[static_homepage_content_layout]" size="1" style="width:180px;">
							<option value="content_sidebar"<?php if( genesis_extender_get_settings( 'static_homepage_content_layout' ) == 'content_sidebar' ) echo ' selected="selected"'; ?>><?php _e( 'Content-Sidebar', 'extender' ); ?></option>
							<option value="sidebar_content"<?php if( genesis_extender_get_settings( 'static_homepage_content_layout' ) == 'sidebar_content' ) echo ' selected="selected"'; ?>><?php _e( 'Sidebar-Content', 'extender' ); ?></option>
							<option value="content_sidebar_sidebar"<?php if( genesis_extender_get_settings( 'static_homepage_content_layout' ) == 'content_sidebar_sidebar' ) echo ' selected="selected"'; ?>><?php _e( 'Content-Sidebar-Sidebar', 'extender' ); ?></option>
							<option value="sidebar_sidebar_content"<?php if( genesis_extender_get_settings( 'static_homepage_content_layout' ) == 'sidebar_sidebar_content' ) echo ' selected="selected"'; ?>><?php _e( 'Sidebar-Sidebar-Content', 'extender' ); ?></option>
							<option value="sidebar_content_sidebar"<?php if( genesis_extender_get_settings( 'static_homepage_content_layout' ) == 'sidebar_content_sidebar' ) echo ' selected="selected"'; ?>><?php _e( 'Sidebar-Content-Sidebar', 'extender' ); ?></option>
							<option value="full_width_content"<?php if( genesis_extender_get_settings( 'static_homepage_content_layout' ) == 'full-width-content' ) echo ' selected="selected"'; ?>><?php _e( 'Full Width Content', 'extender' ); ?></option>
						</select> <span id="static-homepage-content-layout-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
					</p>

					<div class="tooltip tooltip-400">
						<p>
							<?php _e( '<strong>Please Note:</strong> Depending on the Genesis Child Theme you are using some of the Static Homepage Layouts listed may not work. This is because some Child Themes un-register certain Genesis Layouts, restricting which ones you can use.', 'extender' ); ?>
						</p>

						<p>
							<?php _e( 'So if a certain layout does not work then this is most likely the cause and you will just need to select one that does work.', 'extender' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="genesis-extender-optionbox-outer-2col">
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'Page Titles', 'extender' ); ?></h4>
				
				<div class="bg-box">	
					<p>
						<input type="checkbox" id="genesis-extender-remove-all-page-titles" name="extender[remove_all_page_titles]" value="1" <?php if( checked( 1, genesis_extender_get_settings( 'remove_all_page_titles' ) ) ); ?> /> <?php _e( 'Remove All Page Titles', 'extender' ); ?>
						<span id="remove-all-page-titles-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
					</p>
					
					<div class="tooltip tooltip-500">
						<h5><?php _e( 'Why Remove Page Titles:', 'extender' ); ?></h5>
						<p>
							<?php _e( 'Sometimes you just don\'t want certain Page Titles to display. Maybe you want to add your own H1 wrapped Title or maybe your Page content just doesn\'t need or work well with a Title. Either way, these options provide a quick and easy solution to this need. And note that this does not just Hide your Page Titles from view as the Genesis Extender Options > Hide option would do, but instead this physically removes your Page Titles from the source code.', 'extender' ); ?>
						</p>
						
						<h5><?php _e( 'How To Remove Page Titles:', 'extender' ); ?></h5>
						<p>
							<?php _e( 'You have two choices here. Remove ALL Page Titles or just ones specified by their Page ID\'s. Note that you can reference your current Page ID\'s by clicking on the [IDs] link below. Also, be sure to comma separate your ID\'s (with no spaces), but leave off the trailing comma. So if you wanted to remove a Page Title from a Page with an ID of 27 and one with an ID of 113 and one with an ID of 279 you would add this below: <strong>27,113,279</strong>', 'extender' ); ?>
						</p>
					</div>
					
					<p style="display:none;" id="genesis-extender-remove-all-page-titles-box">
						<?php _e( 'Remove Specific Page Titles By IDs: (ie. 2,17 etc.)', 'extender' ); ?><br />
						<input type="text" id="genesis-extender-remove-page-titles-ids" name="extender[remove_page_titles_ids]" value="<?php echo genesis_extender_get_settings( 'remove_page_titles_ids' )?>" style="width:310px;" />
						<span id="content-page-ids" class="tooltip-mark tooltip-center-right">[IDs]</span>
					</p>
					
					<div class="tooltip tooltip-400">
						<h5><?php _e( 'Page ID Reference:', 'extender' ); ?></h5>
						<p class="page-cat-id-scrollbox-378">
							<?php $pages = get_pages('orderby=ID&hide_empty=0');
							echo '<strong>Page IDs/Names</strong><br />'; 
								foreach($pages as $page) { 
									echo $page->ID . ' = ' . $page->post_name . '<br />'; 
								} ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="genesis-extender-optionbox-outer-2col">
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'Custom Post Types', 'extender' ); ?></h4>
				
				<div class="bg-box">
					<p>
						<input type="checkbox" id="genesis-extender-include-inpost-cpt-all" name="extender[include_inpost_cpt_all]" value="1" <?php if( checked( 1, genesis_extender_get_settings( 'include_inpost_cpt_all' ) ) ); ?> /> <?php _e( 'Include Theme In-Post Options With All Custom Post Types', 'extender' ); ?>
						<span id="include-inpost-cpt-all-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
					</p>
					
					<div class="tooltip tooltip-400">
						<h5><?php _e( 'How To Include Genesis/Extender In-Post Options With Your Custom Post Types:', 'extender' ); ?></h5>
						<p>
							<?php _e( 'With this option you can include Genesis and Genesis Extender In-Post Options with ALL Custom Post Types. If, however, you would only like to include the In-Post Options with specific Custom Post Types you can do so by including their Custom Post Type Names. Note that you can reference your current Custom Post Type Names by clicking on the [Names] link below.', 'extender' ); ?>
						</p>
						
						<span class="tooltip-credit">
							<?php _e( 'Learn more about Custom Post Types here:', 'extender' ); ?>
							<a href="http://codex.wordpress.org/Post_Types#Custom_Types" target="_blank">http://codex.wordpress.org/Post_Types#Custom_Types</a>
						</span>
					</div>

					<span style="display:none;" id="genesis-extender-include-inpost-cpt-all-box">
						<p>
							<?php _e( 'Include Theme In-Post Options With Specific Custom Post Types', 'extender' ); ?> <span id="include-inpost-cpt-names-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
						</p>
						
						<div class="tooltip tooltip-400">							
							<p>
								<?php _e( 'Be sure to comma separate your Names (with no spaces), but leave off the trailing comma. So if you wanted to Include Genesis/Extender In-Post Options with a Custom Post Type with a Name of product and one with a Name of recipes and one with a Name of songs you would add this below: <strong>products,recipes,songs</strong>', 'extender' ); ?>
							</p>
							
							<p>
								<?php _e( '<strong>Note:</strong> Some Plugins use Custom Post Types for their options and functionality so you may see names in the [Names] reference box that are not your own. In these cases just ignore those names and use the ones you know are yours.', 'extender' ); ?>
							</p>
						</div>
					
						<p>
							<?php _e( 'Add Custom Post Type Names Below: (ie. products,recipes etc.)', 'extender' ); ?><br />
							<input type="text" id="genesis-extender-include-inpost-cpt-names" name="extender[include_inpost_cpt_names]" value="<?php echo genesis_extender_get_settings( 'include_inpost_cpt_names' )?>" style="width:288px;" />
							<span id="custom-post-type-names" class="tooltip-mark tooltip-center-right">[Names]</span>
						</p>
						
						<div class="tooltip tooltip-400">
							<h5><?php _e( 'Custom Post Type Name Reference', 'extender' ); ?></h5>
							<p class="page-cat-id-scrollbox-378">
							<?php
							$args=array(
								'public'   => true,
								'_builtin' => false
							);
							$output = 'names';
							$operator = 'and';
							$post_types = get_post_types( $args, $output, $operator ); 
							echo '<strong>Custom Post Type Names:</strong><br />'; 
							foreach( $post_types as $post_type )
							{
								echo '- ' . $post_type . '<br />';
							} ?>
							</p>
						</div>
					</span>
				</div>
			</div>
		</div>
		
		<div class="genesis-extender-optionbox-outer-2col">
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'WordPress Post Formats', 'extender' ); ?></h4>
				
				<div class="bg-box">	
					<p>
						<input type="checkbox" id="genesis-extender-post-formats-active" name="extender[post_formats_active]" value="1" <?php if( checked( 1, genesis_extender_get_settings( 'post_formats_active' ) ) ); ?> /> <?php _e( 'Activate WordPress Post Formats', 'extender' ); ?>
						<span id="genesis-extender-post-formats-active-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
					</p>
					
					<div class="tooltip tooltip-500">
						<p>
							<?php _e( 'By activating this Post Formats Functionality you will be enabling a feature inside your Post Editor that allows the selection of different Post Formats on a Per-Post basis.', 'extender' ); ?>
						</p>
						<p>
							<?php _e( 'Activating this feature will also enable a function that looks for a "post-formats" folder inside your /wp-content/themes/[CHILD THEME NAME]/images/ directory and if it finds this folder it will use any appropriately named icons inside it and display them to the right of your Post Title.', 'extender' ); ?>
						</p>
						<p>
							<?php _e( 'By "appropriately named" we mean PNG images given the name of the Post Format (eg. gallery.png, chat.png, etc...)', 'extender' ); ?>
						</p>
						<span class="tooltip-credit">
							<?php _e( 'Learn more here:', 'extender' ); ?>
							<a href="http://codex.wordpress.org/Post_Formats" target="_blank">WordPress Codex | Post Formats</a>
						</span>
					</div>
				</div>
			</div>
		</div>

		<div class="genesis-extender-optionbox-outer-2col">
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'Stylesheet Options', 'extender' ); ?></h4>
				
				<div class="bg-box">
					<p>
						<input type="checkbox" id="genesis-extender-include-column-class-styles" name="extender[include_column_class_styles]" value="1" <?php if( checked( 1, genesis_extender_get_settings( 'include_column_class_styles' ) ) ); ?> /> <?php _e( 'Include Genesis "Column Classes" with the Default Stylesheet', 'extender' ); ?>
						<span id="genesis-extender-include-column-class-styles-tooltip" class="tooltip-mark tooltip-top-right">[?]</span>
					</p>
					
					<div class="tooltip tooltip-400">
						<p>
							<?php _e( 'Genesis Extender relies on the Genesis "Column Class" styles to properly display the EZ Home Widget Areas, among other things. Most current Genesis Child Themes include these styles, but some older Child Themes do not. In such cases you can activate this option to have Genesis Extender include them in its own Default stylesheet.', 'extender' ); ?>
						</p>
					</div>

					<p>
						<input type="checkbox" id="genesis-extender-minify-stylesheets" name="extender[minify_stylesheets]" value="1" <?php if( checked( 1, genesis_extender_get_settings( 'minify_stylesheets' ) ) ); ?> /> <?php _e( 'Combine & Minify The Default & Custom Stylesheets', 'extender' ); ?>
						<span id="genesis-extender-minify-stylesheets-tooltip" class="tooltip-mark tooltip-top-right">[?]</span>
					</p>
					
					<div class="tooltip tooltip-400">
						<p>
							<?php _e( 'When this option is active both the default.css and genesis-extender-custom.css files are combined into one genesis-extender-minified.css file for greater overall efficiency.', 'extender' ); ?>
						</p>
						<p>
							<?php _e( 'All of these files are located in your /wp-content/uploads/genesis-extender/plugin/ directory.', 'extender' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="genesis-extender-optionbox-2col-right-wrap">
		
		<div class="genesis-extender-optionbox-outer-2col">
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'Custom Thumbnail Sizes', 'extender' ); ?> <span id="custom-thumbnail-option-tooltip" class="tooltip-mark tooltip-bottom-left">[?]</span></h4>
				
				<div class="tooltip tooltip-500">
					<h5><?php _e( 'Creating Different Thumbnail Sizes:', 'extender' ); ?></h5>
					<p>
						<?php _e( 'To set a Custom Thumbnail Image Size you just set the Mode (Resize or Crop) and both the Width and Height for each Custom Thumbnail option. You do not have to set any of them or you can just set one or two. They are only there if you need them.', 'extender' ); ?>
					</p>
					
					<p>
						<?php _e( 'Once set you will be able to access them through both the Thumbnail Size drop-down menu in any of your Genesis Featured Posts/Page Widgets.', 'extender' ); ?>
					</p>
					
					<h5><?php _e( 'Resize vs Crop:', 'extender' ); ?></h5>
					<p>
						<?php _e( 'Both Mode options resize the images, but the Crop option will actually crop your images, if necessary, to ensure your exact image size is obtained. With the Resize option you will retain the aspect ratio of your images, but therefore not see your exact dimensions reached.', 'extender' ); ?>
					</p>
					
					<h5><?php _e( 'Regenerating Thumbnails:', 'extender' ); ?></h5>
					<p>
						<?php _e( 'If you set a new Custom Thumbnail Size AFTER an image has been uploaded/added to a WordPress Post/Page then you may need to regenerate your thumbnails to have your new Thumbnail Size take effect. You can easily do this with the <a href="http://wordpress.org/extend/plugins/regenerate-thumbnails/" target="_blank">Regenerate Thumbnails WordPress Plugin</a>.', 'extender' ); ?>
					</p>
				</div>
					
				<div class="bg-box">
					<p>
						<strong><?php _e( 'Please Note The Following For Proper Use:', 'extender' ); ?></strong>
					</p>
					<p>
						<?php _e( '- The "Mode" value must be set for the Custom Thumbnail to work.', 'extender' ); ?>
					</p>
					
					<p>
						<?php _e( '- custom-thumb-1 must be set in order for thumb-2 through 5 to work.', 'extender' ); ?>
					</p>
				</div>
				<div class="bg-box">
					<p>
						<strong><?php _e( 'custom-thumb-1', 'extender' ); ?></strong>
					</p>
					<p>
						<?php _e( 'Mode', 'extender' ); ?>
						<select id="genesis-extender-custom-image-size-one-mode" name="extender[custom_image_size_one_mode]" size="1" style="width:70px;">
							<option value="">&nbsp;</option>
							<option value="resize"<?php if( genesis_extender_get_settings( 'custom_image_size_one_mode' ) == 'resize' ) echo ' selected="selected"'; ?>><?php _e( 'Resize', 'extender' ); ?></option>
							<option value="crop"<?php if( genesis_extender_get_settings( 'custom_image_size_one_mode' ) == 'crop' ) echo ' selected="selected"'; ?>><?php _e( 'Crop', 'extender' ); ?></option>
						</select>
						<?php _e( 'Width', 'extender' ); ?> <input type="text" id="genesis-extender-custom-image-size-one-width" name="extender[custom_image_size_one_width]" value="<?php echo genesis_extender_get_settings( 'custom_image_size_one_width' ) ?>" style="width:50px;" /><?php _e( 'px', 'extender' ); ?> | 
						<?php _e( 'Height', 'extender' ); ?> <input type="text" id="genesis-extender-custom-image-size-one-height" name="extender[custom_image_size_one_height]" value="<?php echo genesis_extender_get_settings( 'custom_image_size_one_height' ) ?>" style="width:50px;" /><?php _e( 'px', 'extender' ); ?>
					</p>
				</div>
				<div class="bg-box">
					<p>
						<strong><?php _e( 'custom-thumb-2', 'extender' ); ?></strong>
					</p>
					<p>
						<?php _e( 'Mode', 'extender' ); ?>
						<select id="genesis-extender-custom-image-size-two-mode" name="extender[custom_image_size_two_mode]" size="1" style="width:70px;">
							<option value="">&nbsp;</option>
							<option value="resize"<?php if( genesis_extender_get_settings( 'custom_image_size_two_mode' ) == 'resize' ) echo ' selected="selected"'; ?>><?php _e( 'Resize', 'extender' ); ?></option>
							<option value="crop"<?php if( genesis_extender_get_settings( 'custom_image_size_two_mode' ) == 'crop' ) echo ' selected="selected"'; ?>><?php _e( 'Crop', 'extender' ); ?></option>
						</select>
						<?php _e( 'Width', 'extender' ); ?> <input type="text" id="genesis-extender-custom-image-size-two-width" name="extender[custom_image_size_two_width]" value="<?php echo genesis_extender_get_settings( 'custom_image_size_two_width' ) ?>" style="width:50px;" /><?php _e( 'px', 'extender' ); ?> | 
						<?php _e( 'Height', 'extender' ); ?> <input type="text" id="genesis-extender-custom-image-size-two-height" name="extender[custom_image_size_two_height]" value="<?php echo genesis_extender_get_settings( 'custom_image_size_two_height' ) ?>" style="width:50px;" /><?php _e( 'px', 'extender' ); ?>
					</p>
				</div>
				<div class="bg-box">
					<p>
						<strong><?php _e( 'custom-thumb-3', 'extender' ); ?></strong>
					</p>
					<p>
						<?php _e( 'Mode', 'extender' ); ?>
						<select id="genesis-extender-custom-image-size-three-mode" name="extender[custom_image_size_three_mode]" size="1" style="width:70px;">
							<option value="">&nbsp;</option>
							<option value="resize"<?php if( genesis_extender_get_settings( 'custom_image_size_three_mode' ) == 'resize' ) echo ' selected="selected"'; ?>><?php _e( 'Resize', 'extender' ); ?></option>
							<option value="crop"<?php if( genesis_extender_get_settings( 'custom_image_size_three_mode' ) == 'crop' ) echo ' selected="selected"'; ?>><?php _e( 'Crop', 'extender' ); ?></option>
						</select>
						<?php _e( 'Width', 'extender' ); ?> <input type="text" id="genesis-extender-custom-image-size-three-width" name="extender[custom_image_size_three_width]" value="<?php echo genesis_extender_get_settings( 'custom_image_size_three_width' ) ?>" style="width:50px;" /><?php _e( 'px', 'extender' ); ?> | 
						<?php _e( 'Height', 'extender' ); ?> <input type="text" id="genesis-extender-custom-image-size-three-height" name="extender[custom_image_size_three_height]" value="<?php echo genesis_extender_get_settings( 'custom_image_size_three_height' ) ?>" style="width:50px;" /><?php _e( 'px', 'extender' ); ?>
					</p>
				</div>
				<div class="bg-box">
					<p>
						<strong><?php _e( 'custom-thumb-4', 'extender' ); ?></strong>
					</p>
					<p>
						<?php _e( 'Mode', 'extender' ); ?>
						<select id="genesis-extender-custom-image-size-four-mode" name="extender[custom_image_size_four_mode]" size="1" style="width:70px;">
							<option value="">&nbsp;</option>
							<option value="resize"<?php if( genesis_extender_get_settings( 'custom_image_size_four_mode' ) == 'resize' ) echo ' selected="selected"'; ?>><?php _e( 'Resize', 'extender' ); ?></option>
							<option value="crop"<?php if( genesis_extender_get_settings( 'custom_image_size_four_mode' ) == 'crop' ) echo ' selected="selected"'; ?>><?php _e( 'Crop', 'extender' ); ?></option>
						</select>
						<?php _e( 'Width', 'extender' ); ?> <input type="text" id="genesis-extender-custom-image-size-four-width" name="extender[custom_image_size_four_width]" value="<?php echo genesis_extender_get_settings( 'custom_image_size_four_width' ) ?>" style="width:50px;" /><?php _e( 'px', 'extender' ); ?> | 
						<?php _e( 'Height', 'extender' ); ?> <input type="text" id="genesis-extender-custom-image-size-four-height" name="extender[custom_image_size_four_height]" value="<?php echo genesis_extender_get_settings( 'custom_image_size_four_height' ) ?>" style="width:50px;" /><?php _e( 'px', 'extender' ); ?>
					</p>
				</div>
				<div class="bg-box">
					<p>
						<strong><?php _e( 'custom-thumb-5', 'extender' ); ?></strong>
					</p>
					<p>
						<?php _e( 'Mode', 'extender' ); ?>
						<select id="genesis-extender-custom-image-size-five-mode" name="extender[custom_image_size_five_mode]" size="1" style="width:70px;">
							<option value="">&nbsp;</option>
							<option value="resize"<?php if( genesis_extender_get_settings( 'custom_image_size_five_mode' ) == 'resize' ) echo ' selected="selected"'; ?>><?php _e( 'Resize', 'extender' ); ?></option>
							<option value="crop"<?php if( genesis_extender_get_settings( 'custom_image_size_five_mode' ) == 'crop' ) echo ' selected="selected"'; ?>><?php _e( 'Crop', 'extender' ); ?></option>
						</select>
						<?php _e( 'Width', 'extender' ); ?> <input type="text" id="genesis-extender-custom-image-size-five-width" name="extender[custom_image_size_five_width]" value="<?php echo genesis_extender_get_settings( 'custom_image_size_five_width' ) ?>" style="width:50px;" /><?php _e( 'px', 'extender' ); ?> | 
						<?php _e( 'Height', 'extender' ); ?> <input type="text" id="genesis-extender-custom-image-size-five-height" name="extender[custom_image_size_five_height]" value="<?php echo genesis_extender_get_settings( 'custom_image_size_five_height' ) ?>" style="width:50px;" /><?php _e( 'px', 'extender' ); ?>
					</p>
				</div>
			</div>
		</div>

		<?php
		if( PARENT_THEME_VERSION < '2.0' )
			$genesis_pre_two_point_oh = ' style="display:none;"';
		else
			$genesis_pre_two_point_oh = '';
		?>

		<div class="genesis-extender-optionbox-outer-2col"<?php echo $genesis_pre_two_point_oh; ?>>
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'Genesis HTML5 Markup', 'extender' ); ?></h4>
				
				<div class="bg-box">	
					<p>
						<input type="checkbox" id="genesis-extender-html-five-active" name="extender[html_five_active]" value="1" <?php if( checked( 1, genesis_extender_get_settings( 'html_five_active' ) ) ); ?> /> <?php _e( 'Activate Genesis HTML5 Markup', 'extender' ); ?>
						<span id="html-five-active-tooltip" class="tooltip-mark tooltip-top-left">[?]</span>
					</p>
					
					<div class="tooltip tooltip-500">
						<p>
							<?php _e( 'By activating this HTML5 Markup option you will be enabling a Genesis framework feature that outputs HTML5 markup in place of the old XHTML tags.', 'extender' ); ?>
						</p>
						<p>
							<?php _e( '<strong>Please Note:</strong> Since the enabling of this feature changes some of the HTML markup of Genesis you may find that some of your Custom CSS, if you have added any at this point, may need to be tweaked to maintain the design changes made by such CSS. In light of this you may find the following link useful: ', 'extender' ); ?>
							<a href="http://dynamiktheme.com/genesis-xhtml-to-html5-css-converter/" target="_blank"><?php _e( 'GENESIS XHTML TO HTML5 CSS CONVERTER', 'extender' ); ?></a>
						</p>
						<p>
							<?php _e( '<strong>Also Note:</strong> The "Hook" setting for both Custom Widget Areas and Custom Hook Boxes (found in the "Dynamik Custom" admin section) have both "HTML5 Conent Hooks" and "Pre-HTML5 Content Hooks". When this HTML5 Markup option is enabled use the "HTML5 Content Hooks". When it is disabled use the "Pre-HTML5 Content Hooks".', 'extender' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div id="genesis-extender-fancy-dropdowns-active-box" class="genesis-extender-optionbox-outer-2col" style="display:none;">
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'Genesis "Fancy Dropdowns"', 'extender' ); ?></h4>
				
				<div class="bg-box">	
					<p>
						<input type="checkbox" id="genesis-extender-fancy-dropdowns-active" name="extender[fancy_dropdowns_active]" value="1" <?php if( checked( 1, genesis_extender_get_settings( 'fancy_dropdowns_active' ) ) ); ?> /> <?php _e( 'Enable Genesis Menu "Fancy Dropdowns"', 'extender' ); ?>
						<span id="fancy-dropdowns-tooltip" class="tooltip-mark tooltip-top-left">[?]</span>
					</p>
					
					<div class="tooltip tooltip-500">
						<p>
							<?php _e( 'With this feature enabled your Primary and Secondary Genesis menus, where sub-menus are present, will include sub-indicators as well as the "fancy dropdown" effect.', 'extender' ); ?>
						</p>

						<p>
							<?php _e( '<strong>Please Note:</strong> This is only necessary when Genesis HTML5 is active. When HTML5 is not active you can adjust this settings in', 'extender' ); ?>
							<a href="<?php echo admin_url( 'admin.php?page=genesis' ); ?>"><?php _e( 'Theme Settings > Navigation > "Load Superfish Script?"', 'extender' ); ?></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>