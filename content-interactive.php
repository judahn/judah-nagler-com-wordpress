<?php
/**
 * @package _tk
 */
?>


<header class="page-header">
  <h1 class="entry-title"><?php the_title(); ?></h1>
</header><!-- .entry-header -->

<article id="post-<?php the_ID(); ?>"class="row hidden-xs">
  <?php if( get_field('description') ): ?> 
     <?php the_field( 'description' ); ?><br> 
  <?php endif; ?>
</article><!-- #post-## -->

<article class="visible-xs">
  <h3></h3>
  <button class="alert alert-danger">Flash examples visible only on desktop site.</button>
</article>

