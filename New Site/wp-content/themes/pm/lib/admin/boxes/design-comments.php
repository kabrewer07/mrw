<?php
/**
 * Builds the Dynamik Comments admin content.
 *
 * @package Dynamik
 */
?>

<div id="dynamik-design-options-nav-comments-box" class="dynamik-optionbox-outer-1col dynamik-all-options">
	<div class="dynamik-optionbox-inner-1col">
		<h3><?php _e( 'Comments', 'dynamik' ); ?></h3>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Comment Heading Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-heading-font-type-child" id="dynamik-comment-heading-font-type" name="dynamik[font_type][comment_heading]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['comment_heading'] ); ?></select>
				<input type="text" id="dynamik-comment-heading-font-size" name="dynamik[comment_heading_font_size]" value="<?php dynamik_design_options_defaults( true, 'comment_heading_font_size' ); ?>" style="width:40px;" />
				<select class="dynamik-universal-px-em-child dynamik-universal-heading-px-em-child" id="dynamik-comment-heading-px-em" name="dynamik[comment_heading_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'comment_heading_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'comment_heading_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?><input type="text" class="dynamik-universal-font-color-child dynamik-universal-heading-font-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-heading-font-color" name="dynamik[comment_heading_font_color]" value="<?php dynamik_design_options_defaults( true, 'comment_heading_font_color' ); ?>" />
				<input type="checkbox" class="universal-check" id="dynamik-comment-heading-font-universal" name="dynamik[comment_heading_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_heading_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-comment-heading-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-comment-heading-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Comment Heading Font Custom CSS | <code>#comments h3, #respond h3 { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-heading-font-css-child" id="dynamik-comment-heading-font-css" name="dynamik[comment_heading_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'comment_heading_font_css' ); ?></textarea>
				</div>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Comment Author Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-content-font-type-child" id="dynamik-comment-author-font-type" name="dynamik[font_type][comment_author]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['comment_author'] ); ?></select>
				<input type="text" id="dynamik-comment-author-font-size" name="dynamik[comment_author_font_size]" value="<?php dynamik_design_options_defaults( true, 'comment_author_font_size' ); ?>" style="width:40px;" />
				<select class="dynamik-universal-px-em-child dynamik-universal-content-px-em-child" id="dynamik-comment-author-px-em" name="dynamik[comment_author_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'comment_author_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'comment_author_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?><input type="text" class="dynamik-universal-font-color-child dynamik-universal-content-font-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-author-font-color" name="dynamik[comment_author_font_color]" value="<?php dynamik_design_options_defaults( true, 'comment_author_font_color' ); ?>" />
				<input type="checkbox" class="universal-check" id="dynamik-comment-author-font-universal" name="dynamik[comment_author_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_author_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-comment-author-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-comment-author-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Comment Author Custom CSS | <code>.comment-author cite, .comment-author cite a, .comment-author .says { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-content-font-css-child" id="dynamik-comment-author-font-css" name="dynamik[comment_author_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'comment_author_font_css' ); ?></textarea>
				</div>
			</p>
		</div>

		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Comment Author Link', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Link', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-author-link-color" name="dynamik[comment_author_link_color]" value="<?php dynamik_design_options_defaults( true, 'comment_author_link_color' ); ?>" />
				<?php _e( 'Link Hover', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-hover-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-author-link-hover-color" name="dynamik[comment_author_link_hover_color]" value="<?php dynamik_design_options_defaults( true, 'comment_author_link_hover_color' ); ?>" />
				<?php _e( 'Link Underline', 'dynamik' ); ?> <select class="dynamik-universal-link-underline-child" id="dynamik-comment-author-link-underline" name="dynamik[comment_author_link_underline]" size="1" style="width:90px;">
					<option value="Never"<?php if( dynamik_get_design( 'comment_author_link_underline' ) == 'Never' ) echo ' selected="selected"'; ?>><?php _e( 'Never', 'dynamik' ); ?></option>
					<option value="On Hover"<?php if( dynamik_get_design( 'comment_author_link_underline' ) == 'On Hover' ) echo ' selected="selected"'; ?>><?php _e( 'On Hover', 'dynamik' ); ?></option>
					<option value="Off Hover"<?php if( dynamik_get_design( 'comment_author_link_underline' ) == 'Off Hover' ) echo ' selected="selected"'; ?>><?php _e( 'Off Hover', 'dynamik' ); ?></option>
					<option value="Always"<?php if( dynamik_get_design( 'comment_author_link_underline' ) == 'Always' ) echo ' selected="selected"'; ?>><?php _e( 'Always', 'dynamik' ); ?></option>
				</select>
				<input type="checkbox" class="universal-check" id="dynamik-comment-author-link-universal" name="dynamik[comment_author_link_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_author_link_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Comment Meta Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-content-font-type-child" id="dynamik-comment-meta-font-type" name="dynamik[font_type][comment_meta]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['comment_meta'] ); ?></select>
				<input type="text" id="dynamik-comment-meta-font-size" name="dynamik[comment_meta_font_size]" value="<?php dynamik_design_options_defaults( true, 'comment_meta_font_size' ); ?>" style="width:35px;">
				<select class="dynamik-universal-px-em-child dynamik-universal-content-px-em-child" id="dynamik-comment-meta-px-em" name="dynamik[comment_meta_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'comment_meta_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'comment_meta_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>
				<input type="checkbox" class="universal-check" id="dynamik-comment-meta-font-universal" name="dynamik[comment_meta_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_meta_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-comment-meta-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-comment-meta-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Comment Meta Font Custom CSS | <code>' . dynamik_html_markup( 'comment_meta' ) . ' { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-content-font-css-child" id="dynamik-comment-meta-font-css" name="dynamik[comment_meta_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'comment_meta_font_css' ); ?></textarea>
				</div>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Comment Meta Link', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Link', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-meta-link-color" name="dynamik[comment_meta_link_color]" value="<?php dynamik_design_options_defaults( true, 'comment_meta_link_color' ); ?>" />
				<?php _e( 'Link Hover', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-hover-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-meta-link-hover-color" name="dynamik[comment_meta_link_hover_color]" value="<?php dynamik_design_options_defaults( true, 'comment_meta_link_hover_color' ); ?>" />
				<?php _e( 'Link Underline', 'dynamik' ); ?> <select class="dynamik-universal-link-underline-child" id="dynamik-comment-meta-link-underline" name="dynamik[comment_meta_link_underline]" size="1" style="width:90px;">
					<option value="Never"<?php if (dynamik_get_design( 'comment_meta_link_underline' ) == 'Never') echo ' selected="selected"'; ?>><?php _e( 'Never', 'dynamik' ); ?></option>
					<option value="On Hover"<?php if (dynamik_get_design( 'comment_meta_link_underline' ) == 'On Hover') echo ' selected="selected"'; ?>><?php _e( 'On Hover', 'dynamik' ); ?></option>
					<option value="Off Hover"<?php if (dynamik_get_design( 'comment_meta_link_underline' ) == 'Off Hover') echo ' selected="selected"'; ?>><?php _e( 'Off Hover', 'dynamik' ); ?></option>
					<option value="Always"<?php if (dynamik_get_design( 'comment_meta_link_underline' ) == 'Always') echo ' selected="selected"'; ?>><?php _e( 'Always', 'dynamik' ); ?></option>
				</select>
				<input type="checkbox" class="universal-check" id="dynamik-comment-meta-link-universal" name="dynamik[comment_meta_link_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_meta_link_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Comment Body Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-content-font-type-child" id="dynamik-comment-body-font-type" name="dynamik[font_type][comment_body]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['comment_body'] ); ?></select>
				<input type="text" id="dynamik-comment-body-font-size" name="dynamik[comment_body_font_size]" value="<?php dynamik_design_options_defaults( true, 'comment_body_font_size' ); ?>" style="width:40px;" />
				<select class="dynamik-universal-px-em-child dynamik-universal-content-px-em-child" id="dynamik-comment-body-px-em" name="dynamik[comment_body_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'comment_body_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'comment_body_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?><input type="text" class="dynamik-universal-font-color-child dynamik-universal-content-font-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-body-font-color" name="dynamik[comment_body_font_color]" value="<?php dynamik_design_options_defaults( true, 'comment_body_font_color' ); ?>" />
				<input type="checkbox" class="universal-check" id="dynamik-comment-body-font-universal" name="dynamik[comment_body_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_body_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-comment-body-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-comment-body-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Comment Body Font Custom CSS <code>.comment-content p, ' . dynamik_html_markup( 'comment_reply' ) . ', #respond p { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-content-font-css-child" id="dynamik-comment-body-font-css" name="dynamik[comment_body_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'comment_body_font_css' ); ?></textarea>
				</div>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Comment Form Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-content-font-type-child" id="dynamik-comment-form-font-type" name="dynamik[font_type][comment_form]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['comment_form'] ); ?></select>
				<input type="text" id="dynamik-comment-form-font-size" name="dynamik[comment_form_font_size]" value="<?php dynamik_design_options_defaults( true, 'comment_form_font_size' ); ?>" style="width:40px;" />
				<select class="dynamik-universal-px-em-child dynamik-universal-content-px-em-child" id="dynamik-comment-form-px-em" name="dynamik[comment_form_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'comment_form_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'comment_form_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?><input type="text" class="dynamik-universal-font-color-child dynamik-universal-content-font-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-form-font-color" name="dynamik[comment_form_font_color]" value="<?php dynamik_design_options_defaults( true, 'comment_form_font_color' ); ?>" />
				<input type="checkbox" class="universal-check" id="dynamik-comment-form-font-universal" name="dynamik[comment_form_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_form_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-comment-form-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-comment-form-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Comment Form Font Custom CSS | <code>#author, #comment, #email, #url { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-content-font-css-child" id="dynamik-comment-form-font-css" name="dynamik[comment_form_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'comment_form_font_css' ); ?></textarea>
				</div>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Comment Link', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Link', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-link-color" name="dynamik[comment_link_color]" value="<?php dynamik_design_options_defaults( true, 'comment_link_color' ); ?>" />
				<?php _e( 'Link Hover', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-hover-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-link-hover-color" name="dynamik[comment_link_hover_color]" value="<?php dynamik_design_options_defaults( true, 'comment_link_hover_color' ); ?>" />
				<?php _e( 'Link Underline', 'dynamik' ); ?> <select class="dynamik-universal-link-underline-child" id="dynamik-comment-link-underline" name="dynamik[comment_link_underline]" size="1" style="width:90px;">
					<option value="Never"<?php if (dynamik_get_design( 'comment_link_underline' ) == 'Never') echo ' selected="selected"'; ?>><?php _e( 'Never', 'dynamik' ); ?></option>
					<option value="On Hover"<?php if (dynamik_get_design( 'comment_link_underline' ) == 'On Hover') echo ' selected="selected"'; ?>><?php _e( 'On Hover', 'dynamik' ); ?></option>
					<option value="Off Hover"<?php if (dynamik_get_design( 'comment_link_underline' ) == 'Off Hover') echo ' selected="selected"'; ?>><?php _e( 'Off Hover', 'dynamik' ); ?></option>
					<option value="Always"<?php if (dynamik_get_design( 'comment_link_underline' ) == 'Always') echo ' selected="selected"'; ?>><?php _e( 'Always', 'dynamik' ); ?></option>
				</select>
				<input type="checkbox" class="universal-check" id="dynamik-comment-link-universal" name="dynamik[comment_link_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_link_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Submit Button Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-content-font-type-child" id="dynamik-comment-submit-font-type" name="dynamik[font_type][comment_submit]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['comment_submit'] ); ?></select>
				<input type="text" id="dynamik-comment-submit-font-size" name="dynamik[comment_submit_font_size]" value="<?php dynamik_design_options_defaults( true, 'comment_submit_font_size' ); ?>" style="width:40px;" />
				<select class="dynamik-universal-px-em-child dynamik-universal-content-px-em-child" id="dynamik-comment-submit-px-em" name="dynamik[comment_submit_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'comment_submit_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'comment_submit_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?><input type="text" class="dynamik-universal-font-color-child dynamik-universal-content-font-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-submit-font-color" name="dynamik[comment_submit_font_color]" value="<?php dynamik_design_options_defaults( true, 'comment_submit_font_color' ); ?>" />
				<input type="checkbox" class="universal-check" id="dynamik-comment-submit-font-universal" name="dynamik[comment_submit_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_submit_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-comment-submit-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-comment-submit-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Submit Button Font Custom CSS | <code>#commentform #submit { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-content-font-css-child" id="dynamik-comment-submit-font-css" name="dynamik[comment_submit_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'comment_submit_font_css' ); ?></textarea>
				</div>
			</p>
		</div>
		
		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Submit Button Text Hover', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Text Hover', 'dynamik' ); ?><input type="text" class="dynamik-universal-link-hover-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-submit-text-hover-color" name="dynamik[comment_submit_text_hover_color]" value="<?php dynamik_design_options_defaults( true, 'comment_submit_text_hover_color' ); ?>" />
				<?php _e( 'Text Hover Underline', 'dynamik' ); ?> <select class="dynamik-universal-link-underline-child" id="dynamik-submit-link-underline" name="dynamik[submit_text_hover_underline]" size="1" style="width:90px;">
					<option value="Never"<?php if( dynamik_get_design( 'submit_text_hover_underline' ) == 'Never' ) echo ' selected="selected"'; ?>><?php _e( 'Never', 'dynamik' ); ?></option>
					<option value="On Hover"<?php if( dynamik_get_design( 'submit_text_hover_underline' ) == 'On Hover' ) echo ' selected="selected"'; ?>><?php _e( 'On Hover', 'dynamik' ); ?></option>
					<option value="Off Hover"<?php if( dynamik_get_design( 'submit_text_hover_underline' ) == 'Off Hover' ) echo ' selected="selected"'; ?>><?php _e( 'Off Hover', 'dynamik' ); ?></option>
					<option value="Always"<?php if( dynamik_get_design( 'submit_text_hover_underline' ) == 'Always' ) echo ' selected="selected"'; ?>><?php _e( 'Always', 'dynamik' ); ?></option>
				</select>
				<input type="checkbox" class="universal-check" id="dynamik-submit-link-universal" name="dynamik[comment_submit_link_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_submit_link_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
			</p>
		</div>

		<div class="dynamik-font-option-desc">
			<p><?php _e( 'Comment Form Allowed Tags Font', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select class="dynamik-universal-font-type-child dynamik-universal-content-font-type-child" id="dynamik-comment-form-allowed-tags-font-type" name="dynamik[font_type][comment_form_allowed_tags]" size="1" style="width:98px;">
				<?php dynamik_build_font_menu( $dynamik_font_type['comment_form_allowed_tags'] ); ?></select>
				<input type="text" id="dynamik-comment-form-allowed-tags-font-size" name="dynamik[comment_form_allowed_tags_font_size]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_font_size' ); ?>" style="width:40px;" />
				<select class="dynamik-universal-px-em-child dynamik-universal-content-px-em-child" id="dynamik-comment-form-allowed-tags-px-em" name="dynamik[comment_form_allowed_tags_px_em]" size="1" style="width:50px;">
					<option value="px"<?php echo ( dynamik_get_design( 'comment_form_allowed_tags_px_em' ) == 'px' ) ? ' selected="selected"' : ''; ?>>px</option>
					<option value="em"<?php echo ( dynamik_get_design( 'comment_form_allowed_tags_px_em' ) == 'em' ) ? ' selected="selected"' : ''; ?>>em</option>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?><input type="text" class="dynamik-universal-font-color-child dynamik-universal-content-font-color-child color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-form-allowed-tags-font-color" name="dynamik[comment_form_allowed_tags_font_color]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_font_color' ); ?>" />
				<input type="checkbox" class="universal-check" id="dynamik-comment-form-allowed-tags-font-universal" name="dynamik[comment_form_allowed_tags_font_u]" value="u" <?php if( checked( 'u', dynamik_get_design( 'comment_form_allowed_tags_font_u' ) ) ); ?> /> <?php _e( '(U)', 'dynamik' ); ?>
				<span class="dynamik-custom-fonts-button-wrap"><span id="show-comment-form-allowed-tags-font-css" class="dynamik-custom-fonts-button button">#Custom</span></span>
				<div style="display:none;" id="show-comment-form-allowed-tags-font-css-box" class="dynamik-custom-fonts-box">
				<?php _e( 'Comment Form Allowed Tags Font Custom CSS | <code>.form-allowed-tags { }</code>', 'dynamik' ); ?><br />
				<textarea class="dynamik-universal-font-css-child dynamik-universal-content-font-css-child" id="dynamik-comment-form-allowed-tags-font-css" name="dynamik[comment_form_allowed_tags_font_css]" style="width:100%;" rows="10"><?php echo dynamik_get_design( 'comment_form_allowed_tags_font_css' ); ?></textarea>
				</div>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Comment Even Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-comment-even-bg-type" class="dynamik-bg-type" name="dynamik[comment_even_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'comment_even_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-comment-even-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-comment-even-bg-no-color" name="dynamik[comment_even_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'comment_even_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-even-bg-color" name="dynamik[comment_even_bg_color]" value="<?php dynamik_design_options_defaults( true, 'comment_even_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-comment-even-bg-image" name="dynamik[comment_even_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'comment_even_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Comment Alt Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-comment-odd-bg-type" class="dynamik-bg-type" name="dynamik[comment_alt_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'comment_alt_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-comment-odd-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-comment-odd-bg-no-color" name="dynamik[comment_alt_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'comment_alt_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-odd-bg-color" name="dynamik[comment_alt_bg_color]" value="<?php dynamik_design_options_defaults( true, 'comment_alt_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-comment-odd-bg-image" name="dynamik[comment_alt_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'comment_alt_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Comment Reply Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-comment-reply-bg-type" class="dynamik-bg-type" name="dynamik[comment_reply_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'comment_reply_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-comment-reply-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-comment-reply-bg-no-color" name="dynamik[comment_reply_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'comment_reply_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-reply-bg-color" name="dynamik[comment_reply_bg_color]" value="<?php dynamik_design_options_defaults( true, 'comment_reply_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-comment-reply-bg-image" name="dynamik[comment_reply_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'comment_reply_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Comment Avatar Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-comment-avatar-bg-type" class="dynamik-bg-type" name="dynamik[comment_avatar_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'comment_avatar_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-comment-avatar-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-comment-avatar-bg-no-color" name="dynamik[comment_avatar_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'comment_avatar_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-avatar-bg-color" name="dynamik[comment_avatar_bg_color]" value="<?php dynamik_design_options_defaults( true, 'comment_avatar_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-comment-avatar-bg-image" name="dynamik[comment_avatar_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'comment_avatar_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Comment Form Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-comment-form-bg-type" class="dynamik-bg-type" name="dynamik[comment_form_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'comment_form_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-comment-form-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-comment-form-bg-no-color" name="dynamik[comment_form_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'comment_form_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-form-bg-color" name="dynamik[comment_form_bg_color]" value="<?php dynamik_design_options_defaults( true, 'comment_form_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-comment-form-bg-image" name="dynamik[comment_form_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'comment_form_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Submit Button Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-comment-submit-bg-type" class="dynamik-bg-type" name="dynamik[comment_submit_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'comment_submit_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-comment-submit-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-comment-submit-bg-no-color" name="dynamik[comment_submit_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'comment_submit_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-submit-bg-color" name="dynamik[comment_submit_bg_color]" value="<?php dynamik_design_options_defaults( true, 'comment_submit_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-comment-submit-bg-image" name="dynamik[comment_submit_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'comment_submit_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Submit Button Hover Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-comment-submit-hover-bg-type" class="dynamik-bg-type" name="dynamik[comment_submit_hover_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'comment_submit_hover_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-comment-submit-hover-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-comment-submit-hover-bg-no-color" name="dynamik[comment_submit_hover_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'comment_submit_hover_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-submit-hover-bg-color" name="dynamik[comment_submit_hover_bg_color]" value="<?php dynamik_design_options_defaults( true, 'comment_submit_hover_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-comment-submit-hover-bg-image" name="dynamik[comment_submit_hover_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'comment_submit_hover_bg_image' ) ); ?></select>
			</p>
		</div>

		<div class="dynamik-bg-option-desc">
			<p><?php _e( 'Comment Form Allowed Tags Background', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-comment-form-allowed-tags-bg-type" class="dynamik-bg-type" name="dynamik[comment_form_allowed_tags_bg_type]" size="1" style="width:150px;">
				<?php dynamik_list_bg_options( dynamik_get_design( 'comment_form_allowed_tags_bg_type' ) ); ?>
				</select> <span style="display:none;" id="dynamik-comment-form-allowed-tags-bg-type-checkbox"><?php _e( '(No Color', 'dynamik' ); ?> <input type="checkbox" id="dynamik-comment-form-allowed-tags-bg-no-color" name="dynamik[comment_form_allowed_tags_bg_no_color]" value="1" <?php if( checked( 1, dynamik_get_design( 'comment_form_allowed_tags_bg_no_color' ) ) ); ?> />)</span><input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-form-allowed-tags-bg-color" name="dynamik[comment_form_allowed_tags_bg_color]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_bg_color' ); ?>" />
				<?php _e( 'Image', 'dynamik' ); ?> <select id="dynamik-comment-form-allowed-tags-bg-image" name="dynamik[comment_form_allowed_tags_bg_image]" size="1" style="width:150px;"><?php dynamik_list_images( dynamik_get_design( 'comment_form_allowed_tags_bg_image' ) ); ?></select>
			</p>
		</div>
		
		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Comment Body Border', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Type', 'dynamik' ); ?> <select id="dynamik-comment-body-border-type" name="dynamik[comment_body_border_type]" size="1" style="width:98px;">
					<option value="Full"<?php if (dynamik_get_design( 'comment_body_border_type' ) == 'Full') echo ' selected="selected"'; ?>><?php _e( 'Full', 'dynamik' ); ?></option>
					<option value="Top/Bottom"<?php if (dynamik_get_design( 'comment_body_border_type' ) == 'Top/Bottom') echo ' selected="selected"'; ?>><?php _e( 'Top/Bottom', 'dynamik' ); ?></option>
				</select>
				<?php _e( 'Thickness', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-body-border-thickness" name="dynamik[comment_body_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'comment_body_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-comment-body-border-style" name="dynamik[comment_body_border_style]" size="1" style="width:80px; margin-right:5px;">
					<?php dynamik_list_borders( dynamik_get_design( 'comment_body_border_style' ) ); ?>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?> <input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-body-border-color" name="dynamik[comment_body_border_color]" value="<?php dynamik_design_options_defaults( true, 'comment_body_border_color' ); ?>" />
			</p>
		</div>
		
		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Comment Avatar Border', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Thickness', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-avatar-border-thickness" name="dynamik[comment_avatar_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'comment_avatar_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-comment-avatar-border-style" name="dynamik[comment_avatar_border_style]" size="1" style="width:80px; margin-right:5px;">
					<?php dynamik_list_borders( dynamik_get_design( 'comment_avatar_border_style' ) ); ?>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?> <input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-avatar-border-color" name="dynamik[comment_avatar_border_color]" value="<?php dynamik_design_options_defaults( true, 'comment_avatar_border_color' ); ?>" />
				<span class="dynamik-design-standard-hide">
				<?php _e( 'Padding', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-avatar-padding" name="dynamik[comment_avatar_padding]" value="<?php dynamik_design_options_defaults( true, 'comment_avatar_padding' ); ?>" style="width:25px;" /><?php _e( 'px', 'dynamik' ); ?>
				</span><!-- End .dynamik-design-standard-hide -->
			</p>
		</div>
		
		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Comment Form Border', 'dynamik' ); ?></p>
		</div>

		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Thickness', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-form-border-thickness" name="dynamik[comment_form_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'comment_form_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-comment-form-border-style" name="dynamik[comment_form_border_style]" size="1" style="width:80px; margin-right:5px;">
					<?php dynamik_list_borders( dynamik_get_design( 'comment_form_border_style' ) ); ?>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?> <input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-form-border-color" name="dynamik[comment_form_border_color]" value="<?php dynamik_design_options_defaults( true, 'comment_form_border_color' ); ?>" />
			</p>
		</div>
		
		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Submit Button Border', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Thickness', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-submit-border-thickness" name="dynamik[comment_submit_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'comment_submit_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-comment-submit-border-style" name="dynamik[comment_submit_border_style]" size="1" style="width:80px; margin-right:5px;">
					<?php dynamik_list_borders( dynamik_get_design( 'comment_submit_border_style' ) ); ?>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?> <input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-submit-border-color" name="dynamik[comment_submit_border_color]" value="<?php dynamik_design_options_defaults( true, 'comment_submit_border_color' ); ?>" />
			</p>
		</div>
		
		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Submit Button Hover Border', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Thickness', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-submit-hover-border-thickness" name="dynamik[comment_submit_hover_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'comment_submit_hover_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-comment-submit-hover-border-style" name="dynamik[comment_submit_hover_border_style]" size="1" style="width:80px; margin-right:5px;">
					<?php dynamik_list_borders( dynamik_get_design( 'comment_submit_hover_border_style' ) ); ?>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?> <input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-submit-hover-border-color" name="dynamik[comment_submit_hover_border_color]" value="<?php dynamik_design_options_defaults( true, 'comment_submit_hover_border_color' ); ?>" />
			</p>
		</div>

		<div class="dynamik-border-option-desc">
			<p><?php _e( 'Comment Form Allowed Tags Border', 'dynamik' ); ?></p>
		</div>

		<div class="dynamik-design-option">
			<p class="bg-box-design">
				<?php _e( 'Thickness', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-form-allowed-tags-border-thickness" name="dynamik[comment_form_allowed_tags_border_thickness]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_border_thickness' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Style', 'dynamik' ); ?> <select id="dynamik-comment-form-allowed-tags-border-style" name="dynamik[comment_form_allowed_tags_border_style]" size="1" style="width:80px; margin-right:5px;">
					<?php dynamik_list_borders( dynamik_get_design( 'comment_form_allowed_tags_border_style' ) ); ?>
				</select>
				<?php _e( 'Color', 'dynamik' ); ?> <input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box" id="dynamik-comment-form-allowed-tags-border-color" name="dynamik[comment_form_allowed_tags_border_color]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_border_color' ); ?>" />
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Comment Widths', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Author/Email/Url Form Widths', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-author-email-url-width" name="dynamik[comment_author_email_url_width]" value="<?php dynamik_design_options_defaults( true, 'comment_author_email_url_width' ); ?>" style="width:40px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Comment Avatar Size', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-avatar-size" name="dynamik[comment_avatar_size]" value="<?php dynamik_design_options_defaults( true, 'comment_avatar_size' ); ?>" style="width:40px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Comment Widths', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Comment Form Width', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-form-width" name="dynamik[comment_form_width]" value="<?php dynamik_design_options_defaults( true, 'comment_form_width' ); ?>" style="width:50px;" /> <?php _e( '(Blank = 98%) |', 'dynamik' ); ?>
				<?php _e( 'Submit Button Width', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-submit-width" name="dynamik[comment_submit_width]" value="<?php dynamik_design_options_defaults( true, 'comment_submit_width' ); ?>" style="width:50px;" /> <?php _e( '(Blank = auto)', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-standard-hide">
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Comments Margins', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Top Margin', 'dynamik' ); ?>
				<input type="text" id="dynamik-comments-margin-top" name="dynamik[comments_margin_top]" value="<?php dynamik_design_options_defaults( true, 'comments_margin_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom Margin', 'dynamik' ); ?>
				<input type="text" id="dynamik-comments-margin-bottom" name="dynamik[comments_margin_bottom]" value="<?php dynamik_design_options_defaults( true, 'comments_margin_bottom' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Comment List Margins', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Top Margin', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-list-margin-top" name="dynamik[comment_list_margin_top]" value="<?php dynamik_design_options_defaults( true, 'comment_list_margin_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom Margin', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-list-margin-bottom" name="dynamik[comment_list_margin_bottom]" value="<?php dynamik_design_options_defaults( true, 'comment_list_margin_bottom' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Comment List Padding', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Padding: Top', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-list-padding-top" name="dynamik[comment_list_padding_top]" value="<?php dynamik_design_options_defaults( true, 'comment_list_padding_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Right', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-list-padding-right" name="dynamik[comment_list_padding_right]" value="<?php dynamik_design_options_defaults( true, 'comment_list_padding_right' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-list-padding-bottom" name="dynamik[comment_list_padding_bottom]" value="<?php dynamik_design_options_defaults( true, 'comment_list_padding_bottom' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Left', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-list-padding-left" name="dynamik[comment_list_padding_left]" value="<?php dynamik_design_options_defaults( true, 'comment_list_padding_left' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Submit Button Padding', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Padding: Top', 'dynamik' ); ?>
				<input type="text" id="dynamik-submit-button-padding-top" name="dynamik[submit_button_padding_top]" value="<?php dynamik_design_options_defaults( true, 'submit_button_padding_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Right', 'dynamik' ); ?>
				<input type="text" id="dynamik-submit-button-padding-right" name="dynamik[submit_button_padding_right]" value="<?php dynamik_design_options_defaults( true, 'submit_button_padding_right' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom', 'dynamik' ); ?>
				<input type="text" id="dynamik-submit-button-padding-bottom" name="dynamik[submit_button_padding_bottom]" value="<?php dynamik_design_options_defaults( true, 'submit_button_padding_bottom' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Left', 'dynamik' ); ?>
				<input type="text" id="dynamik-submit-button-padding-left" name="dynamik[submit_button_padding_left]" value="<?php dynamik_design_options_defaults( true, 'submit_button_padding_left' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Comment\'s Bottom Nav Padding', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Top Padding', 'dynamik' ); ?>
				<input type="text" id="dynamik-comments-nav-padding-top" name="dynamik[comments_nav_padding_top]" value="<?php dynamik_design_options_defaults( true, 'comments_nav_padding_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom Padding', 'dynamik' ); ?>
				<input type="text" id="dynamik-comments-nav-padding-bottom" name="dynamik[comments_nav_padding_bottom]" value="<?php dynamik_design_options_defaults( true, 'comments_nav_padding_bottom' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>

		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Comment Form Allowed Tags Margins', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Top Margin', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-form-allowed-tags-margin-top" name="dynamik[comment_form_allowed_tags_margin_top]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_margin_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom Margin', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-form-allowed-tags-margin-bottom" name="dynamik[comment_form_allowed_tags_margin_bottom]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_margin_bottom' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		<div class="dynamik-design-option-desc">
			<p><?php _e( 'Comment Form Allowed Tags Padding', 'dynamik' ); ?></p>
		</div>
		
		<div class="dynamik-design-option">
			<p>
				<?php _e( 'Padding: Top', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-form-allowed-tags-padding-top" name="dynamik[comment_form_allowed_tags_padding_top]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_padding_top' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Right', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-form-allowed-tags-padding-right" name="dynamik[comment_form_allowed_tags_padding_right]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_padding_right' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Bottom', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-form-allowed-tags-padding-bottom" name="dynamik[comment_form_allowed_tags_padding_bottom]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_padding_bottom' ); ?>" style="width:35px;" /><?php _e( 'px |', 'dynamik' ); ?>
				<?php _e( 'Left', 'dynamik' ); ?>
				<input type="text" id="dynamik-comment-form-allowed-tags-padding-left" name="dynamik[comment_form_allowed_tags_padding_left]" value="<?php dynamik_design_options_defaults( true, 'comment_form_allowed_tags_padding_left' ); ?>" style="width:35px;" /><?php _e( 'px', 'dynamik' ); ?>
			</p>
		</div>
		
		</div><!-- End .dynamik-design-standard-hide -->
		
	</div>
</div>