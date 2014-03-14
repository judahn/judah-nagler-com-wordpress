<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html class="ie"> <![endif]-->
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

	<div id="scroll-down" class="hidden-xs"></div>

<div class="root">

	<div class="pos-abs bg-img">
		<div class="pos-rel" data-stellar-ratio="0.5">
			<img src="<?php echo get_template_directory_uri() . '/assets/img/temple1c.jpg' ?>" alt="" class="bg-img-responsive">
		</div>
	</div>