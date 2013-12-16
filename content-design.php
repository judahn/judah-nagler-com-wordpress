<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" class="col-md-6" >

    <header class="page-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    <?php if( get_field('description') ): ?><?php the_field( 'description' ); ?><br><?php endif; ?>
    <?php if( get_field('url_to_website') ): ?>
    	<button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>
    <?php endif; ?>

</article><!-- #post-## -->



<div class="col-md-6 pull-right">

  <?php if ( has_post_thumbnail() ) { the_post_thumbnail(' ');
    } else {?>
    <!-- <img class="img-responsive" src="holder.js/600x400/industrial"> -->
  <?php } ?>

</div>
