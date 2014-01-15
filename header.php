<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<!--[if lte IE 7]> <html class="ie7"> <![endif]-->  
<!--[if IE 8]>     <html class="ie8"> <![endif]-->  
<!--[if IE 9]>     <html class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html <?php language_attributes(); ?>>	<!--<![endif]-->  

<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="<?php echo esc_url( home_url( '/' ) ); ?>/favicon.gif">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<script type="text/javascript"> </script>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="lib/js/shivs/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	
<div class="root">



