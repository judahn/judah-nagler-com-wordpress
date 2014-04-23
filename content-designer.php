<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" class="row" >

	<!-- Entry header -->
	<header class="page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="col-sm-12 col-md-7 no-pad-left">
		<div class="media">
			<!-- Check for media -->
			<?php if( get_field('media') ): ?>
				<!-- Place media -->
				<?php the_field( 'media' ); ?>
			<!-- End -->
			<?php endif; ?>
		</div>
	</div>

	<div class="description col-sm-12 col-md-5 no-pad-mobile">

		<!-- Description -->
		<?php if( get_field('description') ): ?>
			<?php the_field( 'description' ); ?>
			<?php edit_post_link( __( 'Edit', '_tk' ), '<div class="row">', '</div>' ); ?>
		<!-- End -->
		<?php endif; ?>

		<?php include 'credits.php' ?>


	  	<!-- Visit Website Button -->
		<?php if( get_field('visit_website_url') ): ?> 
		<div class="row">
			<a href="<?php the_field( 'visit_website_url' ); ?>" target="_blank"><button class="btn btn-info btn-large pull-left"><i class="fa fa-responsive fa-globe"></i> Visit site</button></a>
		</div>
		<?php endif; ?>
	</div>

</article><!-- #post-## -->

<?php include "edit-post-link.php"; ?>
