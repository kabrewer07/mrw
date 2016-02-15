<?php
/**
 * Builds the Settings Theme Info admin content.
 *
 * @package Extender
 */
?>

<div id="genesis-extender-settings-nav-info-box" class="genesis-extender-optionbox-outer-1col genesis-extender-all-options genesis-extender-options-display">
	<div class="genesis-extender-optionbox-2col-left-wrap">
<?php	if( !empty( $_GET['notice'] ) )
		{
			if( $_GET['notice'] == 'genesis-extender-unwritable' )
			{
?>				<div id="notice-box" style="background:#FFFBCC;border:1px solid #E6DB55;color:#555555;text-align:center;margin:15px 0px 0px 0px;padding:5px;"><strong><?php _e( 'It appears that some of your files/folders are unwritable to Genesis Extender.', 'extender' ); ?></strong></div>
<?php		}
		}
?>		
		<div class="genesis-extender-optionbox-outer-2col">
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'Genesis Extender General Information', 'extender' ); ?></h4>
				<div id="readme-box">
					<h5><?php _e( 'Using The Genesis Extender [?]Tooltips', 'extender' ); ?></h5>
					
					<p style="margin-top:-15px;">
						<?php _e( 'Genesis Extender has valuable documentation spread through the admin interface in the form of [?]Tooltips. If you find an option or setting to be unclear, chances are the nearest Tooltip will provide explanation.', 'extender' ); ?>
					</p>
					<p>
						<?php _e( 'To use the Tooltips just click on the [?] symbol to bring up the Tooltip Content Box. To close the Tooltip move your mouse pointer away from the [?] symbol. If you move your mouse pointer into the Tooltip itself then you must hover your mouse pointer over the [?] symbol to close the tooltip.', 'extender' ); ?>
					</p>
				</div>
			</div>
		</div>

		<div class="genesis-extender-optionbox-outer-2col">
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'Version Information', 'extender' ); ?></h4>
				<div class="bg-box">
					<p>
						<?php _e( 'PHP Version:', 'extender' ); ?> <b><code><?php echo PHP_VERSION ?></code></b>
					</p>
					
					<p>
						<?php _e( 'WordPress Version:', 'extender' ); ?> <b><code><?php echo bloginfo('version') ?></code></b>
					</p>

					<p>
						<?php _e( 'Genesis Version:', 'extender' ); ?> <b><code><?php echo esc_attr( PARENT_THEME_VERSION ) ?></code></b>
					</p>

					<?php if( defined( 'CHILD_THEME_NAME' ) ) { ?>
					<p>
						<?php _e( 'Child Theme Version:', 'extender' ); ?> <b><code><?php echo CHILD_THEME_NAME . ' ' . esc_attr( $my_theme->Version ) ?></code></b>
					</p>
					<?php } ?>
					
					<p>
						<?php _e( 'Genesis Extender Version:', 'extender' ); ?> <b><code><?php echo esc_attr( GENEXT_VERSION ) ?></code></b>
					</p>
				</div>
			</div>
		</div>
	
	</div>

	<div class="genesis-extender-optionbox-2col-right-wrap">
	
		<div class="genesis-extender-optionbox-outer-2col">
			<div class="genesis-extender-optionbox-inner-2col">
				<h4><?php _e( 'Genesis Extender Links & Resources', 'extender' ); ?></h4>
				<div id="resource-box">
					<h5><?php _e( 'Genesis Extender Resources', 'extender' ); ?></h5>
					
					<p style="margin-top:-15px;">
						<?php _e( 'For a selection of informational resources, including screencasts and tutorials, visit:', 'extender' ); ?>
					</p>
					<p style="margin-top:-5px;">
						<a href="https://genesisextender.desk.com/" target="_blank">https://genesisextender.desk.com/</a>
					</p>
					
					<h5><?php _e( 'Genesis Extender Support', 'extender' ); ?></h5>
					
					<p style="margin-top:-15px;">
						<?php _e( '1. Check out the knowledgebase:', 'extender' ); ?>
					</p>
					<p style="margin-top:-5px;">
						<a href="https://genesisextender.desk.com/" target="_blank">https://genesisextender.desk.com/</a>
					</p>

					<p>
						<?php _e( '2. Use the form to email support on the "My Account" page:', 'extender' ); ?>
					</p>
					<p style="margin-top:-5px;">
						<a href="http://cobaltapps.com/my-account/" target="_blank">http://cobaltapps.com/my-account/</a>
					</p>
					
					<h5><?php _e( 'Make Money Promoting Genesis Extender', 'extender' ); ?></h5>
					
					<p style="margin-top:-15px;">
						<?php _e( 'To help promote Genesis Extender and get a share of all sales you help to generate, join our affiliate program:', 'extender' ); ?>
					</p>
					<p style="margin-top:-5px;">
						<a href="http://cobaltapps.com/affiliates/" target="_blank">http://cobaltapps.com/affiliates/</a>
					</p>
				</div>
			</div>
		</div>

	</div>
</div>