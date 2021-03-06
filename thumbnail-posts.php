		
<ul class="clearfix row row-thumbnails list-unstyled">

	<!-- While posts exist, display them here -->
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<li class="col-xs-6 col-sm-4 col-lg-3">
			<a href="<?php the_permalink(); ?>" class="thumbnail">
				<div class="thumb-content">
					<div class="image">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail(' img-responsive');
						} else {?>
							<img class="attachment- img-responsive wp-post-image" src="holder.js/300x200/industrial">
						<?php } ?>
					</div>
					<div class="thumb-title"><h3><i class="fa fa-arrow-right"></i><?php the_title(); ?></h3></div>
					
				</div>
			</a>
		</li>

	<?php endwhile; else: ?>
	<!-- If no posts, display this message -->
		<p>There are no posts or pages here</p>
	<?php endif; ?>
</ul>