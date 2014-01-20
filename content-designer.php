<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" class="row" >

	hello

	<!-- Entry header -->
	<header class="page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<!-- Check for URL to website -->
	<?php if( get_field('url_to_website') ): ?>
		<!-- Place Visit Button -->
		<button class="btn btn-danger btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>
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

	<div class="description">
		<!-- Check for Description -->
		<?php if( get_field('description') ): ?>
			<!-- Place Description -->
			<?php the_field( 'description' ); ?>
		<!-- End -->
		<?php endif; ?>
      
  		<?php if( get_field('visit_website_url') ): ?> 
  			<br>
  			<a href="<?php the_field( 'visit_website_url' ); ?>" target="_blank"><button class="btn btn-info btn-large pull-left"><i class="fa fa-responsive fa-globe"></i> Visit site</button></a>
  		<?php endif; ?>
	</div>

</article><!-- #post-## -->