    <div class="table-responsive no-border">
      <table class="table">

        <?php if( get_field('client') ): ?>
        <tr>
          <td class="col-sm-4 col-md-3">Developed for: </td>
          <td>
            <?php if( get_field('client_url') ): ?><a href="<?php the_field( 'client_url' ); ?>" target="_blank"><?php endif; ?> 
               <?php the_field( 'client' ); ?>
            <?php if( get_field('client_url') ): ?></a><?php endif; ?> 
          </td>
        </tr>
        <?php endif; ?>

        <?php if( get_field('designer') ): ?>
        <tr>
          <td>Designer: </td>
          <td>
            <?php if( get_field('designer_url') ): ?><a href="<?php the_field( 'designer_url' ); ?>" target="_blank"><?php endif; ?> 
               <?php the_field( 'designer' ); ?>
            <?php if( get_field('designer_url') ): ?></a><?php endif; ?> 
          </td>
        </tr>
        <?php endif; ?>
      </table>
    </div>