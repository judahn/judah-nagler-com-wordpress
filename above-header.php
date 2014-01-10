<div id="cherry-blossoms" class="pos-abs">
	<div id="cb-a" class="pos-rel" data-stellar-ratio="1.42"></div>
</div>

<article class="row above-header">
	<div id="above-header-container" class="container">
		<?php if ( get_the_ID() == 163): ?>
		<h1 class="pos-abs" data-stellar-ratio="0.42">Blog</h1>
		<?php else: ?>
		<h1 class="pos-abs"data-stellar-ratio="0.42"><?php the_title(); ?></h1>
		<?php endif; ?>
	</div>
</article>