<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-md-6 col-lg-4 mb-5">
	<article class="h-100" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<div class="card card-blog-post h-100">
            <div class="card-img-top">
                <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
            </div>

            <div class="card-body entry-content h-100 p-4">
                <?php
                the_title(
                    sprintf( '<h3 class="card-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                    '</a></h3>'
                );
                ?>

                <?php if ( 'post' == get_post_type() ) : ?>
                    <!-- <p class="card-subtitle mb-4 entry-meta">
                        <?php // understrap_posted_on(); ?>
                    </p> -->
                <?php endif; ?>

                <?php the_excerpt(); ?>

                <?php
                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div>

		</div>
	</article><!-- #post-## -->
</div>
