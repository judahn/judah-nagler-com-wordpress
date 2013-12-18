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

	<!-- Check for Description -->
	<?php if( get_field('description') ): ?>
		<!-- Place Description -->
		<?php the_field( 'description' ); ?><br>
	<!-- End -->
	<?php endif; ?>

	<!-- Check for URL to website -->
	<?php if( get_field('url_to_website') ): ?>
		<!-- Place Visit Button -->
		<button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>
	<!-- End -->
	<?php endif; ?>

	<div class="media">
		<!-- Check for media -->
		<?php if( get_field('media') ): ?>
			<!-- Place media -->
			<?php the_field( 'media' ); ?>
		<!-- End -->
		<?php endif; ?>
	</div>


</article><!-- #post-## -->