<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>

<?php include 'section-opener.php' ?>




<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'single' ); ?>

<?php endwhile; // end of the loop. ?>



<?php get_sidebar(); ?>

<?php include 'section-closer.php' ?>

<?php get_footer(); ?>