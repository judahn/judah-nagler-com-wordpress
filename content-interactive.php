<?php
/**
 * @package _tk
 */
?>

<!-- Post-## -->
<article id="post-<?php the_ID(); ?>"class="row hidden-xs">
	<!-- Entry Header -->
	<header class="page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<!-- Description -->
	<?php if( get_field('description') ): ?> 
		 <?php the_field( 'description' ); ?><br> 
	<?php endif; ?>
	
	<!-- Edit link -->
	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article>

<!-- No-Flash Mobile Alert -->
<article class="visible-xs">
	<h3></h3>
	<button class="alert alert-danger">Flash examples visible only on desktop site.</button>
</article>