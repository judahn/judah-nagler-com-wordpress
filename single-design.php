<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>

<?php

  $args = array(
    'post_type' => 'design'
  );

  $the_query = new WP_Query( $args );

?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'design' ); ?>
		<?php _tk_content_nav( 'nav-below' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>