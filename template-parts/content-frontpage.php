<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kowhai
 */

?>
<?php
// $thumb = kowhai_post_thumbnail();
// echo '<pre>' . var_export($thumb, true) . '</pre>';
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php kowhai_post_thumbnail(); ?>
		<div class="inner">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			<p class="lead">
				<a class="btn-info" href=" <?php echo get_permalink( 21 ) ?> " role="button">SHOP NOW</a>
			</p>
			<div class="entry-content"> <?php the_content(); ?> </div><!-- .entry-content -->
		</div>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->