<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div id="content" tabindex="-1">

	<main class="site-main" id="main">

		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<header class="entry-header">

				<div class="container">
					
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				</div>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<div class="container">
					<div class="row">
						<?php
						the_content();
						understrap_link_pages();
						?>
					</div>
				</div>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<div class="container">
					<div class="row">
						<?php understrap_entry_footer(); ?>
					</div>
				</div>
			</footer><!-- .entry-footer -->

		</article><!-- #post-## -->

	</main><!-- #main -->

</div><!-- #content -->


