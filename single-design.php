<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>
<?php include 'section-opener.php' ?>

<?php
  $args = array( 'post_type' => 'design' );
  $the_query = new WP_Query( $args );
?>

<!-- Begin Loop -->

<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'design' ); ?>
<?php endwhile; ?>

<div class="row">
	<?php _tk_content_nav( 'nav-below' ); ?>
</div>
<!-- End Loop -->

<!-- Edit link -->
<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

<?php include 'section-closer.php' ?>
<?php get_footer(); ?>