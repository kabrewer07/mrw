<?php
/**
 * Builds the Custom Functions admin content.
 *
 * @package Extender
 */
?>

<div id="genesis-extender-custom-options-nav-functions-box" class="genesis-extender-optionbox-outer-1col genesis-extender-all-options">
	<div class="genesis-extender-optionbox-inner-1col">
		<h3><?php _e( 'Custom Functions', 'extender' ); ?>
		<span style="color:#777777;">( <?php _e( 'Affect Admin', 'extender' ); ?>
		<input type="checkbox" id="genesis-extender-custom-functions-effect-admin" name="custom_functions[custom_functions_effect_admin]" value="1" <?php if( checked( 1, $custom_functions['custom_functions_effect_admin'] ) ); ?> /> )</span>
		<span id="custom-functions-tooltip" class="tooltip-mark tooltip-bottom-center">[?]</span></h3>
		
		<div class="tooltip tooltip-400">
			<h5><?php _e( 'Custom PHP Functions', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'Below you will find a simple solution for adding your own Custom PHP code to your site.', 'extender' ); ?>
			</p>

			<h5><?php _e( 'Effect Admin?', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'By default the Custom Functions you add below will only effect the front-end of your site to help prevent accidentally "breaking" your website with some bad code. But if you\'re confident in your coding abilities you can check this box to have your functions effect the Dashboard area (back-end admin section) as well.', 'extender' ); ?>
			</p>

			<h5><?php _e( 'What If I Do "Break" My Site?', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'If you\'ve enabled the "Effect Admin" option and end up adding some code that temporarily "breaks" your site you can fix this by removing the bad code from your /wp-content/uploads/genesis-extender/plugin/custom-functions.php file.', 'extender' ); ?>
			</p>
		</div>

		<p>
			<textarea wrap="off" id="genesis-extender-custom-functions" class="genesis-extender-tabby-textarea" name="custom_functions[custom_functions]" rows="20"><?php echo stripslashes( wp_kses_decode_entities( $custom_functions['custom_functions'] ) ); ?></textarea>
		</p>
	</div>
</div>