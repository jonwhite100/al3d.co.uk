<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="row">
		<div class="col-md-12">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="entry-meta">
					<?php understrap_posted_on(); ?>
				</div>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
				?>
			</div>
			<?php putRevSlider( 'highlight-carousel5' ); ?>
		</div>
	</div>

	<footer class="entry-footer">
		<?php understrap_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
