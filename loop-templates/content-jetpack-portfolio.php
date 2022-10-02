<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-6">

		<article <?php post_class(""); ?> id="post-<?php the_ID(); ?>">

			<a class="portfolio-link" href="<?php esc_url( the_permalink() ); ?>">

				<div class="bubble bubble--portfolio">
			
						<figure>
							<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
						</figure>

				</div>

			</a>

			<header class="entry-header">

				<a href="<?php esc_url( the_permalink() ); ?>">

					<h2 class="entry-title"><?php the_title(); ?></h2>

				</a>

				<?php if ( 'post' === get_post_type() ) : ?>

					<div class="entry-meta">
						<?php understrap_posted_on(); ?>
					</div><!-- .entry-meta -->

				<?php endif; ?>

			</header><!-- .entry-header -->

			<div class="entry-content">

				<?php
				the_excerpt();
				//understrap_link_pages();
				?>

			</div><!-- .entry-content -->
		
		</article><!-- #post-## -->

</div>


