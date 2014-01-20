<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header hidden-sm hidden-md hidden-lg">

		<?php if ( get_the_ID() == 163): ?>
		<h1 class="page-title">Blog</h1>
		<?php elseif( is_front_page()): ?>
		<h1 class="page-title">Judah Nagler</h1>
		<?php else: ?>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if( the_content() != "" ): ?>
	<div class="entry-content">
		the_content();
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<?php endif; ?>
	<!--<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>-->
</article><!-- #post-## -->
