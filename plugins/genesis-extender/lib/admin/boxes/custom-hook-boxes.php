<?php
/**
 * Builds the Genesis Extender Custom Hook Boxes admin content.
 *
 * @package Extender
 */
?>

<div id="genesis-extender-custom-options-nav-hook-boxes-box" class="genesis-extender-optionbox-outer-1col genesis-extender-all-options">
	<div class="genesis-extender-optionbox-inner-1col">
		<h3><?php _e( 'Custom Hook Boxes', 'extender' ); ?><span style="margin:-3px 10px 0 -75px !important; font-weight:normal; float:right;" class="button add-hook"><?php _e( 'Add', 'extender' ); ?></span> <span id="custom-hooks-tooltip" class="tooltip-mark tooltip-bottom-center">[?]</span></h3>
		
		<div class="tooltip tooltip-500 tooltip-scroll-500">
			<h5><?php _e( 'Taking WordPress Hooks To A Whole New Level!', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'The Custom Hook Box option makes it not only super easy to create an unlimited number of Custom Hook Boxes, but then dictate their placement on your site using various Custom Conditionals (or if you don\'t want to restrict their placement just leave your Conditionals un-selected).', 'extender' ); ?>
			</p>
			
			<h5><?php _e( 'How To Use...', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'Give your Custom Hook Box a Name, select a Hook Location from the drop-down menu provided and then, if you would like to restrict the types of pages/posts your Custom Hook Box Content displays on, you can select various Conditionals you\'ve created by checking the boxes in the Conditionals drop-down menu. Those few steps are all you need to take to successfully create a Custom Hook Box. Finally it\'s just a matter of adding your custom content to the Hook Box Textarea. Here you can add any type of plain text and/or HTML and even javascript and PHP code!', 'extender' ); ?>
			</p>
			
			<h5><?php _e( 'What Happens When You Change The Name of A Custom Hook Box?', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'The name of a Custom Hook Box acts as it\'s ID so when you change that name it does not rename the Hook Box, but instead it creates a duplicate Custom Hook Box with the new name.', 'extender' ); ?>
			</p>
		
			<h5><?php _e( 'More Advanced...', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'The Custom Hook Boxes option provides an advanced feature that you may find useful at some point. By setting a Priority you can gain even more control over the placement of your Custom Hook Boxes.', 'extender' ); ?>
			</p>
			
			<p>
				<?php _e( 'Sometimes you may add multiple Custom Hook Boxes and/or Custom Widget Areas to the same Hook Location. In these cases the Priority option becomes useful. When adding a Priority you should start with the number 10 as a baseline as this is usually the default Priority level in WordPress. You could give one Hook Box or Widget Area a Priority of 10 and another 11 or 9 and these Custom Content areas will display before or after accordingly.', 'extender' ); ?>
			</p>
			
			<p>
				<?php _e( 'Finally, you\'ll notice that you can easily turn these Custom Hook Boxes on or off with the "Activate" option. This is useful when you don\'t want to delete your Custom Hook Box, but would like to remove it from your site for the time being.', 'extender' ); ?>
			</p>
			
			<h5><?php _e( 'Can I Add PHP Code To My Custom Hook Boxes?', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'Absolutely you can! Just be careful as you can temporarily "break" your site with incorrect PHP code.', 'extender' ); ?>
			</p>

			<h5><?php _e( '"Custom CSS Box!"', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'One very useful feature is the ability to simply add CSS code to your Custom Hook Box and have it automatically wrapped in the proper &#60;style&#62;tags&#60;/style&#62;, minified for greatest efficiency, and hooked into the wp_head hook location. And with the Custom Conditionals and Labels at your disposal you can easily control where these styles affect your website! To use this feature all you have to do is name your Hook Box, select "CSS" in the drop-down menu to the right of the "Priority" option and then add your CSS code to the Hook Box\'s textarea.', 'extender' ); ?>
			</p>
			
			<h5><?php _e( 'Shortcode', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'To use a Shortcode to display a Hook Box, use: [YOUR HOOK BOX NAME HERE] In other words, just take the Name you gave your Hook Box and wrap it in square brackets.', 'extender' ); ?>
			</p>

			<h5><?php _e( '[do_shortcode] Button', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'To use shortcodes inside a Custom Hook Box you need to wrap the [shortcode] in the', 'extender' ); ?>
				<a href="http://codex.wordpress.org/Function_Reference/do_shortcode" target="_blank"><?php _e( 'do_shortcode() function', 'extender' ); ?></a>
				<?php _e( '. A quick and easy way to do this is to simply click on the [do_shortcode] button. That will automatically wrap any text it finds wrapped in square brackets with that do_shortcode() function.', 'extender' ); ?>
			</p>

			<p>
				<?php _e( '<strong>Note</strong>, however, that there may be cases where square bracketed text is not shortcode text in which case you\'d either need to manually add the do_shortcode() function to any actual shortcodes in that Hook Box or just make sure to remove the do_shortcode() function code that is wrapped around any non-shortcode text.', 'extender' ); ?>
			</p>

			<h5><?php _e( '**Important NOTE**', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'Be sure that each of your Custom Hook Boxes has a name given to it. Failure to do this may result in the inability to Save your Custom Option settings.', 'extender' ); ?>
			</p>
		</div>
		
		<div id="genesis-extender-hooks-wrap">
<?php
		if( !empty( $custom_hooks ) )
		{
			$hook_counter = 0;
			foreach( $custom_hooks as $custom_hook )
			{
				$hook_counter++;
?>				<div id="hook-<?php echo $hook_counter; ?>" class="genesis-extender-all-hook-boxes">
					<div class="genesis-extender-custom-hook-option">
						<p class="bg-box-design">
							<span><?php _e( 'Name', 'extender' ); ?></span> <input type="text" id="custom-hook-id-<?php echo $hook_counter; ?>" name="custom_hook_ids[<?php echo $hook_counter; ?>]" value="<?php echo $custom_hook['hook_name']; ?>" style="width:280px;" class="forbid-chars forbid-caps" /> <span><?php _e( 'Hook', 'extender' ); ?></span> <select id="custom-hook-hook-<?php echo $hook_counter; ?>" name="custom_hook_hook[<?php echo $hook_counter; ?>]" size="1" style="width:250px;"><?php genesis_extender_list_hooks( $custom_hook['hook_location'] ); ?></select> <span><?php _e( 'Priority', 'extender' ); ?></span> <input type="text" id="custom-hook-priority-<?php echo $hook_counter; ?>" name="custom_hook_priority[<?php echo $hook_counter; ?>]" value="<?php echo $custom_hook['priority']; ?>" style="width:30px;" /> |  <select id="custom-hook-status-<?php echo $hook_counter; ?>" class="custom-hook-status" name="custom_hook_status[<?php echo $hook_counter; ?>]" ><option value="hkd"<?php echo ( $custom_hook['status'] == 'hkd' ) ? ' selected="selected"' : ''; ?>><?php _e( 'Hooked', 'extender' ); ?></option><option value="sht"<?php echo ( $custom_hook['status'] == 'sht' ) ? ' selected="selected"' : ''; ?>><?php _e( 'Shortcode', 'extender' ); ?></option><option value="bth"<?php echo ( $custom_hook['status'] == 'bth' ) ? ' selected="selected"' : ''; ?>><?php _e( 'Both', 'extender' ); ?></option><option value="css"<?php echo ( $custom_hook['status'] == 'css' ) ? ' selected="selected"' : ''; ?>><?php _e( 'CSS', 'extender' ); ?></option><option value="no"<?php echo ( $custom_hook['status'] == 'no' ) ? ' selected="selected"' : ''; ?>><?php _e( 'Deactivate', 'extender' ); ?></option></select>
						</p>
						<p>
							<span><?php _e( 'Conditionals', 'extender' ); ?></span> <select class="conditionals-list-multiselect" id="custom-hook-conditionals-list-<?php echo $hook_counter; ?>" name="custom_hook_conditionals_list[<?php echo $hook_counter; ?>][]" multiple="multiple" style="width:250px;"><?php genesis_extender_list_conditionals( $custom_hook['conditionals'] ); ?></select> <span id="<?php echo $hook_counter; ?>" class="button delete-hook"><?php _e( 'Delete', 'extender' ); ?></span> <span class="view-only-hook"><?php _e( 'View Only', 'extender' ); ?> <span class="button" style="width:120px !important;"><a href="#wpwrap"><?php _e( 'This Hook Box', 'extender' ); ?></a></span></span> <span class="view-all-hooks"><?php _e( 'View', 'extender' ); ?> <span class="button" style="width:120px !important;"><a href="#wpwrap"><?php _e( 'All Hook Boxes', 'extender' ); ?></a></span></span><span class="do-shortcode button"><?php _e( '[do_shortcode]', 'extender' ); ?></span>
						</p>
						<p>
							<textarea class="resizable genesis-extender-tabby-textarea" id="custom-hook-textarea-<?php echo $hook_counter; ?>" name="custom_hook_textarea[<?php echo $hook_counter; ?>]" style="width:778px;height:100px;text-align:left;"><?php echo $custom_hook['hook_textarea']; ?></textarea>
						</p>
					</div>
				</div>
<?php		}
		}
		else
		{
	?>		<div id="hook-1" class="genesis-extender-all-hook-boxes">
				<div class="genesis-extender-custom-hook-option">
					<p class="bg-box-design">
						<span><?php _e( 'Name', 'extender' ); ?></span> <input type="text" id="custom-hook-id-1" name="custom_hook_ids[1]" value="" style="width:280px;" class="forbid-chars forbid-caps" /> <span><?php _e( 'Hook', 'extender' ); ?></span> <select id="custom-hook-hook-1" name="custom_hook_hook[1]" size="1" style="width:250px;"><?php genesis_extender_list_hooks(); ?></select> <span><?php _e( 'Priority', 'extender' ); ?></span> <input type="text" id="custom-hook-priority-1" name="custom_hook_priority[1]" value="10" style="width:30px;" /> | <select id="custom-hook-status-1" class="custom-hook-status" name="custom_hook_status[1]" ><option value="hkd"><?php _e( 'Hooked', 'extender' ); ?></option><option value="sht"><?php _e( 'Shortcode', 'extender' ); ?></option><option value="bth"><?php _e( 'Both', 'extender' ); ?></option><option value="css"><?php _e( 'CSS', 'extender' ); ?></option><option value="no"><?php _e( 'Deactivate', 'extender' ); ?></option></select>
					</p>
					<p>
						<span><?php _e( 'Conditionals', 'extender' ); ?></span> <select class="conditionals-list-multiselect" id="custom-hook-conditionals-list-1" name="custom_hook_conditionals_list[1][]" multiple="multiple" style="width:250px;"><?php genesis_extender_list_conditionals(); ?></select> <span id="1" class="button delete-hook"><?php _e( 'Delete', 'extender' ); ?></span><span class="do-shortcode button" style="margin-right:192px !important;"><?php _e( '[do_shortcode]', 'extender' ); ?></span>
					</p>
					<p>
						<textarea class="resizable genesis-extender-tabby-textarea" id="custom-hook-textarea-1" name="custom_hook_textarea[1]" style="width:778px;height:100px;text-align:left;"></textarea>
					</p>
				</div>
			</div>
<?php	}
?>		</div>
	</div>
</div>