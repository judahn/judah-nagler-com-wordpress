<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" class="no-pad col-md-6" >

  <header class="page-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header><!-- .entry-header -->

  <div class="table-responsive no-border">
      <table class="table ">
        <tr>
          <td class="col-sm-4">Developed for: </td>
          <td><?php the_field( 'client' ); ?></td>
        </tr>
        <tr>
          <td>Designed by: </td>
          <td><?php the_field( 'client' ); ?></td>
        </tr>
      </table>
  </div>

  <button class="btn btn-primary btn-large"><a href="<?php the_field( 'url_to_website' ); ?>">Visit site</a></button>

</article><!-- #post-## -->

<article class="sidebar page-header col-sm-6 pull-right">
  <?php the_field( 'description' ); ?><br>
</article>

