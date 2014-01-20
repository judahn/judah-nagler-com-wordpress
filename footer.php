<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>



	<div id="root-footer"></div>
</div>

<footer id="footer" class="site-footer footer row" role="contentinfo">

	<div class="container">
		<div class="footer-widgets row">
			<?php if ( dynamic_sidebar('Footer') ) : else : endif; ?>
		</div>	
	</div><!-- close .container -->

	<div id="bottom-footer" class="row">
		<div class="container">
			<div class="col-sm-6">
				&copy; 2014 <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Judah Nagler</a> <br class="visible-xs">All rights reserved <a href="tel://1-855-779-3248"><i class="fa fa-phone"></i>855 779 3248</a>
			</div>
			<div class="col-sm-6 pull-right text-right">
				Cherry blossom painting <br class="visible-xs"> by <a href="http://www.killlovewithguns.com" target="_blank">Anna-Marie Smith</a><i class="fa fa-pagelines"></i>
			</div>
		</div>
	</div>
	
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