    <div class="credits">

        <?php if( get_field('client') ): ?>
        <p>Developed for: 
          <?php if( get_field('client_url') ): ?><a href="<?php the_field( 'client_url' ); ?>" target="_blank"><?php endif; ?> <?php the_field( 'client' ); ?></a>
        <?php endif; ?></p>

    </div>