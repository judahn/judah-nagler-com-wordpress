<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>



	<!-- <div id="root-footer"></div> -->
</div>

<footer id="footer" class="site-footer footer row" role="contentinfo">
	<div class="container">
		<div class="footer-widgets row">
			<div class="col-sm-4 no-pad">
				<div class="widget">
					<h3>Widget 1</h3>
					<!-- The WordPress Menu goes here -->
					<!--<?php wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'container_class' => '',
							'menu_class' => 'nav navbar-nav list-unstyled',
							'fallback_cb' => '',
							'menu_id' => 'footer-menu',
							'walker' => new wp_bootstrap_navwalker()
						)
					); ?>-->
					<!-- <img id="avatar-wide" src="<?php echo get_template_directory_uri() . '/assets/img/avatar.jpg' ?>" alt=""> -->
				</div>
			</div>
			<div class="col-sm-4 no-pad">
				<div class="widget">
					<h3>Widget 2</h3>
				</div>
			</div>
			<div class="col-sm-4 no-pad">
				<div class="widget">
					<h3>Widget 3</h3>
				</div>
			</div>	
		</div>	
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-46555057-1', 'judahnagler.com');
	ga('send', 'pageview');

</script>

</body>
</html>