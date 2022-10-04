<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<main class="site-main" id="main">

		<?php
		if ( have_posts() ) {
			?>
			<header class="page-header">
				<h1 class="page-title">My portfolio</h1>
				<p>Here is a collection of web design and development work I've done over the years.</p>
			</header><!-- .page-header -->
			<div class='row g-3 g-md-5'>
			<?php
			// Start the loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'loop-templates/content', 'jetpack-portfolio' );
			}?>
			</div> <?php
		} else {
			get_template_part( 'loop-templates/content', 'none' );
		}
		?>

		</main><!-- #main -->

		<?php
		// Display the pagination component.
		understrap_pagination();

		?>

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
