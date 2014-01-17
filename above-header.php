<div id="cherry-blossoms" class="pos-abs">
	<div id="cherry-blossom-main" class="pos-rel" data-stellar-ratio="1.5"></div>
</div>

<article class="row above-header">
	<div id="above-header-container" class="container">
		<?php if ( get_the_ID() == 163): ?>
		<h1 class="pos-abs hidden-xs" data-stellar-ratio="0.42">Blog</h1>
		<?php elseif( is_front_page()): ?>
		<h1 class="pos-abs hidden-xs" data-stellar-ratio="0.42">Judah Nagler</h1>
		<?php else: ?>
		<h1 class="pos-abs hidden-xs"data-stellar-ratio="0.42"><?php the_title(); ?></h1>
		<?php endif; ?>
	</div>
</article>