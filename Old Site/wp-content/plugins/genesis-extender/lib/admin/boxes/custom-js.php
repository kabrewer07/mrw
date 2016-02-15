<?php
/**
 * Builds the Custom JS admin content.
 *
 * @package Extender
 */
?>

<div id="genesis-extender-custom-options-nav-js-box" class="genesis-extender-optionbox-outer-1col genesis-extender-all-options">
	<div class="genesis-extender-optionbox-inner-1col">
		<h3><?php _e( 'Custom Javascript/jQuery', 'extender' ); ?>
		<span style="color:#777777;">( <?php _e( 'Place In &lt;head&gt;', 'extender' ); ?>
		<input type="checkbox" id="genesis-extender-custom-js-in-head" name="custom_js[custom_js_in_head]" value="1" <?php if( checked( 1, $custom_js['custom_js_in_head'] ) ); ?> /> )</span>
		<span id="custom-js-tooltip" class="tooltip-mark tooltip-bottom-center">[?]</span></h3>
		
		<div class="tooltip tooltip-300">
			<h5><?php _e( 'Custom Javascript/jQuery', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'Below you will find a simple solution for adding your own Custom JS code to your site. If the textarea below is left blank then no JS file will be enqueued to the front-end of your site.', 'extender' ); ?>
			</p>

			<h5><?php _e( 'What Does "Enqueue" Mean?', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'Using the', 'extender' ); ?>
				<?php _e( '<a href="http://codex.wordpress.org/Function_Reference/wp_enqueue_script" target="_blank">wp_enqueue_script</a>', 'extender' ); ?>
				<?php _e( 'function is the proper way to add javascrip files to your site.', 'extender' ); ?>
			</p>

			<h5><?php _e( 'Choosing Where To Enqueue Your JS File', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'If you\'ve enabled the "Place In &lt;head&gt;" option then your JS file will be enqueued into your wp_head() hook location, placing in the &lt;head&gt; of your site. By default your JS file will be placed just above your closing &lt;/body&gt; tag.', 'extender' ); ?>
			</p>
		</div>

		<p>
			<textarea wrap="off" id="genesis-extender-custom-js" class="genesis-extender-tabby-textarea" name="custom_js[custom_js]" rows="20"><?php echo stripslashes( wp_kses_decode_entities( $custom_js['custom_js'] ) ); ?></textarea>
		</p>
	</div>
</div>