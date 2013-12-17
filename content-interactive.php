<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" class="no-pad col-md-6" >

  <header class="page-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header><!-- .entry-header -->

  <?php include 'credits.php' ?>

  <button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>

</article><!-- #post-## -->

<article class="sidebar hidden-xs col-sm-6 pull-right">
  <!--<?php the_field( 'description' ); ?><br>-->
  	<?php if( get_field('swf_a_url') ): ?>
	[kml_flashembed movie="<?php the_field('swf_a_url') ?>" width="<?php the_field('swf_a_width') ?>" height="<?php the_field('swf_a_height') ?>"]
	<?php endif; ?>
	
</article>

<article class="visible-xs">
  <h3></h3>
  <alert class="alert alert-danger">Flash examples visible only on desktop site.</alert>
</article>

