<?php
/**
 * @package _tk
 */
?>

<div class="single-portfolio">


  <article class="row">
    <ul class="list-inline mq-list">
      <li class="smartphone"><img src="<?php the_field( 'smartphone_thumb'); ?>" alt="" /></li>
      <li class="tablet"><img src="<?php the_field( 'tablet_thumb'); ?>" alt="" /></li>
      <li class="netbook"><img src="<?php the_field( 'netbook_thumb'); ?>" alt="" /></li>
      <li class="desktop"><img src="<?php the_field( 'desktop_thumb'); ?>" alt="" /></li>
    </ul>
  </article>
  <article id="post-<?php the_ID(); ?>" class="row" >

      <header class="page-header col-sm-6 no-pad">
        <h1 class="entry-title">
          <?php the_title(); ?>
        </h1>
      </header><!-- .entry-header -->

      <div class="page-header col-sm-6 no-pad">
        <?php include 'credits.php' ?>
        <!-- <button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button> -->
      </div>

  </article><!-- #post-## -->

  <article class="row portfolio-desc">
      <?php the_field( 'description' ); ?>
  </article>
</div>