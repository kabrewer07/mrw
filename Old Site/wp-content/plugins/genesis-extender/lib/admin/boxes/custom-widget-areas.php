<?php
/**
 * Builds the Genesis Extender Custom Widget Areas admin content.
 *
 * @package Extender
 */
?>

<div id="genesis-extender-custom-options-nav-widget-areas-box" class="genesis-extender-optionbox-outer-1col genesis-extender-all-options">
	<div class="genesis-extender-optionbox-inner-1col">
		<h3><?php _e( 'Custom Widget Areas', 'extender' ); ?><span style="margin:-3px 10px 0 -75px !important; font-weight:normal; float:right;" class="button add-widget"><?php _e( 'Add', 'extender' ); ?></span> <span id="custom-widgets-tooltip" class="tooltip-mark tooltip-bottom-center">[?]</span></h3>
		
		<div class="tooltip tooltip-500 tooltip-scroll-500">
			<h5><?php _e( 'Widgets, Widgets and More Widgets!', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'The Custom Widget Areas option makes it not only super easy to create an unlimited number of Custom Widget Areas, but then dictate their placement on your site using various Custom Conditionals (or if you don\'t want to restrict their placement just leave your Conditionals un-selected).', 'extender' ); ?>
			</p>
			
			<h5><?php _e( 'How To Use...', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'Give your Custom Widget Area a Name, select a Hook Location from the drop-down menu provided and then, if you would like to restrict the types of pages/posts your Custom Widget Area displays on, you can select various Conditionals you\'ve created by checking the boxes in the Conditionals drop-down menu. Those few steps are all you need to take to successfully create a Custom Widget Area.', 'extender' ); ?>
			</p>
			
			<p>
				<?php _e( 'Once created you can add Widgets to this new Widget Area by going to', 'extender' ); ?>
				<a href="<?php echo admin_url( 'widgets.php' ); ?>"><?php _e( '<b>(Appearance > Widgets)</b>', 'extender' ); ?></a>
				<?php _e( 'and dragging the Widgets into your Widget Area.', 'extender' ); ?>
			</p>
			
			<h5><?php _e( 'What Happens When You Change The Name of A Custom Widget Area?', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'The name of a Custom Widget Area acts as it\'s ID so when you change that name it does not rename the Widget Area, but instead it creates a duplicate Custom Widget Area with the new name.', 'extender' ); ?>
			</p>
		
			<h5><?php _e( 'More Advanced...', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'The Custom Widget Areas option provides a few advanced features that you may find useful at some point. First, you can give these Widget Areas a Custom Class so you can uniquely style it with CSS if you need to. Also, by setting a Priority you can gain even more control over the placement of your Custom Widget Areas.', 'extender' ); ?>
			</p>
			
			<p>
				<?php _e( 'Sometimes you may add multiple Custom Widget Areas and/or Hook Boxes to the same Hook Location. In these cases the Priority option becomes useful. When adding a Priority you should start with the number 10 as a baseline as this is usually the defualt Priority level in WordPress. You could give one Widget Area or Hook Box a Priority of 10 and another 11 or 9 and these Custom Content areas will display before or after accordingly.', 'extender' ); ?>
			</p>
			
			<p>
				<?php _e( 'Finally, you\'ll notice that you can easily turn these Custom Widgets on or off with the "Activate" option. This is useful when you don\'t want to delete your Custom Widget, but would like to remove it from your site for the time being.', 'extender' ); ?>
			</p>
			
			<h5><?php _e( 'Shortcode', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'To use a Shortcode to display a Widget Area, use: [YOUR WIDGET AREA NAME HERE] In other words, just take the Name you gave your Widget Area and wrap it in square brackets.', 'extender' ); ?>
			</p>

			<h5><?php _e( '**Important NOTE**', 'extender' ); ?></h5>
			
			<p>
				<?php _e( 'Be sure that each of your Custom Widget Areas has a name given to it. Failure to do this may result in the inability to Save your Custom Option settings.', 'extender' ); ?>
			</p>
		</div>
		
		<div id="genesis-extender-widgets-wrap">
<?php
		if( !empty( $custom_widgets ) )
		{
			$widget_counter = 0;
			foreach( $custom_widgets as $custom_widget )
			{
				$widget_counter++;
?>				<div id="widget-<?php echo $widget_counter; ?>">
				<div class="genesis-extender-custom-widget-option">
					<p class="bg-box-design">
						<span><?php _e( 'Name', 'extender' ); ?></span> <input type="text" id="custom-widget-id-<?php echo $widget_counter; ?>" name="custom_widget_ids[<?php echo $widget_counter; ?>]" value="<?php echo $custom_widget['widget_name']; ?>" style="width:280px;" class="forbid-chars forbid-caps" /> <span><?php _e( 'Hook', 'extender' ); ?></span> <select id="custom-widget-hook-<?php echo $widget_counter; ?>" name="custom_widget_hook[<?php echo $widget_counter; ?>]" size="1" style="width:250px;"><?php genesis_extender_list_hooks( $custom_widget['hook_location'] ); ?></select> <span><?php _e( 'Priority', 'extender' ); ?></span> <input type="text" id="custom-widget-priority-<?php echo $widget_counter; ?>" name="custom_widget_priority[<?php echo $widget_counter; ?>]" value="<?php echo $custom_widget['priority']; ?>" style="width:30px;" /> | <select id="custom-widget-status-<?php echo $widget_counter; ?>" class="custom-widget-status" name="custom_widget_status[<?php echo $widget_counter; ?>]" ><option value="hkd"<?php echo ( $custom_widget['status'] == 'hkd' ) ? ' selected="selected"' : ''; ?>><?php _e( 'Hooked', 'extender' ); ?></option><option value="sht"<?php echo ( $custom_widget['status'] == 'sht' ) ? ' selected="selected"' : ''; ?>><?php _e( 'Shortcode', 'extender' ); ?></option><option value="bth"<?php echo ( $custom_widget['status'] == 'bth' ) ? ' selected="selected"' : ''; ?>><?php _e( 'Both', 'extender' ); ?></option><option value="no"<?php echo ( $custom_widget['status'] == 'no' ) ? ' selected="selected"' : ''; ?>><?php _e( 'Deactivate', 'extender' ); ?></option></select>
					</p>
					<p>
					<span><?php _e( 'Conditionals', 'extender' ); ?></span> <select class="conditionals-list-multiselect" id="custom-widget-conditionals-list-<?php echo $widget_counter; ?>" name="custom_widget_conditionals_list[<?php echo $widget_counter; ?>][]" multiple="multiple" style="width:250px;"><?php genesis_extender_list_conditionals( $custom_widget['conditionals'] ); ?></select> <span><?php _e( 'Class', 'extender' ); ?></span> <input type="text" id="custom-widget-class-<?php echo $widget_counter; ?>" name="custom_widget_class[<?php echo $widget_counter; ?>]" value="<?php echo $custom_widget['class']; ?>" style="width:250px;" /> <span id="<?php echo $widget_counter; ?>" class="button delete-widget"> <?php _e( 'Delete', 'extender' ); ?></span>
					</p>
				</div>
				</div>
<?php		}
		}
		else
		{
	?>		<div id="widget-1">
			<div class="genesis-extender-custom-widget-option">
				<p class="bg-box-design">
					<span><?php _e( 'Name', 'extender' ); ?></span> <input type="text" id="custom-widget-id-1" name="custom_widget_ids[1]" value="" style="width:280px;" class="forbid-chars forbid-caps" /> <span><?php _e( 'Hook', 'extender' ); ?></span> <select id="custom-widget-hook-1" name="custom_widget_hook[1]" size="1" style="width:250px;"><?php genesis_extender_list_hooks(); ?></select> <span><?php _e( 'Priority', 'extender' ); ?></span> <input type="text" id="custom-widget-priority-1" name="custom_widget_priority[1]" value="10" style="width:30px;" /> | <select id="custom-widget-status-1" class="custom-widget-status" name="custom_widget_status[1]" ><option value="hkd"><?php _e( 'Hooked', 'extender' ); ?></option><option value="sht"><?php _e( 'Shortcode', 'extender' ); ?></option><option value="bth"><?php _e( 'Both', 'extender' ); ?></option><option value="no"><?php _e( 'Deactivate', 'extender' ); ?></option></select>
				</p>
				<p>
				<span><?php _e( 'Conditionals', 'extender' ); ?></span> <select class="conditionals-list-multiselect" id="custom-widget-conditionals-list-1" name="custom_widget_conditionals_list[1][]" multiple="multiple" style="width:250px;"><?php genesis_extender_list_conditionals(); ?></select> <span><?php _e( 'Class', 'extender' ); ?></span> <input type="text" id="custom-widget-class-1" name="custom_widget_class[1]" value="" style="width:250px;" /> <span id="1" class="button delete-widget"> <?php _e( 'Delete', 'extender' ); ?></span>
				</p>
			</div>
			</div>
<?php	}
?>		</div>
	</div>
</div>