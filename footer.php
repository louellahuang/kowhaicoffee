<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kowhai
 */

?>

</div><!-- #content -->

<?php if (is_front_page()) : ?>

	<footer id="colophon" class="site-footer animated fadeInUp">
		<!-- <div class="site-info">
					Created by Louella Huang
				</div>.site-info -->
		<div class="social-info">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'secondary-menu',
				'menu_class'	 =>	'social-menu'
			));
			?>
		</div><!-- .social-info -->
	</footer><!-- #colophon -->

<?php else : ?>

	<footer id="colophon" class="site-footer">
		<div class="social-info">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'secondary-menu',
				'menu_class'	 =>	'social-menu'
			));
			?>
		</div><!-- .social-info -->
	</footer><!-- #colophon -->

<?php endif ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>