<?php
/**
 * @package _tk
 */
?>

<div class="single-interactive">
  <article id="post-<?php the_ID(); ?>" class="no-pad col-md-6" >

      <header class="page-header">
        <h1 class="entry-title">Interactive <br><span><?php the_title(); ?></span></h1>
      </header><!-- .entry-header -->
      <button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>

  </article><!-- #post-## -->


      <article class="col-sm-6 pull-right">
          <?php the_field( 'description' ); ?><br>
      </article>

</div>