<?php
/*
 WARNING: This file is part of the core Genesis framework. DO NOT edit
 this file under any circumstances. Please do all modifications
 in the form of a child theme.
 */

/**
 * Handles the header structure.
 *
 * This file is a core Genesis file and should not be edited.
 *
 * @category Genesis
 * @package  Templates
 * @author   StudioPress
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.studiopress.com/themes/genesis
 */

do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' );
wp_head(); /** we need this for plugins **/
?>
</head>
<body <?php body_class(); ?>>

<!--
#header .menu li a:hover, #header .menu li:hover a, li li a:hover {background-color: <?php //echo $_GET['color'];?> !important;
/*color : #fff;
*/}

.menu-primary li li a:active, .menu-primary li li a:hover, .menu-secondary li li a:active, .menu-secondary li li a:hover, #header .menu li li a:active, #header .menu li li a:hover {
background-color: <?php //echo $_GET['color'];?> !important;
/*color: #fff !important;
border: 1px solid #f5f5f5;*/
}-->
<style>

.snbar_section{ <?php echo $options['snbar_defaultposition'] ?>:0px;left: 0; margin: 0 auto; padding: 5px 10px 0; position:fixed;right: 0;width: 98.5%;z-index: 999999999;background-color:<?php if($_GET['color'])echo $_GET['color']; else echo '#64C9EA';?>;display:none;border-bottom:2px solid #fff;box-shadow: 0 0 1px 1px #000000;} 
.snbar_content .snbar-menu ul li .current-menu-item > a, .snbar_content .snbar-menu ul li .current_page_item > a, .snbar_content .snbar-menu ul li .current-menu-ancestor > a, .snbar_content .snbar-menu ul li .current-menu-parent > a{
		color : #fff;	
		background-color:<?php if($_GET['color'])echo $_GET['color']; else  echo '#64C9EA';?>;
		}
		.snbar_content .snbar-menu ul li a:hover{
			color : #fff;	
		background-color:<?php if($_GET['color'])echo $_GET['color']; else  echo '#64C9EA';?>;
		}
		.snbar-menu ul ul a {
			background-color: #222222;
			border-bottom: 1px solid black;
			border-left: 1px solid black;
			border-right: 1px solid black;
			color : #000; !important;
		}


/*Green Color Start*/
.executive-green input[type="button"], .executive-green input[type="submit"], .executive-green a.button, .executive-green .menu-primary li a:active, .executive-green .menu-primary .current-menu-item a, .executive-green .menu-secondary li a:active, .executive-green .menu-secondary .current-menu-item a, .executive-green .navigation li a, .executive-green .navigation li.disabled, .executive-green .navigation li a:hover, .executive-green .navigation li.active a, .executive-green .post-info .comments, .executive-green #header .menu li a:active, .executive-green #header .menu .current-menu-item a{ background-color: <?php echo $_GET['color'];?>; }
.executive-green a, .executive-green a:visited{
color: <?php echo $_GET['color'];?>;
}
.executive-green input:hover[type="button"], .executive-green input:hover[type="submit"], .executive-green a:hover.button{
	background-color: <?php echo $_GET['color'];?>;
}




/*Green Color End*/
/*Default Color Start*/
.menu-primary li a:active, .menu-primary .current-menu-item a, .menu-secondary li a:active, .menu-secondary .current-menu-item a, #header .menu li a:active, #header .menu .current-menu-item a{
	background-color:<?php echo $_GET['color'];?>;
}
a, a:visited {
color:<?php echo $_GET['color'];?>;
}

input[type="button"], input[type="submit"], a.button {
background-color: <?php echo $_GET['color'];?>;
}
input:hover[type="button"], input:hover[type="submit"], a:hover.button { 
background-color: <?php echo $_GET['color'];?>;
}
/*Default Color End*/
</style>
<?php
do_action( 'genesis_before' );
?>
<div id="wrap">
<?php
do_action( 'genesis_before_header' );
do_action( 'genesis_header' );
do_action( 'genesis_after_header' );

echo '<div id="inner">';
genesis_structural_wrap( 'inner' );
