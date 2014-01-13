<?php get_header(); ?>
<?php include 'above-header.php' ?>
<?php include 'section-opener.php' ?>

	<?php
		$args = array(
			'post_type' => 'responsive',
			'posts_per_page' => '-1',
			'orderby' => 'menu_order',
			'order' => 'ASC',
		);
		$the_query = new WP_Query( $args );
	    $the_query->get_posts();
	?>
	<?php include 'thumbnail-posts.php' ?>

<?php include 'section-closer.php' ?>
<?php get_footer(); ?>