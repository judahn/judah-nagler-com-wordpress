<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<nav class="site-navigation">
	<div class="container">
		<div class="row">
			<div class="site-navigation-inner col-sm-12">
				<div class="navbar navbar-inverse navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
							<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<!-- Your site title as branding in the menu -->
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span class="glyphicon glyphicon-th"></span> <?php bloginfo( 'name' ); ?></a>
						</div>

						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
								'menu_class' => 'nav navbar-nav',
								'fallback_cb' => '',
								'menu_id' => 'main-menu',
								'walker' => new wp_bootstrap_navwalker()
							)
						); ?>
						
						<div id="social-nav" class="hidden-xs ">
							<ul class="list-inline pull-right">
								<li>
									<a href="http://www.github.com/judahn" target="_blank">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-github.png' ?>" alt="">
									</a>
								</li>
								<li>
									<a href="http://www.bitbucket.org/judahn" target="_blank">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-bitbucket.png' ?>" alt="">
									</a>
								</li>
								<li>
									<a href="http://www.linkedin.com/in/judahnagler" target="_blank">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-linkedin.png' ?>" alt="">
									</a>
								</li>
								<li>
									<a href="http://www.twitter.com/judahnagler" target="_blank">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-twitter.png' ?>" alt="">
									</a>
								</li>
								<li>
									<a href="http://www.facebook.com/judah.nagler" target="_blank">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-facebook.png' ?>" alt="">
									</a>
								</li>
								<li>
									<a href="http://www.vimeo.com/judahnagler" target="_blank">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-vimeo.png' ?>" alt="">
									</a>
								</li>
								<!-- <li>
									<a href="http://www.google.com/+JudahNagler" target="_blank">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-google.png' ?>" alt="">
									</a>
								</li>
								<li>
									<a href="http://www.youtube.com/user/judahnagler" target="_blank">
										<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-youtube.png' ?>" alt="">
									</a>
								</li> -->
							</ul>
						</div>
					</div>

				</div><!-- .navbar -->
			</div>
		</div>
	</div><!-- .container -->
</nav><!-- .site-navigation -->

<!-- <div class="main-content">
	<div class="container">
		<div class="row">
			<div class="main-content-inner"> -->

