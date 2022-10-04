<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-md-6">

	<a class="portfolio-link" href="<?php esc_url( the_permalink() ); ?>">

		<article <?php post_class("bubble bubble--portfolio"); ?> id="post-<?php the_ID(); ?>">

			<figure>
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			</figure>

			<div class="entry">

				<header class="entry-header">

					<h2 class="entry-title"><?php the_title(); ?></h2>

				</header><!-- .entry-header -->

				<div class="entry-content">

					<?php
					the_excerpt();
					//understrap_link_pages();
					?>

				</div><!-- .entry-content -->

			</div>
		
		</article><!-- #post-## -->

	</a>

</div>


