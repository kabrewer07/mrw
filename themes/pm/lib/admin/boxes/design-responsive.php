<?php
/**
 * Builds the Dynamik Responsive admin content.
 *
 * @package Dynamik
 */
?>

<div id="dynamik-design-options-nav-<?php echo $nav_alt_id; ?>responsive-box" class="dynamik-all-options">
	<h3 style="margin-bottom:15px;"><?php _e( 'Responsive', 'dynamik' ); ?> <span id="show-hide-responsive-options" class="dynamik-custom-fonts-button button dynamik-structure-settings-hide" style="float:none !important;"><?php _e( 'Show/Hide Options', 'dynamik' ); ?></span> <span id="responsive-design-tooltip" class="tooltip-mark tooltip-bottom-center">[?]</span></h3>
	<div class="tooltip tooltip-500">
		<h5><?php _e( 'What Is Responsive Web Design?', 'dynamik' ); ?></h5>
		<p>
			<?php _e( 'Responsive Web Design is a type of web design practice which involves the use of certain types of CSS code (as well as js code in many cases) to allow a website to "respond" to different browser widths.', 'dynamik' ); ?>
		</p>
		
		<p>
			<?php _e( 'Responsive Design is a great way to make your website more mobile friendly, adjusting to the size of the different smart phone and tablet browser sizes while still looking great in a regular desktop browser.', 'dynamik' ); ?>
		</p>
		
		<p>
			<?php _e( 'The options below provide you with the ability to easily add your own Custom CSS for each media query (transition point), allowing you to refine the responsive styles which have already been added. Just click the icon below that represents the transition point you would like your styles to focus on and that particular textarea will be displayed.', 'dynamik' ); ?>
		</p>
			
		<span class="tooltip-credit">
			<?php _e( 'Learn more about Responsive Design here:', 'dynamik' ); ?>
			<a href="http://thinkvitamin.com/design/beginners-guide-to-responsive-web-design/" target="_blank">Beginner's Guide to Responsive Web Design</a>
		</span>
	</div>
	
	<form action="/" id="responsive-options-form" name="responsive-options-form">
	<input type="hidden" name="action" value="dynamik_responsive_options_save" />
	<input type="hidden" name="security" value="<?php echo wp_create_nonce( 'responsive-options' ); ?>" />
	<div id="show-hide-responsive-options-box" class="dynamik-custom-fonts-box" style="background:none; border:none; width:804px; padding:0; float:left; display:none; position:inherit;">
		<h3 class="dynamik-wide-option-heading"><?php _e( 'Meta/Script Options', 'dynamik' ); ?></h3>
		<div style="padding-top:10px; margin-bottom:15px; border:1px solid #E3E3E3; border-top:0; background:#FFFFFF; width:802px;">
			<div class="bg-box">
				<p>
					<code>&#60;meta name=&#34;viewport&#34; content=&#34;</code><input type="text" id="dynamik-viewport-meta-content" class="responsive-option" name="dynamik[viewport_meta_content]" value="<?php if( dynamik_get_responsive( 'viewport_meta_content' ) != '' ) { echo dynamik_get_responsive( 'viewport_meta_content' ); } else { echo 'width=device-width, initial-scale=1.0'; } ?>" style="width:450px;" /><code>&#34;&#62;</code>
					<span id="viewport-meta-content-tooltip" class="tooltip-mark tooltip-center-left">[?]</span>
				</p>
				
				<div class="tooltip tooltip-500">
					<h5><?php _e( 'What Is The Viewport Meta Tag?', 'dynamik' ); ?></h5>
					<p>
						<?php _e( 'The Viewport Meta Tag, which is added to the <code>&lt;head&gt;</code> of your site, provides a means to specify to mobile browsers how your site should be displayed with regard to its scale.', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( 'The default settings provided below, for example, tell mobile browsers to display your site in it\'s actual scale as apposed to zooming in or out to compensate for the smaller browser dimensions. This is ideal for a responsive site because without it your site would most likely be displayed in it\'s desktop browser form, but much smaller in size.', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( 'In most cases you can just leave the default setting as is.', 'dynamik' ); ?>
					</p>
						
					<span class="tooltip-credit">
						<?php _e( 'Learn more about the Viewport Meta Tag here:', 'dynamik' ); ?>
						<a href="https://developer.mozilla.org/en/Mobile/Viewport_meta_tag#section_1" target="_blank">Using the viewport meta tag to control layout on mobile browsers</a>
					</span>
					
					<p style="float:left; margin-bottom:0;"><?php _e( '<strong>Default Value: <code>width=device-width, initial-scale=1.0</code></strong>', 'dynamik' ); ?></p>
				</div>
			</div>
		</div>
		
		<h3 class="dynamik-wide-option-heading"><?php _e( 'Default Media Query Options', 'dynamik' ); ?></h3>
		<div style="padding-top:10px; margin-bottom:15px; border:1px solid #E3E3E3; border-top:0; background:#FFFFFF; width:802px;">
			<div class="bg-box" style="width:364px; margin-right:0; float:left;">
				<p>
					<?php _e( 'Site #wrap Media Query Styles:', 'dynamik' ); ?> <select id="dynamik-wrap-media-query-default" class="responsive-option" name="dynamik[wrap_media_query_default]" size="1" style="width:130px;">
						<option value="default"<?php if( dynamik_get_responsive( 'wrap_media_query_default' ) == 'default' ) echo ' selected="selected"'; ?>><?php _e( 'Default', 'dynamik' ); ?></option>
						<option value="none"<?php if( dynamik_get_responsive( 'wrap_media_query_default' ) == 'none' ) echo ' selected="selected"'; ?>><?php _e( 'None', 'dynamik' ); ?></option>
					</select>
					<span id="wrap-media-query-default-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
				</p>
				
				<div class="tooltip tooltip-400">
					<h5><?php _e( 'Site #wrap "Default" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger point:</strong> 1st', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Default styles:</strong> <strong>1st trigger point</strong> = Your site #wrap margins, borders and box shadow styles are stripped to reduce unnecessary spacing around your site.', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Default Code:', 'dynamik' ); ?></h5>
					<p style="margin-bottom:0;">
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">.site-container { border: 0; margin: 0 auto; -webkit-border-radius: 0; border-radius: 0; -webkit-box-shadow: none; box-shadow: none; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">#wrap { border: 0; margin: 0 auto; -webkit-border-radius: 0; border-radius: 0; -webkit-box-shadow: none; box-shadow: none; }</textarea>', 'dynamik' );
						} ?>
					</p>
				</div>
			</div>
			
			<div class="bg-box" style="width:364px; margin-left:0; float:right;">
				<p>
					<?php _e( 'Header Media Query Styles:', 'dynamik' ); ?> <select id="dynamik-header-media-query-default" class="responsive-option" name="dynamik[header_media_query_default]" size="1" style="width:130px;">
						<option value="default"<?php if( dynamik_get_responsive( 'header_media_query_default' ) == 'default' ) echo ' selected="selected"'; ?>><?php _e( 'Default', 'dynamik' ); ?></option>
						<option value="none"<?php if( dynamik_get_responsive( 'header_media_query_default' ) == 'none' ) echo ' selected="selected"'; ?>><?php _e( 'None', 'dynamik' ); ?></option>
					</select>
					<span id="header-media-query-default-tooltip" class="tooltip-mark tooltip-center-left">[?]</span>
				</p>
				
				<div class="tooltip tooltip-500">
					<h5><?php _e( 'Header "Default" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger point:</strong> 1st', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Default styles:</strong> <strong>1st trigger point</strong> = The Header Title Area and Header Right (Widget Area) will span the full width of your Header with the Header Right area displaying below the Header Title Area, ensuring the Title Area and Widget Area content have room to display. The Title and Tagline (or logo image) will be centered.', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Default Code:', 'dynamik' ); ?></h5>
					<p style="margin-bottom:0;">
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">body.override .site-header .wrap, .title-area, .site-header .widget-area { width: 100%; } .title-area { height: 84px; padding-left: 0; text-align: center; float: none; } .site-header .widget-area { padding: 0; } .header-image .site-header .wrap .title-area { margin: 0 auto; float: none; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">body.override #header .wrap, #title-area, #header .widget-area { width: 100%; } #title-area { height: 84px; padding-left: 0; text-align: center; float: none; } #header .widget-area { padding: 0; } .header-image #header .wrap #title-area { margin: 0 auto; float: none; }</textarea>', 'dynamik' );
						} ?>
					</p>
				</div>
			</div>
			
			<div style="clear:both;"></div>
			
			<div class="bg-box" style="width:364px; margin-right:0; float:left;">
				<p>
					<?php _e( 'Navbar Media Query Styles:', 'dynamik' ); ?> <select id="dynamik-navbar-media-query-default" class="responsive-option" name="dynamik[navbar_media_query_default]" size="1" style="width:130px;">
						<option value="default"<?php if( dynamik_get_responsive( 'navbar_media_query_default' ) == 'default' ) echo ' selected="selected"'; ?>><?php _e( 'Default', 'dynamik' ); ?></option>
						<option value="vertical"<?php if( dynamik_get_responsive( 'navbar_media_query_default' ) == 'vertical' ) echo ' selected="selected"'; ?>><?php _e( 'Vertical Menu', 'dynamik' ); ?></option>
						<option value="vertical_toggle"<?php if( dynamik_get_responsive( 'navbar_media_query_default' ) == 'vertical_toggle' ) echo ' selected="selected"'; ?>><?php _e( 'Vertical Toggle', 'dynamik' ); ?></option>
						<option value="tablet_dropdown"<?php if( dynamik_get_responsive( 'navbar_media_query_default' ) == 'tablet_dropdown' ) echo ' selected="selected"'; ?>><?php _e( 'Tablet Dropdown', 'dynamik' ); ?></option>
						<option value="mobile_dropdown"<?php if( dynamik_get_responsive( 'navbar_media_query_default' ) == 'mobile_dropdown' ) echo ' selected="selected"'; ?>><?php _e( 'Mobile Dropdown', 'dynamik' ); ?></option>
						<option value="none"<?php if( dynamik_get_responsive( 'navbar_media_query_default' ) == 'none' ) echo ' selected="selected"'; ?>><?php _e( 'None', 'dynamik' ); ?></option>
					</select>
					<span id="navbar-media-query-default-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
				</p>
				
				<div class="tooltip tooltip-400 tooltip-scroll-400">
					<p>
						<?php _e( '<em>Note that both Navbars are effected by everything mentioned below.</em>', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Navbar "Default" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger point:</strong> 1st', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Default styles:</strong> <strong>1st trigger point</strong> = Primary Navigation "Extras" (if enabled) are removed (eg. Blog Feeds, Twitter, Search, etc..). Navbar pages/text are centered.', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Default Code:', 'dynamik' ); ?></h5>
					
					<p style="margin-bottom:0;">
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin-bottom:20px;">body.override .menu-primary, body.override .menu-secondary, .site-header .widget-area, .site-header .genesis-nav-menu { width: 100%; } .site-header .widget-area { float: none; } .genesis-nav-menu li.right { display: none; } ul.menu-primary, ul.menu-secondary, .site-header ul.genesis-nav-menu { float: none; text-align: center; } .menu-primary li, .menu-secondary li, .site-header .genesis-nav-menu li { display: inline-block; float: none; } .menu-primary li li, .menu-secondary li li, .site-header .genesis-nav-menu li li { text-align: left; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin-bottom:20px;">body.override .menu-primary, body.override .menu-secondary, #header .widget-area, #header .genesis-nav-menu { width: 100%; } #header .widget-area { float: none; } .genesis-nav-menu li.right { display: none; } ul.menu-primary, ul.menu-secondary, #header ul.genesis-nav-menu { float: none; text-align: center; } .menu-primary li, .menu-secondary li, #header .genesis-nav-menu li { display: inline-block; float: none; } .menu-primary li li, .menu-secondary li li, #header .genesis-nav-menu li li { text-align: left; }</textarea>', 'dynamik' );
						} ?>
					</p>
					
					<h5><?php _e( '"Vertical Menu" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger points:</strong> 1st & 6th', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Vertical Menu styles:</strong> <strong>1st trigger point</strong> = Primary Navigation "Extras" (if enabled) are removed (eg. Blog Feeds, Twitter, Search, etc..). Navbar pages/text are centered. <strong>6th trigger point</strong> = Navbar is turned into a vertical menu.', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Vertical Menu Code:', 'dynamik' ); ?></h5>
					
					<p style="margin-bottom:0;">
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">body.override .menu-primary, body.override .menu-secondary, .site-header .widget-area, .site-header .genesis-nav-menu { width: 100%; } .site-header .widget-area { float: none; } .genesis-nav-menu li.right { display: none; } ul.menu-primary, ul.menu-secondary, .site-header ul.genesis-nav-menu { float: none; text-align: center; } .menu-primary li, .menu-secondary li, .site-header .genesis-nav-menu li { display: inline-block; float: none; } .menu-primary li li, .menu-secondary li li, .site-header .genesis-nav-menu li li { text-align: left; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">body.override .menu-primary, body.override .menu-secondary, #header .widget-area, #header .genesis-nav-menu { width: 100%; } #header .widget-area { float: none; } .genesis-nav-menu li.right { display: none; } ul.menu-primary, ul.menu-secondary, #header ul.genesis-nav-menu { float: none; text-align: center; } .menu-primary li, .menu-secondary li, #header .genesis-nav-menu li { display: inline-block; float: none; } .menu-primary li li, .menu-secondary li li, #header .genesis-nav-menu li li { text-align: left; }</textarea>', 'dynamik' );
						} ?>
					</p>
					
					<p style="margin-bottom:0;">
						<?php _e( '6th trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin-bottom:20px;">.nav-primary, .nav-secondary, .site-header .widget-area, .site-header .genesis-nav-menu { height: 100%; border-bottom: 0; } .menu-primary, .menu-secondary, .site-header .menu, .menu-primary li, .menu-secondary li, .site-header .genesis-nav-menu li, .menu-primary li ul, .menu-secondary li ul, .site-header .genesis-nav-menu li ul { width: 100%; } .menu-primary li ul, .menu-secondary li ul, .site-header .genesis-nav-menu li ul { display: block; visibility: visible; height: 100%; left: 0; position: relative; } .menu-primary a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } .menu-secondary a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } .site-header .genesis-nav-menu a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } .menu-primary li li, .menu-secondary li li, .site-header .genesis-nav-menu li li { text-align: center; } .menu-primary li li a, .menu-primary li li a:link, .menu-primary li li a:visited, .menu-secondary li li a, .menu-secondary li li a:link, .menu-secondary li li a:visited, .site-header .genesis-nav-menu li li a, .site-header .genesis-nav-menu li li a:link, .site-header .genesis-nav-menu li li a:visited { width: auto; } .menu-primary li ul ul, .menu-secondary li ul ul, .site-header .genesis-nav-menu li ul ul { margin: 0; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin-bottom:20px;">#nav, #subnav, #header .widget-area, #header .genesis-nav-menu { height: 100%; border-bottom: 0; } .menu-primary, .menu-secondary, #header .menu, .menu-primary li, .menu-secondary li, #header .genesis-nav-menu li, .menu-primary li ul, .menu-secondary li ul, #header .genesis-nav-menu li ul { width: 100%; } .menu-primary li ul, .menu-secondary li ul, #header .genesis-nav-menu li ul { display: block; visibility: visible; height: 100%; left: 0; position: relative; } .menu-primary a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } .menu-secondary a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } #header .genesis-nav-menu a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } .menu-primary li li, .menu-secondary li li, #header .genesis-nav-menu li li { text-align: center; } .menu-primary li li a, .menu-primary li li a:link, .menu-primary li li a:visited, .menu-secondary li li a, .menu-secondary li li a:link, .menu-secondary li li a:visited, #header .genesis-nav-menu li li a, #header .genesis-nav-menu li li a:link, #header .genesis-nav-menu li li a:visited { width: auto; } .menu-primary li ul ul, .menu-secondary li ul ul, #header .genesis-nav-menu li ul ul { margin: 0; }</textarea>', 'dynamik' );
						} ?>
					</p>

					<h5><?php _e( '"Vertical Toggle" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger points:</strong> 1st, 3rd & 6th', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Vertical Toggle styles:</strong> <strong>1st trigger point</strong> = Primary Navigation "Extras" (if enabled) are removed (eg. Blog Feeds, Twitter, Search, etc..). Navbar pages/text are centered. <strong>3rd trigger point</strong> = Navbars and Vertical Toggle Buttons are given specific display attributes for jQuery purposes. <strong>6th trigger point</strong> = Navbar is turned into a vertical menu.', 'dynamik' ); ?>
					</p>

					<h5><?php _e( 'Vertical Toggle Code:', 'dynamik' ); ?></h5>
					
					<p style="margin-bottom:0;">
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">body.override .menu-primary, body.override .menu-secondary, .site-header .widget-area, .site-header .genesis-nav-menu { width: 100%; } .site-header .widget-area { float: none; } .genesis-nav-menu li.right { display: none; } ul.menu-primary, ul.menu-secondary, .site-header ul.genesis-nav-menu { float: none; text-align: center; } .menu-primary li, .menu-secondary li, .site-header .genesis-nav-menu li { display: inline-block; float: none; } .menu-primary li li, .menu-secondary li li, .site-header .genesis-nav-menu li li { text-align: left; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">body.override .menu-primary, body.override .menu-secondary, #header .widget-area, #header .genesis-nav-menu { width: 100%; } #header .widget-area { float: none; } .genesis-nav-menu li.right { display: none; } ul.menu-primary, ul.menu-secondary, #header ul.genesis-nav-menu { float: none; text-align: center; } .menu-primary li, .menu-secondary li, #header .genesis-nav-menu li { display: inline-block; float: none; } .menu-primary li li, .menu-secondary li li, #header .genesis-nav-menu li li { text-align: left; }</textarea>', 'dynamik' );
						} ?>
					</p>

					<p style="margin-bottom:0;">
						<?php _e( '3rd trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">.nav-primary, .nav-secondary { display: block; } .mobile-primary-toggle, .mobile-secondary-toggle { display: none; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">#nav, #subnav { display: block; } .mobile-primary-toggle, .mobile-secondary-toggle { display: none; }</textarea>', 'dynamik' );
						} ?>
					</p>
					
					<p style="margin-bottom:0;">
						<?php _e( '6th trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin-bottom:20px;">.nav-primary, .nav-secondary, .site-header .widget-area, .site-header .genesis-nav-menu { height: 100%; border-bottom: 0; } .menu-primary, .menu-secondary, .site-header .menu, .menu-primary li, .menu-secondary li, .site-header .genesis-nav-menu li, .menu-primary li ul, .menu-secondary li ul, .site-header .genesis-nav-menu li ul { width: 100%; } .menu-primary li ul, .menu-secondary li ul, .site-header .genesis-nav-menu li ul { display: block; visibility: visible; height: 100%; left: 0; position: relative; } .menu-primary a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } .menu-secondary a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } .site-header .genesis-nav-menu a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } .menu-primary li li, .menu-secondary li li, .site-header .genesis-nav-menu li li { text-align: center; } .menu-primary li li a, .menu-primary li li a:link, .menu-primary li li a:visited, .menu-secondary li li a, .menu-secondary li li a:link, .menu-secondary li li a:visited, .site-header .genesis-nav-menu li li a, .site-header .genesis-nav-menu li li a:link, .site-header .genesis-nav-menu li li a:visited { width: auto; } .menu-primary li ul ul, .menu-secondary li ul ul, .site-header .genesis-nav-menu li ul ul { margin: 0; } .nav-primary, .nav-secondary { display: none; } .mobile-primary-toggle, .mobile-secondary-toggle { display: block; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin-bottom:20px;">#nav, #subnav, #header .widget-area, #header .genesis-nav-menu { height: 100%; border-bottom: 0; } .menu-primary, .menu-secondary, #header .menu, .menu-primary li, .menu-secondary li, #header .genesis-nav-menu li, .menu-primary li ul, .menu-secondary li ul, #header .genesis-nav-menu li ul { width: 100%; } .menu-primary li ul, .menu-secondary li ul, #header .genesis-nav-menu li ul { display: block; visibility: visible; height: 100%; left: 0; position: relative; } .menu-primary a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } .menu-secondary a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } #header .genesis-nav-menu a { border-right: 0 !important; border-bottom: 1px solid #DDDDDD !important; } .menu-primary li li, .menu-secondary li li, #header .genesis-nav-menu li li { text-align: center; } .menu-primary li li a, .menu-primary li li a:link, .menu-primary li li a:visited, .menu-secondary li li a, .menu-secondary li li a:link, .menu-secondary li li a:visited, #header .genesis-nav-menu li li a, #header .genesis-nav-menu li li a:link, #header .genesis-nav-menu li li a:visited { width: auto; } .menu-primary li ul ul, .menu-secondary li ul ul, #header .genesis-nav-menu li ul ul { margin: 0; } #nav, #subnav { display: none; } .mobile-primary-toggle, .mobile-secondary-toggle { display: block; }</textarea>', 'dynamik' );
						} ?>
					</p>
					
					<h5><?php _e( '"Tablet Dropdown" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger point:</strong> 1st', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Tablet Dropdown styles:</strong> <strong>1st trigger point</strong> = The regular navbar is replaced with a dropdown menu. (Note that if a Custom Menu is added to the Header Widget Area it will not be replaced by a dropdown menu, but instead it will just center the pages/text.)', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Tablet Dropdown Code:', 'dynamik' ); ?></h5>
					
					<p style="margin-bottom:0;">
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin-bottom:20px;">.nav-primary, .nav-secondary { display: none; } .site-header .widget-area, .site-header .genesis-nav-menu { width: 100%; } .site-header .widget-area { float: none; } .site-header ul.genesis-nav-menu { float: none; text-align: center; } .site-header .genesis-nav-menu li { display: inline-block; float: none; } .site-header .genesis-nav-menu li li { text-align: left; } #dropdown-nav-wrap, #dropdown-subnav-wrap { padding: 0 20px 0 20px; display: block; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin-bottom:20px;">#nav, #subnav { display: none; } #header .widget-area, #header .genesis-nav-menu { width: 100%; } #header .widget-area { float: none; } #header ul.genesis-nav-menu { float: none; text-align: center; } #header .genesis-nav-menu li { display: inline-block; float: none; } #header .genesis-nav-menu li li { text-align: left; } #dropdown-nav-wrap, #dropdown-subnav-wrap { padding: 0 20px 0 20px; display: block; }</textarea>', 'dynamik' );
						} ?>
					</p>
					
					<h5><?php _e( '"Mobile Dropdown" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger points:</strong> 1st & 6th', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Mobile Dropdown styles:</strong> <strong>1st trigger point</strong> = Primary Navigation "Extras" (if enabled) are removed (eg. Blog Feeds, Twitter, Search, etc..). Navbar pages/text are centered. <strong>6th trigger point</strong> = The regular navbar is replaced with a dropdown menu. (Note that if a Custom Menu is added to the Header Widget Area it will not be replaced by a dropdown menu, but instead it will just center the pages/text.)', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Mobile Dropdown Code:', 'dynamik' ); ?></h5>
					
					<p style="margin-bottom:0;">
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">body.override .menu-primary, body.override .menu-secondary, .site-header .widget-area, .site-header .genesis-nav-menu { width: 100%; } .site-header .widget-area { float: none; } .genesis-nav-menu li.right { display: none; } ul.menu-primary, ul.menu-secondary, .site-header ul.genesis-nav-menu { float: none; text-align: center; } .menu-primary li, .menu-secondary li, .site-header .genesis-nav-menu li { display: inline-block; float: none; } .menu-primary li li, .menu-secondary li li, .site-header .genesis-nav-menu li li { text-align: left; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">body.override .menu-primary, body.override .menu-secondary, #header .widget-area, #header .genesis-nav-menu { width: 100%; } #header .widget-area { float: none; } .genesis-nav-menu li.right { display: none; } ul.menu-primary, ul.menu-secondary, #header ul.genesis-nav-menu { float: none; text-align: center; } .menu-primary li, .menu-secondary li, #header .genesis-nav-menu li { display: inline-block; float: none; } .menu-primary li li, .menu-secondary li li, #header .genesis-nav-menu li li { text-align: left; }</textarea>', 'dynamik' );
						} ?>
					</p>
					
					<p style="margin-bottom:0;">
						<?php _e( '6th trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">.nav-primary, .nav-secondary { display: none; } #dropdown-nav-wrap, #dropdown-subnav-wrap { padding: 0 20px 0 20px; display: block; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">#nav, #subnav { display: none; } #dropdown-nav-wrap, #dropdown-subnav-wrap { padding: 0 20px 0 20px; display: block; }</textarea>', 'dynamik' );
						} ?>
					</p>
				</div>
			</div>
			
			<div class="bg-box" style="width:364px; margin-left:0; float:right;">
				<p>
					<?php _e( 'Content/Sidebar Media Query Styles:', 'dynamik' ); ?> <select id="dynamik-content-media-query-default" class="responsive-option" name="dynamik[content_media_query_default]" size="1" style="width:130px;">
						<option value="default"<?php if( dynamik_get_responsive( 'content_media_query_default' ) == 'default' ) echo ' selected="selected"'; ?>><?php _e( 'Default', 'dynamik' ); ?></option>
						<option value="none"<?php if( dynamik_get_responsive( 'content_media_query_default' ) == 'none' ) echo ' selected="selected"'; ?>><?php _e( 'None', 'dynamik' ); ?></option>
					</select>
					<span id="content-media-query-default-tooltip" class="tooltip-mark tooltip-center-left">[?]</span>
				</p>
				
				<div class="tooltip tooltip-500">
					<h5><?php _e( 'Content/Sidebar "Default" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger point:</strong> 1st', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Default styles:</strong> <strong>1st trigger point</strong> = The sidebars get pushed below the content, with both the main content and sidebars stretching to full width, enabling both Content and Sidebars ample room to display in any browser width.', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Default Code:', 'dynamik' ); ?></h5>
					<p style="margin-bottom:0;">
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">body.override .content-sidebar-wrap, body.override .content { width: 100%; } body.override .site-inner { padding-bottom: 10px; } .content { padding: 0; } body.override .breadcrumb { margin: 0 0 30px; } body.override .sidebar-primary, body.override .sidebar-secondary { width: 100%; float: left; } .sidebar-primary { margin: 20px 0 0; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:70px; margin:0;">body.override #content-sidebar-wrap, body.override #content { width: 100%; } body.override #inner { padding-bottom: 10px; } #content { padding: 0; } body.override .breadcrumb { margin: 0 0 30px; } body.override #sidebar, body.override #sidebar-alt { width: 100%; float: left; } #sidebar { margin: 20px 0 0; }</textarea>', 'dynamik' );
						} ?>
					</p>
				</div>
			</div>
			
			<div style="clear:both;"></div>
			
			<div class="bg-box" style="width:364px; margin-right:0; float:left;">
				<p>
					<?php _e( 'EZ Widget Area Media Query Styles:', 'dynamik' ); ?> <select id="dynamik-ez-media-query-default" class="responsive-option" name="dynamik[ez_media_query_default]" size="1" style="width:130px;">
						<option value="default"<?php if( dynamik_get_responsive( 'ez_media_query_default' ) == 'default' ) echo ' selected="selected"'; ?>><?php _e( 'Default', 'dynamik' ); ?></option>
						<option value="delayed"<?php if( dynamik_get_responsive( 'ez_media_query_default' ) == 'delayed' ) echo ' selected="selected"'; ?>><?php _e( 'Delayed', 'dynamik' ); ?></option>
						<option value="none"<?php if( dynamik_get_responsive( 'ez_media_query_default' ) == 'none' ) echo ' selected="selected"'; ?>><?php _e( 'None', 'dynamik' ); ?></option>
					</select>
					<span id="ez-media-query-default-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
				</p>
				
				<div class="tooltip tooltip-400 tooltip-scroll-400">
					<h5><?php _e( 'EZ "Default" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger point:</strong> 1st', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Default styles:</strong> <strong>1st trigger point</strong> = The EZ Home Container, the EZ Widget Areas and any content wrapped in Column Classes that have two or more side-by-side columns will be set to full width, displaying one on top of the other. This will ensure that as the browser narrows the content still has adequate horizontal space to properly display.', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Default Code:', 'dynamik' ); ?></h5>
					<p style="margin-bottom:0;">
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php _e( '<textarea style="width:100%; min-height:70px; margin-bottom:20px;">#ez-home-container-wrap, #ez-home-sidebar-wrap { width: 100%; } #ez-home-sidebar-wrap { margin: 20px 0 0; float: left; } .five-sixths, .four-fifths, .four-sixths, .one-fifth, .one-fourth, .one-half, .one-sixth, .one-third, .three-fifths, .three-fourths, .three-sixths, .two-fifths, .two-fourths, .two-sixths, .two-thirds { width: 100%; padding: 0 0 25px; } .first { padding-top: 0 !important; } #ez-home-slider.ez-widget-area, .slider-inside #ez-home-slider.ez-widget-area { padding-bottom: 0; } #home-hook-wrap { padding-bottom: 0; } #ez-home-container-wrap, .ez-home-container-area, #ez-feature-top-container, #ez-fat-footer-container { margin: 0 auto; padding-bottom: 0; } body.override.fat-footer-inside #ez-fat-footer-container-wrap { margin-top: 0; margin-bottom: 20px; } #ez-home-container-wrap .ez-widget-area, #ez-feature-top-container .ez-widget-area, #ez-fat-footer-container .ez-widget-area { width: 100%; padding-bottom: 20px; padding-left: 0 !important; } #ez-home-sidebar-wrap { margin: 0; }</textarea>', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'EZ "Delayed" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger points:</strong> 1st & 4th', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Delayed styles:</strong> <strong>1st trigger point</strong> = The EZ Home Container and the EZ Home Sidebar both stretch to full width with the Home Sidebar displaying below the rest of the EZ Homepage Content (this, of course, has no effect if you are not currently using the EZ Home Sidebar). <strong>4th trigger point</strong> = The EZ Widget Areas and any content wrapped in Column Classes that have two or more side-by-side columns will be set to full width, displaying one on top of the other. This will ensure that as the browser narrows the content still has adequate horizontal space to properly display.', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Delayed Code:', 'dynamik' ); ?></h5>
					<p style="margin-bottom:0;">
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php _e( '<textarea style="width:100%; min-height:70px; margin:0;">#ez-home-container-wrap, #ez-home-sidebar-wrap { width: 100%; } #ez-home-sidebar-wrap { margin: 20px 0 0; float: left; }</textarea>', 'dynamik' ); ?>
					</p>
					
					<p style="margin-bottom:0;">
						<?php _e( '4th trigger point:', 'dynamik' ); ?><br />
						<?php _e( '<textarea style="width:100%; min-height:70px; margin:0;">.five-sixths, .four-fifths, .four-sixths, .one-fifth, .one-fourth, .one-half, .one-sixth, .one-third, .three-fifths, .three-fourths, .three-sixths, .two-fifths, .two-fourths, .two-sixths, .two-thirds { width: 100%; padding: 0 0 25px; } .first { padding-top: 0 !important; } #ez-home-slider.ez-widget-area, .slider-inside #ez-home-slider.ez-widget-area { padding-bottom: 0; } #home-hook-wrap { padding-bottom: 0; } #ez-home-container-wrap, .ez-home-container-area, #ez-feature-top-container, #ez-fat-footer-container { margin: 0 auto; padding-bottom: 0; } body.override.fat-footer-inside #ez-fat-footer-container-wrap { margin-top: 0; margin-bottom: 20px; } #ez-home-container-wrap .ez-widget-area, #ez-feature-top-container .ez-widget-area, #ez-fat-footer-container .ez-widget-area { width: 100%; padding-bottom: 20px; padding-left: 0 !important; } #ez-home-sidebar-wrap { margin: 0; }</textarea>', 'dynamik' ); ?>
					</p>
				</div>
			</div>
			
			<div class="bg-box" style="width:364px; margin-left:0; float:right;">
				<p>
					<?php _e( 'Footer Media Query Styles:', 'dynamik' ); ?> <select id="dynamik-footer-media-query-default" class="responsive-option" name="dynamik[footer_media_query_default]" size="1" style="width:130px;">
						<option value="default"<?php if( dynamik_get_responsive( 'footer_media_query_default' ) == 'default' ) echo ' selected="selected"'; ?>><?php _e( 'Default', 'dynamik' ); ?></option>
						<option value="none"<?php if( dynamik_get_responsive( 'footer_media_query_default' ) == 'none' ) echo ' selected="selected"'; ?>><?php _e( 'None', 'dynamik' ); ?></option>
					</select>
					<span id="footer-media-query-default-tooltip" class="tooltip-mark tooltip-center-left">[?]</span>
				</p>
				
				<div class="tooltip tooltip-500">
					<h5><?php _e( 'Footer "Default" Info:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '<strong>@media query trigger point:</strong> 1st', 'dynamik' ); ?>
					</p>
					
					<p>
						<?php _e( '<strong>Effect of Default styles:</strong> <strong>1st trigger point</strong> = Footer text will center, accommodating narrower screens.', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Default Code:', 'dynamik' ); ?></h5>
					<p>
						<?php _e( '1st trigger point:', 'dynamik' ); ?><br />
						<?php if( dynamik_get_settings( 'html_five_active' ) ) {
							_e( '<textarea style="width:100%; min-height:50px; margin:0;">.site-footer .creds, .site-footer .gototop { width: 100%; text-align: center; float: none; }</textarea>', 'dynamik' );
						} else {
							_e( '<textarea style="width:100%; min-height:50px; margin:0;">#footer .creds, #footer .gototop { width: 100%; text-align: center; float: none; }</textarea>', 'dynamik' );
						} ?>
					</p>
				</div>
			</div>
			
			<div style="clear:both;"></div>
			
			<div style="display:none;" id="dynamik-display-dropdown-menu-text-box">
			
				<div class="bg-box" style="width:364px; margin-right:0; float:left;">
					<p>
						<?php _e( 'Dropdown Menu 1 Text:', 'dynamik' ); ?>
						<input type="text" id="dynamik-dropdown-menu-1-text" class="responsive-option" name="dynamik[dropdown_menu_1_text]" value="<?php echo dynamik_get_responsive( 'dropdown_menu_1_text' ) ?>" style="width:205px;" />
						<span id="dropdown-menu-1-text-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
					</p>
					
					<div class="tooltip tooltip-300">
						<p>
							<?php _e( 'This is the text that displays in your Vertical Toggle, Tablet or Mobile Dropdown menus by default.', 'dynamik' ); ?>
						</p>
						
						<p>
							<?php _e( '<strong>Please Note:</strong> To assign specific Custom Menus when using the Dropdown Menus go to', 'dynamik' ); ?>
							<a href="<?php echo admin_url( 'nav-menus.php' ); ?>"><?php _e( '<b>(Appearance > Menus)</b>', 'dynamik' ); ?></a>
							<?php _e( 'and set them in the "Theme Locations" section.', 'dynamik' ); ?>
						</p>
					</div>
				</div>
				
				<div class="bg-box" style="width:364px; margin-left:0; float:right;">
					<p>
						<?php _e( 'Dropdown Menu 2 Text:', 'dynamik' ); ?>
						<input type="text" id="dynamik-dropdown-menu-2-text" class="responsive-option" name="dynamik[dropdown_menu_2_text]" value="<?php echo dynamik_get_responsive( 'dropdown_menu_2_text' ) ?>" style="width:230px;" />
					</p>
				</div>

				<div class="bg-box vertical-toggle-button-styles-bg-box" style="width:760px; margin-right:0; float:left; display:none;">
					<p>
						<?php _e( 'Vertical Toggle Button Styles:', 'dynamik' ); ?> <span id="vertical-toggle-button-styles-tooltip" class="tooltip-mark tooltip-center-right">[?]</span>
						<div class="tooltip tooltip-400">
							<p>
								<?php _e( 'Customize the Vertical Toggle Button styles in the textarea below.', 'dynamik' ); ?>
							</p>
						</div>
						<textarea id="dynamik-vertical-toggle-button-styles" class="responsive-option dynamik-tabby-textarea" name="dynamik[vertical_toggle_button_styles]" style="width:100%; height:150px;"><?php if( dynamik_get_responsive( 'vertical_toggle_button_styles' ) ) echo dynamik_get_responsive( 'vertical_toggle_button_styles' ); ?></textarea>
					</p>
				</div>
				
				<div style="clear:both;"></div>
			
			</div>
		</div>
	</div>
	
	<div class="dynamik-structure-settings-hide">
	
	<div id="responsive-nav">
		<span id="query-1" class="responsive-icon responsive-icon-first responsive-hover-first"></span>
		<span id="query-2" class="responsive-icon"></span>
		<span id="query-3" class="responsive-icon"></span>
		<span id="query-4" class="responsive-icon"></span>
		<span id="query-5" class="responsive-icon"></span>
		<span id="query-6" class="responsive-icon"></span>
	</div>
	
	<div id="query-1-box" class="query-box-all">
		<h3 class="dynamik-wide-option-heading"><?php _e( 'Tablet Landscape Cascading @media query <strong>(1st)</strong>', 'dynamik' ); ?> <span id="media-query-large-cascading-tooltip" class="tooltip-mark tooltip-bottom-center">[?]</span></h3>
		<div class="tooltip tooltip-500">
			<p>
				<?php _e( 'The max-width value below is based on your default layout\'s "Wrap Width" plus your Wrap\'s "Left/Right Padding" value times two (to account for both left and right). So the default equation to reach the below max-width value is: ', 'dynamik' ); ?>
			</p>
			
			<p>
				<?php _e( 'Wrap Width: 960px + Left/Right Wrap Padding: 0px X 2 = 960px', 'dynamik' ); ?>
			</p>
			
			<p>
				<?php _e( 'So as you change those values the max-width value in the 1st, 2nd and 3rd media queries will change as well.', 'dynamik' ); ?>
			</p>
			
			<p>
				<?php _e( '<strong>Please Note:</strong> Therefore your non-Default Layout Widths will play no role in determining this max-width value. So this first media query transition will be dependent on your Default Layout dimensions meaning your non-Default Layouts, ideally, should reflect the same Wrap Width as your Default Layout. Really, this should be the case in the vast majority of situations since a site\'s Wrap Width should not change as you click through its pages. Maybe a Landing Page is an exception, but even then it doesn\'t have to be.', 'dynamik' ); ?>
			</p>
		</div>
		<div style="padding-top:10px; margin-bottom:15px; border:1px solid #E3E3E3; border-top:0; background:#FFFFFF; width:802px;">
			<div class="bg-box">
				<p>
					<strong><code>@media only screen and (max-width: <span class="responsive-wrap-width">960</span>px) { }</code></strong>
					<textarea id="dynamik-media-query-large-cascading-content" class="responsive-option dynamik-tabby-textarea" name="dynamik[media_query_large_cascading_content]" style="width:100%; height:250px;"><?php if( dynamik_get_responsive( 'media_query_large_cascading_content' ) ) echo dynamik_get_responsive( 'media_query_large_cascading_content' ); ?></textarea><br />
				</p>
			</div>
		</div>
	</div>
	
	<div id="query-2-box" class="query-box-all">
		<h3 class="dynamik-wide-option-heading"><?php _e( 'Tablet Landscape Specific @media query <strong>(2nd)</strong>', 'dynamik' ); ?></h3>
		<div style="padding-top:10px; margin-bottom:15px; border:1px solid #E3E3E3; border-top:0; background:#FFFFFF; width:802px;">
			<div class="bg-box">
				<p>
					<strong><code>@media only screen and (min-width: 768px) and (max-width: <span class="responsive-wrap-width">960</span>px) { }</code></strong><br />
					<textarea id="dynamik-media-query-large-content" class="responsive-option dynamik-tabby-textarea" name="dynamik[media_query_large_content]" style="width:100%; height:250px;"><?php echo dynamik_get_responsive( 'media_query_large_content' ); ?></textarea><br />
				</p>
			</div>
		</div>
	</div>
	
	<div id="query-3-box" class="query-box-all">
		<h3 class="dynamik-wide-option-heading"><?php _e( 'Tablet Portrait to Tablet Landscape Specific @media query <strong>(3rd)</strong>', 'dynamik' ); ?></h3>
		<div style="padding-top:10px; margin-bottom:15px; border:1px solid #E3E3E3; border-top:0; background:#FFFFFF; width:802px;">
			<div class="bg-box">
				<p>
					<strong><code>@media only screen and (min-width: 480px) and (max-width: <span class="responsive-wrap-width">960</span>px) { }</code></strong><br />
					<textarea id="dynamik-media-query-medium-large-content" class="responsive-option dynamik-tabby-textarea" name="dynamik[media_query_medium_large_content]" style="width:100%; height:250px;"><?php echo dynamik_get_responsive( 'media_query_medium_large_content' ); ?></textarea><br />
				</p>
			</div>
		</div>
	</div>
	
	<div id="query-4-box" class="query-box-all">
		<h3 class="dynamik-wide-option-heading"><?php _e( 'Tablet Portrait Cascading @media query <strong>(4th)</strong>', 'dynamik' ); ?></h3>
		<div style="padding-top:10px; margin-bottom:15px; border:1px solid #E3E3E3; border-top:0; background:#FFFFFF; width:802px;">
			<div class="bg-box">
				<p>
					<strong><code>@media only screen and (max-width: 767px) { }</code></strong><br />
					<textarea id="dynamik-media-query-medium-cascading-content" class="responsive-option dynamik-tabby-textarea" name="dynamik[media_query_medium_cascading_content]" style="width:100%; height:250px;"><?php if( dynamik_get_responsive( 'media_query_medium_cascading_content' ) ) echo dynamik_get_responsive( 'media_query_medium_cascading_content' ); ?></textarea><br />
				</p>
			</div>
		</div>
	</div>
	
	<div id="query-5-box" class="query-box-all">
		<h3 class="dynamik-wide-option-heading"><?php _e( 'Mobile Landscape to Tablet Portrait Specific @media query <strong>(5th)</strong>', 'dynamik' ); ?></h3>
		<div style="padding-top:10px; margin-bottom:15px; border:1px solid #E3E3E3; border-top:0; background:#FFFFFF; width:802px;">
			<div class="bg-box">
				<p>
					<strong><code>@media only screen and (min-width: 480px) and (max-width: 767px) { }</code></strong><br />
					<textarea id="dynamik-media-query-medium-content" class="responsive-option dynamik-tabby-textarea" name="dynamik[media_query_medium_content]" style="width:100%; height:250px;"><?php echo dynamik_get_responsive( 'media_query_medium_content' ); ?></textarea><br />
				</p>
			</div>
		</div>
	</div>
	
	<div id="query-6-box" class="query-box-all">
		<h3 class="dynamik-wide-option-heading"><?php _e( 'Mobile Portrait Specific @media query <strong>(6th)</strong>', 'dynamik' ); ?></h3>
		<div style="padding-top:10px; margin-bottom:15px; border:1px solid #E3E3E3; border-top:0; background:#FFFFFF; width:802px;">
			<div class="bg-box">
				<p>
					<strong><code>@media only screen and (max-width: 479px) { }</code></strong><br />
					<textarea id="dynamik-media-query-small-content" class="responsive-option dynamik-tabby-textarea" name="dynamik[media_query_small_content]" style="width:100%; height:250px;"><?php echo dynamik_get_responsive( 'media_query_small_content' ); ?></textarea><br />
				</p>
			</div>
		</div>
	</div>
	
	</div><!-- End .dynamik-structure-settings-hide -->
	
	</form>
</div>