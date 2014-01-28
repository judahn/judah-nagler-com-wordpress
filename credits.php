    <div class="credits table-responsive no-border">
      <table class="table">

        <?php if( get_field('client') ): ?>
        <tr>
          <td class="col-sm-4 col-md-4 no-pad-left">Developed for: </td>
          <td>
            <?php if( get_field('client_url') ): ?><a href="<?php the_field( 'client_url' ); ?>" target="_blank"><?php endif; ?> 
               <?php the_field( 'client' ); ?>
            <?php if( get_field('client_url') ): ?></a><?php endif; ?> 
          </td>
        </tr>
        <?php endif; ?>

      </table>
    </div>