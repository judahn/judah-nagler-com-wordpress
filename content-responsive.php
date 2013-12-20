<?php
/**
 * @package _tk
 */
?>

<article class="row">
  <ul class="list-inline mq-list">
    <li class="smartphone"><img src="<?php the_field( 'smartphone_thumb'); ?>" alt="" /></li>
    <li class="tablet"><img src="<?php the_field( 'tablet_thumb'); ?>" alt="" /></li>
    <li class="netbook"><img src="<?php the_field( 'netbook_thumb'); ?>" alt="" /></li>
    <li class="desktop"><img src="<?php the_field( 'desktop_thumb'); ?>" alt="" /></li>
  </ul>
</article>

<article id="post-<?php the_ID(); ?>" class="row" >

    <!-- Entry Header -->
    <header class="page-header no-pad-left">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    <div class="description col-sm-6 col-content">
      <!-- Description -->
      <?php if( get_field('description') ): ?> 
         <?php the_field( 'description' ); ?>
      <?php endif; ?>
    </div>

    <div class="col-sm-6 col-content">
      <?php include 'credits.php' ?>
      
      <?php if( get_field('url_to_live_site') ): ?> 
        <button class="btn btn-primary btn-large pull-left"><a href="<?php the_field( 'url_to_live_site' ); ?>">Visit site</a></button>
      <?php endif; ?>

      <?php if( get_field('url_to_templates') ): ?> 
        <button class="btn btn-primary btn-large pull-left"><a href="<?php the_field( 'url_to_templates' ); ?>">View templates</a></button>
      <?php endif; ?>
    </div>

</article><!-- #post-## -->

<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

