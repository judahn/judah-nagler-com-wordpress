<?php
/**
 * @package _tk
 */
?>


<div class="row">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="page-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>

		<div class="entry-meta">
			<?php _tk_posted_on(); ?>
		</div><!-- .entry-meta -->

		<div class="entry-content">
			<?php the_content(); ?>
			<br>
			<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><button class="btn btn-danger"><i class="fa fa-arrow-left"></i>Back to Blog</button></a>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div>