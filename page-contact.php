<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>

<?php include 'above-header.php' ?>
<?php include 'section-opener.php' ?>

<div class="col-page-left col-sm-6 no-pad">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>
	<?php endwhile; // end of the loop. ?>
	<?php include "edit-post-link.php"; ?>
</div>

<div class="col-sm-6">
	<img src="<?php echo get_template_directory_uri() . '/assets/img/map.png' ?>" class="hero-right" alt="">
</div>

<?php include 'section-closer.php' ?>
<?php get_footer(); ?>
