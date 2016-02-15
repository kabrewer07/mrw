<?php
/**
 * Builds the Settings Import/Export admin content.
 *
 * @package Extender
 */
?>

<div id="genesis-extender-settings-nav-import-export-box" class="genesis-extender-optionbox-outer-1col genesis-extender-all-options">
	
<?php	if( !empty( $_GET['notice'] ) )
	{
		if( $_GET['notice'] == 'import-error' )
		{
?>				<div id="notice-box" style="background:#FFFBCC;border:1px solid #E6DB55;color:#555555;text-align:center;margin-bottom:15px;padding:5px;clear:both;"><strong><?php _e( 'Settings/Custom Import Error: Import File Must Be In .dat Format (ie. my_backup.dat)', 'extender' ); ?></strong></div>
<?php		}
		elseif( $_GET['notice'] == 'import-complete' )
		{
?>				<div id="notice-box" style="background:#FFFBCC;border:1px solid #E6DB55;color:#555555;text-align:center;margin-bottom:15px;padding:5px;clear:both;"><strong><?php _e( 'Settings/Custom Import Complete', 'extender' ); ?></strong></div>
<?php		}
	}
?>

	<div class="genesis-extender-optionbox-inner-1col">
		<h3 style="-moz-border-radius:6px 6px 0 0; -webkit-border-radius:6px 6px 0 0; border-radius:6px 6px 0 0;"><?php _e( 'Genesis Extender Settings/Custom Import/Export', 'extender' ); ?></h3>
		
		<div style="width:792px; float:left; padding:10px 10px 10px 0; border:1px solid #E3E3E3; border-top:0; background:#FFFFFF;">
			<div style="width:50%; float:left;">
				<form method="post">
				<div class="bg-box" style="margin-right:0; margin-bottom:0; height:344px;">
					<h4><?php _e( 'Export Settings/Custom Options', 'extender' ); ?></h4>
					<p>
						<input type="checkbox" id="export-settings" name="export_settings" value="1" checked /> <?php _e( 'Plugin Settings', 'extender' ); ?> <strong style="float:right; width:190px;"><?php _e( 'Export File Name:', 'extender' ); ?></strong><input type="text" id="genesis-extender-export-name" name="genesis_extender_export_name" value="" style="float:right; width:190px;" class="forbid-chars" />
					</p>
					<p>
						<input type="checkbox" id="export-css" name="export_css" value="1" checked /> <?php _e( 'Custom CSS', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="export-functions" name="export_functions" value="1" checked /> <?php _e( 'Custom Functions', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="export-js" name="export_js" value="1" checked /> <?php _e( 'Custom JS', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="export-templates" name="export_templates" value="1" checked /> <?php _e( 'Custom Templates', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="export-labels" name="export_labels" value="1" checked /> <?php _e( 'Custom Labels', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="export-conditionals" name="export_conditionals" value="1" checked /> <?php _e( 'Custom Conditionals', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="export-widgets" name="export_widgets" value="1" checked /> <?php _e( 'Custom Widget Areas', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="export-hooks" name="export_hooks" value="1" checked /> <?php _e( 'Custom Hook Boxes', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="export-images" name="export_images" value="1" checked /> <?php _e( 'Uploaded Images', 'extender' ); ?> <input type="submit" name="clicked_button" value="<?php _e( 'Export Custom Options', 'extender' ); ?>" style="margin:-5px 0 0 !important; float:right !important;" class="button-highlighted button"/>
						<input type="hidden" name="action" value="genesis_extender_custom_export">
					</p>
				</div>
				</form>
			</div>
		
			<div style="width:50%; float:right;">
				<form method="post" enctype="multipart/form-data">
				<div class="bg-box" style="margin-right:0; margin-bottom:0; height:344px;">
					<h4><?php _e( 'Import Settings/Custom Options', 'extender' ); ?></h4>
					<p>
						<input type="checkbox" id="import-settings" name="import_settings" value="1" checked /> <?php _e( 'Plugin Settings', 'extender' ); ?> <input style="float:right; width:200px;" name="custom_import_file" type="file" />
					</p>
					<p>
						<input type="checkbox" id="import-css" name="import_css" value="1" checked /> <?php _e( 'Custom CSS', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="import-functions" name="import_functions" value="1" checked /> <?php _e( 'Custom Functions', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="import-js" name="import_js" value="1" checked /> <?php _e( 'Custom JS', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="import-templates" name="import_templates" value="1" checked /> <?php _e( 'Custom Templates', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="import-labels" name="import_labels" value="1" checked /> <?php _e( 'Custom Labels', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="import-conditionals" name="import_conditionals" value="1" checked /> <?php _e( 'Custom Conditionals', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="import-widgets" name="import_widgets" value="1" checked /> <?php _e( 'Custom Widget Areas', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="import-hooks" name="import_hooks" value="1" checked /> <?php _e( 'Custom Hook Boxes', 'extender' ); ?>
					</p>
					<p>
						<input type="checkbox" id="import-images" name="import_images" value="1" checked /> <?php _e( 'Uploaded Images', 'extender' ); ?> <input type="submit" name="clicked_button" value="<?php _e( 'Import Custom Options', 'extender' ); ?>" style="margin:-5px 0 0 !important; float:right !important;" class="button-highlighted button"/>
						<input type="hidden" name="action" value="genesis_extender_custom_import">
					</p>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>