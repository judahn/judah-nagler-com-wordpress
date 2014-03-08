<?php
/**
 * @package _tk
 */
?>

<article class="row">

  <!-- Entry Header -->
  <header class="page-header no-pad-left">
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>

  <div class="mq-thumbs-container">

    <?php if( 
      get_field('smartphone_thumb_a') &&
      get_field(    'tablet_thumb_a') &&
      get_field(   'netbook_thumb_a') &&
      get_field(   'desktop_thumb_a') 
    ): ?> 

    <!-- Thumbs A -->

    <ul id="mq-thumbs-a" class="list-inline mq-list">
      <li class="smartphone"> <img src="<?php the_field( 'smartphone_thumb_a'); ?>" alt="" /></li>
      <li class="tablet">     <img src="<?php the_field(     'tablet_thumb_a'); ?>" alt="" /></li>
      <li class="netbook">    <img src="<?php the_field(    'netbook_thumb_a'); ?>" alt="" /></li>
      <li class="desktop">    <img src="<?php the_field(    'desktop_thumb_a'); ?>" alt="" /></li>
    </ul>
    <?php endif; ?>


    <?php if( 
      get_field('smartphone_thumb_b') &&
      get_field(    'tablet_thumb_b') &&
      get_field(   'netbook_thumb_b') &&
      get_field(   'desktop_thumb_b') 
    ): ?> 

    <!-- Thumbs B -->

    <ul id="mq-thumbs-b" class="list-inline mq-list">
      <li class="smartphone"> <img src="<?php the_field( 'smartphone_thumb_b'); ?>" alt="" /></li>
      <li class="tablet">     <img src="<?php the_field(     'tablet_thumb_b'); ?>" alt="" /></li>
      <li class="netbook">    <img src="<?php the_field(    'netbook_thumb_b'); ?>" alt="" /></li>
      <li class="desktop">    <img src="<?php the_field(    'desktop_thumb_b'); ?>" alt="" /></li>
    </ul>
    <?php endif; ?>


    <?php if( 
      get_field('smartphone_thumb_c') &&
      get_field(    'tablet_thumb_c') &&
      get_field(   'netbook_thumb_c') &&
      get_field(   'desktop_thumb_c') 
    ): ?> 

    <!-- Thumbs C -->

    <ul id="mq-thumbs-c" class="list-inline mq-list">
      <li class="smartphone"> <img src="<?php the_field( 'smartphone_thumb_c'); ?>" alt="" /></li>
      <li class="tablet">     <img src="<?php the_field(     'tablet_thumb_c'); ?>" alt="" /></li>
      <li class="netbook">    <img src="<?php the_field(    'netbook_thumb_c'); ?>" alt="" /></li>
      <li class="desktop">    <img src="<?php the_field(    'desktop_thumb_c'); ?>" alt="" /></li>
    </ul>
    <?php endif; ?>

  </div>
</article>

<article id="post-<?php the_ID(); ?>" class="row" >

    <div class="col-sm-7 col-content">
      <!-- Description -->
      <?php if( get_field('media') ): ?> 
         <?php the_field( 'media' ); ?>
      <?php endif; ?>
    </div>

    <div id="col-credits" class="col-sm-5 no-pad">

      <?php if( get_field('description') ): ?> 
        <!-- Description -->
        <div class="">
          <?php the_field( 'description' ); ?>
        </div>
      <?php endif; ?>

      <?php include 'credits.php' ?>

      <?php if( get_field('view_templates_url') ): ?> 
        <a href="<?php the_field( 'view_templates_url' ); ?>" target="_blank"><button class="btn btn-info btn-large pull-left"><i class="fa fa-responsive fa-desktop"></i> View templates</button></a>
      <?php endif; ?>
      
      <?php if( get_field('visit_website_url') ): ?> 
        <a href="<?php the_field( 'visit_website_url' ); ?>" target="_blank"><button class="btn btn-info btn-large pull-left"><i class="fa fa-responsive fa-globe"></i> Visit site</button></a>
      <?php endif; ?>
    </div>

</article><!-- #post-## -->

<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

