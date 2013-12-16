<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" class="no-pad col-md-6" >

    <header class="page-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    <?php if( get_field('description') ): ?><?php the_field( 'description' ); ?><br><?php endif; ?>

    <div class="table-responsive no-border">
      <table class="table ">

        <?php if( get_field('client') ): ?>
        <tr>
          <td class="col-sm-4">Developed for: </td>
          <td>
            <?php if( get_field('client_url') ): ?><a href="<?php the_field( 'client_url' ); ?>" target="_blank"><?php endif; ?> 
               <?php the_field( 'client' ); ?>
            <?php if( get_field('client_url') ): ?></a><?php endif; ?> 
          </td>
        </tr>
        <?php endif; ?>

        <?php if( get_field('designer') ): ?>
        <tr>
          <td>
            <?php if( get_field('designer_url') ): ?><a href="<?php the_field( 'designer_url' ); ?>" target="_blank"><?php endif; ?> 
               <?php the_field( 'designer' ); ?>
            <?php if( get_field('designer_url') ): ?></a><?php endif; ?> 
          </td>
        </tr>
        <?php endif; ?>
      </table>
    </div>

    <?php if( get_field('url_to_website') ): ?>
      <button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>
    <?php endif; ?>

</article><!-- #post-## -->



<div class="page-header image col-md-6 pull-right no-pad">

  <?php if ( has_post_thumbnail() ) { the_post_thumbnail(' ');
    } else {?>
    <!-- <img class="img-responsive" src="holder.js/600x400/industrial"> -->
  <?php } ?>

</div>
