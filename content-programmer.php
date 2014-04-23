<?php
/**
 * @package _tk
 */
?>

<!-- Post-## -->
<article id="post-<?php the_ID(); ?>"class="row">

	<!-- Entry Header -->
	<header class="page-header">
		<h1 class="entry-title"> <?php the_title(); ?></h1>
	</header><!-- .entry-header -->
		
	<!-- Check for URL to website -->
	<?php if( get_field('url_to_website') ): ?>
		<!-- Place Visit Button -->
		<button class="btn btn-danger btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>
	<!-- End -->
	<?php endif; ?>

	<div class="media hidden-xs hidden-sm">
		<!-- Description -->
		<?php if( get_field('media') ): ?> 
			 <?php the_field( 'media' ); ?>
		<?php endif; ?>
	</div>
	
	<div class="description col-sm-8">
		<!-- Description -->
		<?php if( get_field('description') ): ?> 
			 <?php the_field( 'description' ); ?>
		<?php endif; ?>

		<button class="btn btn-warning visible-xs visible-sm btn-block btn-no-flash">Flash examples only visible on desktop site.</button>

		<?php if( get_field('visit_website_url') ): ?> 
	  		<a href="<?php the_field( 'visit_website_url' ); ?>" target="_blank"><button class="btn btn-info btn-large pull-left"><i class="fa fa-responsive fa-globe"></i> Visit site</button></a>
	  	<?php endif; ?>	
	</div>
</article>

<?php include "edit-post-link.php"; ?>
