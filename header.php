<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicons/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="Mark Roberts"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/img/favicons/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicons/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicons/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicons/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicons/mstile-310x310.png" />

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-SGYJWLR6JE"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-SGYJWLR6JE');
	</script>

</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar" class="bg-primary" id="top">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

		<?php if(is_front_page( )) { ?>

			<div class="hero-content container">
				<figure class="hero-content__image">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/profile.png" alt="Illustration of Mark Roberts">
				</figure>
				<h1 class="hero-content__heading">Mark Roberts</h1>
				<h2 class="hero-content__subheading">
					<span class="hero-content__subheading__span">
						web designer&nbsp;&nbsp;<span class="hero-content__subheading__divider-1">|</span>
					</span>
					<span class="hero-content__subheading__span">
						frontend developer&nbsp;&nbsp;<span class="hero-content__subheading__divider-2">|</span>
					</span>
					<span class="hero-content__subheading__span">UX/UI specialist</span>
				</h2>
			</div>

		<?php } ?>

	</header><!-- #wrapper-navbar end -->
