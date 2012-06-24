<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" >
	
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css" >
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" >
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >

	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.5.3.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/css_browser_selector.js"></script>

<?php wp_head(); ?>

</head>
<body>

<header class="clearfix">
	<div class="logo"></div>
	<menu class="clearfix"><?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'primary' ) ); ?></menu>
</header>