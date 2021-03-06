	<nav class="site-navigation" role="navigation" >
		<div class="site-navigation-inner col-sm-12 row affix-top" <?php if( !is_single() ): ?>data-spy="affix" data-offset-top="500" <?php endif; ?>>
			<div class="navbar navbar-inverse <?php if( is_single() ): ?>navbar-static-top <?php else: ?>navbar-static-top <?php endif; ?>'">
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
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <img id="avatar" src="<?php echo get_template_directory_uri() . '/assets/img/avatar.png' ?>" alt=""><?php bloginfo( 'name' ); ?></a>
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
							<!-- <li>
								<a href="http://www.bitbucket.org/judahn" target="_blank">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-bitbucket.png' ?>" alt="">
								</a>
							</li> -->
							<li>
								<a href="http://www.linkedin.com/in/judahnagler" target="_blank">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-linkedin.png' ?>" alt="">
								</a>
							</li>
							<li>
								<a href="http://twitter.com/JudahNaglerWeb" target="_blank">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-twitter.png' ?>" alt="">
								</a>
							</li>
							<!-- <li>
								<a href="http://www.vimeo.com/judahnagler" target="_blank">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-vimeo.png' ?>" alt="">
								</a>
							</li> -->
							<!-- <li>
								<a href="http://www.pinterest.com/judahn" target="_blank">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-pinterest.png' ?>" alt="">
								</a>
							</li> -->
							<li>
								<a href="http://www.facebook.com/judahnagler.web" target="_blank">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-facebook.png' ?>" alt="">
								</a>
							</li>
							
							<!--<li>
								<a href="http://www.instagram.com/menelec" target="_blank">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-instagram.png' ?>" alt="">
								</a>
							</li>
							<li>
								<a href="http://www.google.com/+JudahNagler" target="_blank">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-google.png' ?>" alt="">
								</a>
							</li>
							<li>
								<a href="http://www.youtube.com/user/judahnagler" target="_blank">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-youtube.png' ?>" alt="">
								</a>
							</li> -->
							<!-- <li>
								<a href="http://www.torproject.org" target="_blank">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/social/icon-tor.png' ?>" alt="">
								</a>
							</li> -->
						</ul>
					</div>
				</div>
			</div><!-- .navbar -->
		</div>
	</nav><!-- .site-navigation -->