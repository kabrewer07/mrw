<?php
/**
 * Builds the Dynamik Sidebars admin content.
 *
 * @package Dynamik
 */
?>

<div id="dynamik-design-options-nav-sidebars-box" class="dynamik-optionbox-outer-1col dynamik-all-options">
	<div class="dynamik-optionbox-inner-1col">
		<h3><?php _e( 'Sidebars', 'dynamik' ); ?></h3>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Sidebar Heading Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-heading-font-type-child" id="dynamik-sb-heading-font-type" name="dynamik[font_type][sb_heading]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['sb_heading'] ); ?></select>
				<input type="text" id="dynamik-sb-heading-font-size" name="dynamik[sb_heading_font_size]" value="<?php dynamik_design_options_defaults( true, 'sb_heading_font_size' ); ?>" style="width:40px;" />
				<select class="dynamik-universal-px-em-child dynamik-universal-heading-px-em-child" id="dynamik-sb-heading-px-em" name="dynamik[sb_heading_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'sb_heading_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'sb_heading_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?><input type="text" class="dynamik-universal-font-color-child dynamik-universal-heading-font-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-sb-heading-font-color" name="dynamik[sb_heading_font_color]" value="<?php dynamik_design_options_defaults( true, 'sb_heading_font_color' ); ?>" />
				<input type="checkbox" class="universal-check" id="dynamik-sb-heading-font-universal" name="dynamik[sb_heading_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'sb_heading_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-sb-heading-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-sb-heading-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Sidebar Heading Font Custom CSS | <code>' . dynamik_html_markup( 'sidebar_primary' ) . ' h4, ' . dynamik_html_markup( 'sidebar_secondary' ) . ' h4, #ez-home-sidebar h4 { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-heading-font-css-child" id="dynamik-sb-heading-font-css" name="dynamik[sb_heading_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'sb_heading_font_css' ); ?></textarea>
				</div>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Sidebar Content Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-content-font-type-child" id="dynamik-sb-content-font-type" name="dynamik[font_type][sb_content]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['sb_content'] ); ?></select>
				<input type="text" id="dynamik-sb-content-font-size" name="dynamik[sb_content_font_size]" value="<?php dynamik_design_options_defaults( true, 'sb_content_font_size' ); ?>" style="width:40px;" />
				<select class="dynamik-universal-px-em-child dynamik-universal-content-px-em-child" id="dynamik-sb-content-px-em" name="dynamik[sb_content_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'sb_content_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'sb_content_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?><input type="text" class="dynamik-universal-font-color-child dynamik-universal-content-font-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-sb-content-font-color" name="dynamik[sb_content_font_color]" value="<?php dynamik_design_options_defaults( true, 'sb_content_font_color' ); ?>" />
				<input type="checkbox" class="universal-check" id="dynamik-sb-content-font-universal" name="dynamik[sb_content_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'sb_content_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-sb-content-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-sb-content-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Sidebar Content Font Custom CSS | <code>' . dynamik_html_markup( 'sidebar_primary' ) . ', ' . dynamik_html_markup( 'sidebar_secondary' ) . ', #ez-home-sidebar { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-content-font-css-child" id="dynamik-sb-content-font-css" name="dynamik[sb_content_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'sb_content_font_css' ); ?></textarea>
				</div>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Sidebar Content Link', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Link', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-sb-content-link-color" name="dynamik[sb_content_link_color]" value="<?php dynamik_design_options_defaults( true, 'sb_content_link_color' ); ?>" />
				<?php _e( 'Link Hover', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-hover-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-sb-content-link-hover-color" name="dynamik[sb_content_link_hover_color]" value="<?php dynamik_design_options_defaults( true, 'sb_content_link_hover_color' ); ?>" />
				<?php _e( 'Link Underline', 'dynamik' ); ?> <select class="dynamik-universal-link-underline-child" id="dynamik-sb-content-link-underline" name="dynamik[sb_content_link_underline]" size="1" style="width:90px;">
					<option value="Never"<?php if (dynamik_get_design( 'sb_content_link_underline' ) == 'Never') echo ' selected="selected"'; ?>><?php _e( 'Never', 'dynamik' ); ?></option>
					<option value="On Hover"<?php if (dynamik_get_design( 'sb_content_link_underline' ) == 'On Hover') echo ' selected="selected"'; ?>><?php _e( 'On Hover', 'dynamik' ); ?></option>
					<option value="Off Hover"<?php if (dynamik_get_design( 'sb_content_link_underline' ) == 'Off Hover') echo ' selected="selected"'; ?>><?php _e( 'Off Hover', 'dynamik' ); ?></option>
					<option value="Always"<?php if (dynamik_get_design( 'sb_content_link_underline' ) == 'Always') echo ' selected="selected"'; ?>><?php _e( 'Always', 'dynamik' ); ?></option>
				</select>
				<input type="checkbox" class="universal-check" id="dynamik-sb-content-link-universal" name="dynamik[sb_content_link_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'sb_content_link_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Sidebar Heading Background', 'dynamik' ); ?></p>
		</div>
	
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-sb-heading-bg-type" class="dynamik-bg-type" name="dynamik[sb_heading_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'sb_heading_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-sb-heading-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-sb-heading-bg-no-color" name="dynamik[sb_heading_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'sb_heading_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-sb-heading-bg-color" name="dynamik[sb_heading_bg_color]" value="<?php dynamik_design_options_defaults( true, 'sb_heading_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-sb-heading-bg-image" name="dynamik[sb_heading_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'sb_heading_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Sidebar Content Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-sb-content-bg-type" class="dynamik-bg-type" name="dynamik[sb_content_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'sb_content_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-sb-content-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-sb-content-bg-no-color" name="dynamik[sb_content_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'sb_content_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-sb-content-bg-color" name="dynamik[sb_content_bg_color]" value="<?php dynamik_design_options_defaults( true, 'sb_content_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-sb-content-bg-image" name="dynamik[sb_content_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'sb_content_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Sidebar Heading Border', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-sb-heading-border-type" name="dynamik[sb_heading_border_type]" size="1" style="width:100px;">
					<option value="Full"<?php if (dynamik_get_design( 'sb_heading_border_type' ) == 'Full') echo ' selected="selected"'; ?>><?php _e( 'Full', 'dynamik' ); ?></option>
					<option value="Top/Bottom"<?php if (dynamik_get_design( 'sb_heading_border_type' ) == 'Top/Bottom') echo ' selected="selected"'; ?>><?php _e( 'Top/Bottom', 'dynamik' ); ?></option>
					<option value="Bottom"<?php if (dynamik_get_design( 'sb_heading_border_type' ) == 'Bottom') echo ' selected="selected"'; ?>><?php _e( 'Bottom', 'dynamik' ); ?></option>
				</select>
				<?php _e( 'Thickness', 'dynamik' ); ?> <input type="text" id="dynamik-sb-heading-border-thickness" name="dynamik[sb_heading_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'sb_heading_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-sb-heading-border-style" name="dynamik[sb_heading_border_style]" size="1" style="width:90px; margin-right:5px;">
					<?php dynamik_list_borders( dynamik_get_design( 'sb_heading_border_style' ) ); ?>
				</select>
				<input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-sb-heading-border-color" name="dynamik[sb_heading_border_color]" value="<?php dynamik_design_options_defaults( true, 'sb_heading_border_color' ); ?>" />
			</p>
		</div>
		
		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Sidebar Content Border', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-sb-content-border-type" name="dynamik[sb_content_border_type]" size="1" style="width:100px;">
					<option value="Full"<?php if (dynamik_get_design( 'sb_content_border_type' ) == 'Full') echo ' selected="selected"'; ?>><?php _e( 'Full', 'dynamik' ); ?></option>
					<option value="Top/Bottom"<?php if (dynamik_get_design( 'sb_content_border_type' ) == 'Top/Bottom') echo ' selected="selected"'; ?>><?php _e( 'Top/Bottom', 'dynamik' ); ?></option>
					<option value="Bottom"<?php if (dynamik_get_design( 'sb_content_border_type' ) == 'Bottom') echo ' selected="selected"'; ?>><?php _e( 'Bottom', 'dynamik' ); ?></option>
				</select>
				<?php _e( 'Thickness', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-content-border-thickness" name="dynamik[sb_content_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'sb_content_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-sb-content-border-style" name="dynamik[sb_content_border_style]" size="1" style="width:90px; margin-right:5px;">
					<?php dynamik_list_borders( dynamik_get_design( 'sb_content_border_style' ) ); ?>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?> <input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-sb-content-border-color" name="dynamik[sb_content_border_color]" value="<?php dynamik_design_options_defaults( true, 'sb_content_border_color' ); ?>" />
			</p>
		</div>
		
		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Sidebar List-Style Bottom Border', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Thickness', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-li-bottom-border-thickness" name="dynamik[sb_li_bottom_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'sb_li_bottom_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-sb-li-bottom-border-style" name="dynamik[sb_li_bottom_border_style]" size="1" style="width:80px;">
					<?php dynamik_list_borders( dynamik_get_design( 'sb_li_bottom_border_style' ) ); ?>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?> <input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-sb-li-bottom-border-color" name="dynamik[sb_li_bottom_border_color]" value="<?php dynamik_design_options_defaults( true, 'sb_li_bottom_border_color' ); ?>" />
			</p>
		</div>
		
		<div class="dynamik-design-standard-hide">
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Sidebar Widget Margins', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Top Margin', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-widget-margin-top" name="dynamik[sb_widget_margin_top]" value="<?php dynamik_design_options_defaults( true, 'sb_widget_margin_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom Margin', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-widget-margin-bottom" name="dynamik[sb_widget_margin_bottom]" value="<?php dynamik_design_options_defaults( true, 'sb_widget_margin_bottom' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Sidebar Heading Padding', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Padding: Top', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-heading-padding-top" name="dynamik[sb_heading_padding_top]" value="<?php dynamik_design_options_defaults( true, 'sb_heading_padding_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Right', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-heading-padding-right" name="dynamik[sb_heading_padding_right]" value="<?php dynamik_design_options_defaults( true, 'sb_heading_padding_right' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-heading-padding-bottom" name="dynamik[sb_heading_padding_bottom]" value="<?php dynamik_design_options_defaults( true, 'sb_heading_padding_bottom' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Left', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-heading-padding-left" name="dynamik[sb_heading_padding_left]" value="<?php dynamik_design_options_defaults( true, 'sb_heading_padding_left' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Sidebar Content Padding', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Padding: Top', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-content-padding-top" name="dynamik[sb_content_padding_top]" value="<?php dynamik_design_options_defaults( true, 'sb_content_padding_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Right', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-content-padding-right" name="dynamik[sb_content_padding_right]" value="<?php dynamik_design_options_defaults( true, 'sb_content_padding_right' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-content-padding-bottom" name="dynamik[sb_content_padding_bottom]" value="<?php dynamik_design_options_defaults( true, 'sb_content_padding_bottom' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Left', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-content-padding-left" name="dynamik[sb_content_padding_left]" value="<?php dynamik_design_options_defaults( true, 'sb_content_padding_left' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Sidebar List-Style Margins', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Margin: Top', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-li-margin-top" name="dynamik[sb_li_margin_top]" value="<?php dynamik_design_options_defaults( true, 'sb_li_margin_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Right', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-li-margin-right" name="dynamik[sb_li_margin_right]" value="<?php dynamik_design_options_defaults( true, 'sb_li_margin_right' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-li-margin-bottom" name="dynamik[sb_li_margin_bottom]" value="<?php dynamik_design_options_defaults( true, 'sb_li_margin_bottom' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Left', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-li-margin-left" name="dynamik[sb_li_margin_left]" value="<?php dynamik_design_options_defaults( true, 'sb_li_margin_left' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Sidebar List-Style Padding', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Padding: Top', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-li-padding-top" name="dynamik[sb_li_padding_top]" value="<?php dynamik_design_options_defaults( true, 'sb_li_padding_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Right', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-li-padding-right" name="dynamik[sb_li_padding_right]" value="<?php dynamik_design_options_defaults( true, 'sb_li_padding_right' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-li-padding-bottom" name="dynamik[sb_li_padding_bottom]" value="<?php dynamik_design_options_defaults( true, 'sb_li_padding_bottom' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Left', 'dynamik' ); ?>
				<input type="text" id="dynamik-sb-li-padding-left" name="dynamik[sb_li_padding_left]" value="<?php dynamik_design_options_defaults( true, 'sb_li_padding_left' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		</div><!-- End .dynamik-design-standard-hide -->
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Sidebar List-Style', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Sidebar List Style', 'dynamik' ); ?>
				<select id="dynamik-sb-list-style" name="dynamik[sb_list_style]" size="1" style="width:70px;">
					<option value="none"<?php if (dynamik_get_design( 'sb_list_style' ) == 'none') echo ' selected="selected"'; ?>><?php _e( 'none', 'dynamik' ); ?></option>
					<option value="disc"<?php if (dynamik_get_design( 'sb_list_style' ) == 'disc') echo ' selected="selected"'; ?>><?php _e( 'disc', 'dynamik' ); ?></option>
					<option value="circle"<?php if (dynamik_get_design( 'sb_list_style' ) == 'circle') echo ' selected="selected"'; ?>><?php _e( 'circle', 'dynamik' ); ?></option>
					<option value="square"<?php if (dynamik_get_design( 'sb_list_style' ) == 'square') echo ' selected="selected"'; ?>><?php _e( 'square', 'dynamik' ); ?></option>
				</select>
			</p>
		</div>
	</div>
</div>