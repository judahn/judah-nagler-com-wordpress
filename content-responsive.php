<?php
/**
 * @package _tk
 */
?>

<div class="single-portfolio">
  <article id="post-<?php the_ID(); ?>" class="no-pad col-md-6" >

      <header class="page-header">
        <h1 class="entry-title">Responsive <br><span><?php the_title(); ?></span></h1>
      </header><!-- .entry-header -->

      <div>
          <?php the_field( 'description' ); ?><br>
        <button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>
      </div>

  </article><!-- #post-## -->




  <div class="page-header image col-md-6 pull-right no-pad">

    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(' ');
      } else {?>
      <img class="img-responsive" src="holder.js/600x400/industrial">
    <?php } ?>

  </div>
</div>