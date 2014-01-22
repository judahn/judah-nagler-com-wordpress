<div id="cherry-blossoms" class="pos-abs">
	<div id="cherry-blossom-main" class="pos-rel" data-stellar-ratio="1.5"></div>
</div>

<?php $title_ratio = "0.17"; ?>



<article class="row above-header">
	<div id="above-header-container" class="container">
		<?php if ( get_the_ID() == 163): ?>
		<h1 class="pos-abs hidden-xs" data-stellar-ratio="<?php echo $title_ratio; ?>">Blog</h1>
		<?php elseif( is_front_page()): ?>
		<h1 class="pos-abs hidden-xs" data-stellar-ratio="<?php echo $title_ratio; ?>">Judah Nagler</h1>
		<?php else: ?>
		<h1 class="pos-abs hidden-xs" data-stellar-ratio="<?php echo $title_ratio; ?>"><?php the_title(); ?></h1>
		<?php endif; ?>
	</div>
</article>