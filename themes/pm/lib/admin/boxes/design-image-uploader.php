<?php
/**
 * Builds the Dynamik Image Uploader admin content.
 *
 * @package Dynamik
 */
?>

<?php
global $blog_id;
$dynamik_multisite = false;
if( $blog_id > 1 )
{
    $dynamik_multisite = $blog_id;
}
?>
<div id="dynamik-design-options-nav-<?php echo $nav_alt_id; ?>image-uploader-box" class="dynamik-optionbox-outer-1col dynamik-all-options">
	<div class="dynamik-optionbox-inner-1col dynamik-uploader-inner-1col">
		<h3 style="-moz-border-radius:3px 3px 0 0; -webkit-border-radius:3px 3px 0 0; border-radius:3px 3px 0 0;"><?php _e( 'Image Uploader: Images are uploaded to the', 'dynamik' ); if( $dynamik_multisite ) { echo '<code>/wp-content/blogs.dir/' . $dynamik_multisite . '/files/dynamik-gen/theme/images/</code>'; } else { echo '<code>/wp-content/uploads/dynamik-gen/theme/images/</code>'; } _e( 'directory.', 'dynamik' ); ?></h3>
		<div style="float:left; padding:10px 10px 10px 0; border:1px solid #E3E3E3; border-top:0; background:#FFFFFF;">
			<div class='placeholder'>
			
				<div class='containercontent'>
					<div class='containercontent-input'>
						<p>
							<form method="post" action="?page=dynamik-design&activetab=dynamik-design-options-nav-image-uploader&fct=upload" enctype="multipart/form-data" >
								<input type="file" name="image" size="60" class="fileinput" ></input>
							<div id="upload-progress" style="display:none" class="uploadprogress">
								<?php _e( 'Please wait, uploading image.', 'dynamik' ); ?>
							</div>
						</p>
					</div>
			
					<?php if( !empty( $message ) ) { echo $message; } ?>
			
					<div class="buttoncontainer">
						<input type="submit" name="upload" value="Upload Image" class="upload-button button" onClick="displayLoading();"></input>
					</div>
						</form>
				<!--This code displays success and error messages when they occur-->
				</div>

			</div>
			<form method="post" action="?page=dynamik-design&activetab=dynamik-design-options-nav-image-uploader&fct=bulkdelete" onSubmit="return verify()">
			<?php listimages(); ?>
			<div class="buttoncontainer">
				<p style="margin-left:7px;">
					<input class="upload-button button" type="submit" value="Delete Selected Images" name="action"/>
				</p>
				
				<span onclick="jQuery('input[type=checkbox].image_check').removeAttr('checked')" class="select-all-images button"><?php _e( 'Deselect All', 'dynamik' ); ?></span>		
				<span onclick="jQuery('input[type=checkbox].image_check').attr('checked', 'checked')" class="select-all-images button"><?php _e( 'Select All', 'dynamik' ); ?></span>				
			</div>
			</form>
		</div>
	</div>
</div>