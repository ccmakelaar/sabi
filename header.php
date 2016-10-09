<?php
/**
 * Header template.
 *
 * @link https://lillehummer.nl
 *
 * @package lillehummernl
 */

?><!doctype html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="375">

	<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/apple-touch-icon.png">
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.png" sizes="32x32" type="image/png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<div class="wrapper">

	<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

		<div class="header-inner clearfix">

			<p class="logo" itemscope itemtype="http://schema.org/Organization">
				<a href="<?php echo esc_url( home_url() ); ?>" rel="nofollow">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo.png" width="" height="">
				</a>
			</p>

			<nav role="navigation" class="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<?php
				wp_nav_menu(array(
					'container' => false,
					'theme_location' => 'main-nav',
					'depth' => 0,
				));
				?>
			</nav>

		</div>

	</header>
