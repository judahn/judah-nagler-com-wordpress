<?php
/**
 * @package _tk
 */
?>

<article class="row">
	<div class="container">


	</div>
</article>

<article id="post-<?php the_ID(); ?>" class="row" >

	<!-- Entry header -->
	<header class="page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<!-- Description -->
	<?php if( get_field('description') ): ?><?php the_field( 'description' ); ?><br><?php endif; ?>

	<!-- URL to website -->
	<?php if( get_field('url_to_website') ): ?>
		<button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>
	<?php endif; ?>

</article><!-- #post-## -->

<article class="row">
	<div class="col-sm-3">
		

	<!-- Soliloquy Slider -->
		<?php if( get_field('slider') ): ?>
		 <?php the_field( 'slider' ); ?>
		<?php endif; ?>
	</div>
</article>