<?php
/**
 * @package _tk
 */
?>

<div class="single-portfolio">
  <article id="post-<?php the_ID(); ?>" class="row" >

      <header class="page-header col-sm-6 no-pad">
        <h1 class="entry-title">Responsive <br><span><?php the_title(); ?></span></h1>
      </header><!-- .entry-header -->

      <di class="col-sm-6 no-pad">
          <?php the_field( 'description' ); ?><br>
        <button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>
      </div>



      <ul class="list-inline mq-list">
        <li class="smartphone"><img src="<?php the_field( 'smartphone_thumb'); ?>" alt="" /></li>
        <li class="tablet"><img src="<?php the_field( 'tablet_thumb'); ?>" alt="" /></li>
        <li class="netbook"><img src="<?php the_field( 'netbook_thumb'); ?>" alt="" /></li>
        <li class="desktop"><img src="<?php the_field( 'desktop_thumb'); ?>" alt="" /></li>
      </ul>

  </article><!-- #post-## -->
</div>