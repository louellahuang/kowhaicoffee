<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kowhai
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'kowhai'); ?></a>

		<header id="masthead" class="site-header">
			<?php if (is_front_page()) : ?>

				<nav id="site-navigation" class="kowhai-navigation animated slideInDown">

					<div class="site-branding animated fadeInDown">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->

					<input class="menu-btn menu-toggle" type="checkbox" id="menu-btn" aria-controls="primary-menu" aria-expanded="false">
					<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'	 =>	'top-menu'
					));
					?>

				</nav><!-- #site-navigation -->

			<?php else : ?>

				<nav id="site-navigation" class="kowhai-navigation">

					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->

					<input class="menu-btn" type="checkbox" id="menu-btn">
					<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'	 =>	'top-menu'
					));
					?>

				</nav><!-- #site-navigation -->

			<?php endif ?>


		</header><!-- #masthead -->


		<?php if (is_front_page()) : ?>

			<div id="content" class="site-content animated fadeInUp">

			<?php else : ?>

				<div id="content" class="site-content">

				<?php endif ?>