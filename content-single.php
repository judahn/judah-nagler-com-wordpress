<?php
/**
 * @package _tk
 */
?>


<div class="col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="page-header">
			<h1 class="page-title"><?php the_title(); ?></h1>

			<div class="entry-meta">
				<?php _tk_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php the_content(); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div>