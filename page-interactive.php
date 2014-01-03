<?php

// Template Name: Portfolio Page

 ?>

<?php include 'above-header.php' ?>

<?php get_header(); ?>

<?php include 'section-opener.php' ?>

	<?php
		$args = array(
			'post_type' => 'interactive',
			'posts_per_page' => '-1',
			'orderby' => 'menu_order',
			'order' => 'ASC',
		);
		$the_query = new WP_Query( $args );
	    $the_query->get_posts();
	?>

	<?php get_template_part( 'content', 'page' ); ?>

	<?php include 'thumbnail-posts.php' ?>

<?php include 'section-closer.php' ?>

<?php get_footer(); ?>

