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

	<div class="media hidden-xs">
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

	<button class="alert alert-danger visible-xs">Flash examples visible only on desktop site.</button>
</article>