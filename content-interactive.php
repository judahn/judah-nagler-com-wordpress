<?php
/**
 * @package _tk
 */
?>

<!-- Post-## -->
<article id="post-<?php the_ID(); ?>"class="row">

	<!-- Entry Header -->
	<header class="page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
		
	<!-- Check for URL to website -->
	<?php if( get_field('url_to_website') ): ?>
		<!-- Place Visit Button -->
		<button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>
	<!-- End -->
	<?php endif; ?>

	<div class="media hidden-xs hidden-sm">
		<!-- Description -->
		<?php if( get_field('media') ): ?> 
			 <?php the_field( 'media' ); ?>
		<?php endif; ?>
	</div>
	
	<div class="description">
		<!-- Description -->
		<?php if( get_field('description') ): ?> 
			 <?php the_field( 'description' ); ?>
		<?php endif; ?>
	</div>

	<button class="btn btn-warning visible-xs visible-sm btn-block">Flash examples visible only on desktop site.</button>
</article>