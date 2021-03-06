<?php
/**
 * Builds the Dynamik Author admin content.
 *
 * @package Dynamik
 */
?>

<div id="dynamik-design-options-nav-author-box" class="dynamik-optionbox-outer-1col dynamik-all-options">
	<div class="dynamik-optionbox-inner-1col">
		<h3><?php _e( 'Post Author Box', 'dynamik' ); ?></h3>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Author Box Title Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-heading-font-type-child" id="dynamik-author-box-title-font-type" name="dynamik[font_type][author_box_title]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['author_box_title'] ); ?></select>
				<input type="text" id="dynamik-author-box-title-font-size" name="dynamik[author_box_title_font_size]" value="<?php dynamik_design_options_defaults( true, 'author_box_title_font_size' ); ?>" style="width:40px;" />
				<select class="dynamik-universal-px-em-child dynamik-universal-heading-px-em-child" id="dynamik-author-box-title-px-em" name="dynamik[author_box_title_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'author_box_title_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'author_box_title_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>		
				<?php _e( 'Color', 'dynamik' ); ?><input type="text" class="dynamik-universal-font-color-child dynamik-universal-heading-font-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-author-box-title-font-color" name="dynamik[author_box_title_font_color]" value="<?php dynamik_design_options_defaults( true, 'author_box_title_font_color' ); ?>" />
				<input type="checkbox" class="universal-check" id="dynamik-author-box-title-font-universal" name="dynamik[author_box_title_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'author_box_title_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-author-box-title-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-author-box-title-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Author Box Title Font Custom CSS | <code>' . dynamik_html_markup( 'author_box_title' ) . ' { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-heading-font-css-child" id="dynamik-author-box-title-font-css" name="dynamik[author_box_title_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'author_box_title_font_css' ); ?></textarea>
				</div>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Author Box Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-content-font-type-child" id="dynamik-author-box-font-type" name="dynamik[font_type][author_box]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['author_box'] ); ?></select>
				<input type="text" id="dynamik-author-box-font-size" name="dynamik[author_box_font_size]" value="<?php dynamik_design_options_defaults( true, 'author_box_font_size' ); ?>" style="width:40px;" />
				<select class="dynamik-universal-px-em-child dynamik-universal-content-px-em-child" id="dynamik-author-box-px-em" name="dynamik[author_box_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'author_box_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'author_box_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?><input type="text" class="dynamik-universal-font-color-child dynamik-universal-content-font-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-author-box-font-color" name="dynamik[author_box_font_color]" value="<?php dynamik_design_options_defaults( true, 'author_box_font_color' ); ?>" />
				<input type="checkbox" class="universal-check" id="dynamik-author-box-font-universal" name="dynamik[author_box_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'author_box_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-author-box-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-author-box-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Author Box Font Custom CSS | <code>' . dynamik_html_markup( 'author_box_content' ) . ' { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-content-font-css-child" id="dynamik-author-box-font-css" name="dynamik[author_box_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'author_box_font_css' ); ?></textarea>
				</div>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Author Box Link', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Link', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-author-box-link-color" name="dynamik[author_box_link_color]" value="<?php dynamik_design_options_defaults( true, 'author_box_link_color' ); ?>" />
				<?php _e( 'Link Hover', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-hover-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-author-box-link-hover-color" name="dynamik[author_box_link_hover_color]" value="<?php dynamik_design_options_defaults( true, 'author_box_link_hover_color' ); ?>" />
				<?php _e( 'Link Underline', 'dynamik' ); ?> <select class="dynamik-universal-link-underline-child" id="dynamik-author-box-link-underline" name="dynamik[author_box_link_underline]" size="1" style="width:90px;">
					<option value="Never"<?php if (dynamik_get_design( 'author_box_link_underline' ) == 'Never') echo ' selected="selected"'; ?>><?php _e( 'Never', 'dynamik' ); ?></option>
					<option value="On Hover"<?php if (dynamik_get_design( 'author_box_link_underline' ) == 'On Hover') echo ' selected="selected"'; ?>><?php _e( 'On Hover', 'dynamik' ); ?></option>
					<option value="Off Hover"<?php if (dynamik_get_design( 'author_box_link_underline' ) == 'Off Hover') echo ' selected="selected"'; ?>><?php _e( 'Off Hover', 'dynamik' ); ?></option>
					<option value="Always"<?php if (dynamik_get_design( 'author_box_link_underline' ) == 'Always') echo ' selected="selected"'; ?>><?php _e( 'Always', 'dynamik' ); ?></option>
				</select>
				<input type="checkbox" class="universal-check" id="dynamik-author-box-link-universal" name="dynamik[author_box_link_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'author_box_link_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Author Box Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-author-box-bg-type" class="dynamik-bg-type" name="dynamik[author_box_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'author_box_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-author-box-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-author-box-bg-no-color" name="dynamik[author_box_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'author_box_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-author-box-bg-color" name="dynamik[author_box_bg_color]" value="<?php dynamik_design_options_defaults( true, 'author_box_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-author-box-bg-image" name="dynamik[author_box_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'author_box_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Author Avatar Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-author-box-avatar-bg-type" class="dynamik-bg-type" name="dynamik[author_box_avatar_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'author_box_avatar_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-author-box-avatar-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-author-box-avatar-bg-no-color" name="dynamik[author_box_avatar_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'author_box_avatar_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-author-box-avatar-bg-color" name="dynamik[author_box_avatar_bg_color]" value="<?php dynamik_design_options_defaults( true, 'author_box_avatar_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-author-box-avatar-bg-image" name="dynamik[author_box_avatar_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'author_box_avatar_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Author Box Border', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-author-box-border-type" name="dynamik[author_box_border_type]" size="1" style="width:98px;">
					<option value="Full"<?php if (dynamik_get_design( 'author_box_border_type' ) == 'Full') echo ' selected="selected"'; ?>><?php _e( 'Full', 'dynamik' ); ?></option>
					<option value="Top"<?php if (dynamik_get_design( 'author_box_border_type' ) == 'Top') echo ' selected="selected"'; ?>><?php _e( 'Top', 'dynamik' ); ?></option>
					<option value="Top/Bottom"<?php if (dynamik_get_design( 'author_box_border_type' ) == 'Top/Bottom') echo ' selected="selected"'; ?>><?php _e( 'Top/Bottom', 'dynamik' ); ?></option>
					<option value="Left/Right"<?php if (dynamik_get_design( 'author_box_border_type' ) == 'Left/Right') echo ' selected="selected"'; ?>><?php _e( 'Left/Right', 'dynamik' ); ?></option>
					<option value="Left"<?php if (dynamik_get_design( 'author_box_border_type' ) == 'Left') echo ' selected="selected"'; ?>><?php _e( 'Left', 'dynamik' ); ?></option>
				</select>
				<?php _e( 'Thickness', 'dynamik' ); ?> <input type="text" id="dynamik-author-box-border-thickness" name="dynamik[author_box_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'author_box_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-author-box-border-style" name="dynamik[author_box_border_style]" size="1" style="width:80px; margin-right:5px;">
					<?php dynamik_list_borders( dynamik_get_design( 'author_box_border_style' ) ); ?>
				</select>
				<input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-author-box-border-color" name="dynamik[author_box_border_color]" value="<?php dynamik_design_options_defaults( true, 'author_box_border_color' ); ?>" />
			</p>
		</div>
		
		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Author Avatar Border', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Thickness', 'dynamik' ); ?>
				<input type="text" id="dynamik-author-box-avatar-border-thickness" name="dynamik[author_box_avatar_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'author_box_avatar_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-author-box-avatar-border-style" name="dynamik[author_box_avatar_border_style]" size="1" style="width:80px; margin-right:5px;">
					<?php dynamik_list_borders( dynamik_get_design( 'author_box_avatar_border_style' ) ); ?>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?> <input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-author-box-avatar-border-color" name="dynamik[author_box_avatar_border_color]" value="<?php dynamik_design_options_defaults( true, 'author_box_avatar_border_color' ); ?>" />
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Author Avatar Size/Padding', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Author Avatar Size', 'dynamik' ); ?>
				<input type="text" id="dynamik-author-box-avatar-size" name="dynamik[author_box_avatar_size]" value="<?php dynamik_design_options_defaults( true, 'author_box_avatar_size' ); ?>" style="width:40px;" /><?php _e( 'px', 'dynamik' ); ?>
				<span class="dynamik-design-standard-hide">
				<?php _e( '| Padding', 'dynamik' ); ?>
				<input type="text" id="dynamik-author-box-avatar-padding" name="dynamik[author_box_avatar_padding]" value="<?php dynamik_design_options_defaults( true, 'author_box_avatar_padding' ); ?>" style="width:25px;" /><?php _e( 'px', 'dynamik' ); ?>
				</span><!-- End .dynamik-design-standard-hide -->
			</p>
		</div>
		
		<div class="dynamik-design-standard-hide">
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Author Box Margins', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Top Margin', 'dynamik' ); ?>
				<input type="text" id="dynamik-author-box-margin-top" name="dynamik[author_box_margin_top]" value="<?php dynamik_design_options_defaults( true, 'author_box_margin_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom Margin', 'dynamik' ); ?>
				<input type="text" id="dynamik-author-box-margin-bottom" name="dynamik[author_box_margin_bottom]" value="<?php dynamik_design_options_defaults( true, 'author_box_margin_bottom' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Author Box Padding', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Padding: Top', 'dynamik' ); ?>
				<input type="text" id="dynamik-author-box-padding-top" name="dynamik[author_box_padding_top]" value="<?php dynamik_design_options_defaults( true, 'author_box_padding_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Right', 'dynamik' ); ?>
				<input type="text" id="dynamik-author-box-padding-right" name="dynamik[author_box_padding_right]" value="<?php dynamik_design_options_defaults( true, 'author_box_padding_right' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom', 'dynamik' ); ?>
				<input type="text" id="dynamik-author-box-padding-bottom" name="dynamik[author_box_padding_bottom]" value="<?php dynamik_design_options_defaults( true, 'author_box_padding_bottom' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Left', 'dynamik' ); ?>
				<input type="text" id="dynamik-author-box-padding-left" name="dynamik[author_box_padding_left]" value="<?php dynamik_design_options_defaults( true, 'author_box_padding_left' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		</div><!-- End .dynamik-design-standard-hide -->
		
	</div>
</div>