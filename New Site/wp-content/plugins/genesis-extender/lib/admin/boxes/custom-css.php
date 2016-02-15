<?php
/**
 * Builds the Custom CSS admin content.
 *
 * @package Extender
 */
?>

<div id="genesis-extender-custom-options-nav-css-box" class="genesis-extender-optionbox-outer-1col genesis-extender-all-options genesis-extender-options-display">
	<div class="genesis-extender-optionbox-inner-1col">
		<h3><?php _e( 'Custom CSS', 'extender' ); ?>
		<span style="color:#777777;">( <?php _e( 'Activate Front-end CSS Builder', 'extender' ); ?>
		<input type="checkbox" id="genesis-extender-css-builder-popup-active" name="extender[css_builder_popup_active]" value="1" <?php if( checked( 1, genesis_extender_get_custom_css( 'css_builder_popup_active' ) ) ); ?> />
		<span id="genesis-extender-css-builder-popup-editor-only-wrap"<?php if( !genesis_extender_get_custom_css( 'css_builder_popup_active' ) ) { echo 'style="display:none;"'; } ?>><?php _e( 'Editor Only', 'extender' ); ?>
		<input type="checkbox" id="genesis-extender-css-builder-popup-editor-only" name="extender[css_builder_popup_editor_only]" value="1" <?php if( checked( 1, genesis_extender_get_custom_css( 'css_builder_popup_editor_only' ) ) ); ?> /></span> )</span>
		<span id="custom-css-tooltip" class="tooltip-mark tooltip-bottom-left">[?]</span></h3>
		
		<div class="tooltip tooltip-500 tooltip-scroll-500">
			<h5><?php _e( 'Powerful Custom CSS Tools', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'To add Custom CSS to your Genesis Extender Powered website just add it below or Activate the Front-end CSS Builder feature. This will display a "Show/Hide CSS Builder" tab on the front-end of your website where you can click to display the CSS Builder Tool included with Genesis Extender.', 'extender' ); ?>
			</p>
			
			<p>
				<?php _e( 'With this tool displaying on your site\'s front-end you will be able to utilize both the CSS Builder Tool as well as the Custom CSS Editor. But what makes this feature so intuitive and powerful is the fact that your CSS will result in real-time changes to the style of your website. Just add your Custom Styles and watch the changes take place as you type in the code!', 'extender' ); ?>
			</p>
			
			<h5><?php _e( 'CSS Builder vs Custom CSS', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'The "CSS Builder" section is only for helping you create the CSS. It is the "Custom CSS Editor" popup that actually provides a place to add/edit/save Custom CSS that will effect your site\'s design for all visitors.', 'extender' ); ?>
			</p>
			
			<p>
				<?php _e( 'The CSS Builder changes are only temporary and the Custom CSS Editor changes are temporary until you click "Save Changes" to write them to your actual Custom Stylesheet. So no one but you will see these changes until you save them in the Custom CSS Editor.', 'extender' ); ?>
			</p>
			
			<h5><?php _e( 'Editor Only?', 'catalyst' ); ?></h5>
			
			<p>
				<?php _e( 'Just want a simple Front-end CSS Editor? Then select this option.', 'catalyst' ); ?>
			</p>
			
			<h5><?php _e( 'Who Sees The CSS Builder Tool', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'To be able to see the "Show/Hide CSS Builder" tab, let alone be able to display and use the CSS Builder Tool, the "Activate Front-end CSS Builder" option must be selected and you must be currently logged in as an Administrator. So basically, no one but you will see these items.', 'extender' ); ?>
			</p>
		</div>
		
		<div style="display:none;" id="css-builder-click-to-view">
			<a href="<?php echo home_url(); ?>" target="_blank"><?php _e( 'Click To View Front-end', 'extender' ); ?></a>
		</div>
		
		<div id="genesis-extender-custom-css-admin-p" class="genesis-extender-custom-option">
			<p>
				<textarea wrap="off" id="genesis-extender-custom-css" class="genesis-extender-tabby-textarea" name="extender[custom_css]" rows="20"><?php echo genesis_extender_get_custom_css( 'custom_css' ); ?></textarea>
			</p>
		</div>
	</div>
</div>