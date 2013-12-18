<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>
<?php include 'section-opener.php' ?>

<?php
  $args = array( 'post_type' => 'responsive' );
  $the_query = new WP_Query( $args );
?>

<!-- Begin Loop -->

<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'responsive' ); ?>
	<?php _tk_content_nav( 'nav-below' ); ?>
<?php endwhile; ?>

<!-- End Loop -->

<?php include 'section-closer.php' ?>
<?php get_footer(); ?>