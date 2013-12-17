<?php

// Template Name: Portfolio Page

 ?>

<?php get_header(); ?>

<?php include 'section-opener.php' ?>




<?php

	$args = array(
		'post_type' => 'design'
	);

	$the_query = new WP_Query( $args );

 ?>

<?php get_template_part( 'content', 'page' ); ?>

<div class="clearfix row row-thumbnails">

	<!-- While posts exist, display them here -->
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<!-- Linked Title -->

		<div class="col-sm-4 col-lg-3">
			<a href="<?php the_permalink(); ?>" class="thumbnail">
				<div class="thumb-content">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail(' img-responsive');
					} else {?>
						<img class="attachment- img-responsive wp-post-image" src="holder.js/800x600/industrial">
					<?php } ?>
					<h3><?php the_title(); ?></h3>
				</div>
			</a>
		</div>

	<?php endwhile; else: ?>

	<!-- If no posts, display this message -->
		<p>There are no posts or pages here</p>

	<?php endif; ?>
</div>




<?php include 'section-closer.php' ?>

<?php get_footer(); ?>
