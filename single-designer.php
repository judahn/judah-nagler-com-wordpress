<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>
<?php include 'section-opener.php' ?>

<?php
  $args = array( 'post_type' => 'designer' );
  $the_query = new WP_Query( $args );
?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'designer' ); ?>
<?php endwhile; ?>

<div class="row">
	<?php _tk_content_nav( 'nav-below' ); ?>
</div>

<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

<?php include 'section-closer.php' ?>
<?php get_footer(); ?>