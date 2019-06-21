<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kowhai
 */

get_header();
$args = array('post_type' => 'product');
$query = new WP_Query($args);
?>

<?php
$image = get_field('image');
// echo '<pre>' . var_export($image, true) . '</pre>';
$image_url = $image['sizes']['medium_large'];
$image_height = $image['sizes']['medium_large-height'];
$image_width = $image['sizes']['medium_large-width'];

$type_of_grind = get_field('type_of_grind');
$quantity = get_field('quantity');
$product_weight = get_field('product_weight');
// echo '<pre>' . var_export($product_weight, true) . '</pre>';
// echo '<pre>' . var_export($type_of_grind, true) . '</pre>';
?>

<div id="primary" class="content-area">
	<main id="main" class="product-main">
		<div class="wrapper">
			<div class="single-card">
				<div class="col col-left">
					<img class="product-image" src=" <?php echo $image_url ?> " alt=" <?php echo get_field('name') ?> ">
				</div>
				<div class="col col-right">
					<div class="text">
						<h1><?php the_title(); ?></h1>
						<h3 class="product-title"><?php echo get_field('name') ?></h3>
						<h4 class="originating-country"><?php echo get_field('originating_country'); ?></h4>
						<div class="flavour-notes">
							<p><?php echo get_field('flavour_notes'); ?></p>
						</div>
					</div>
					<label class="dropdown">
						<select name="grind-type" class="grind-type">
							<option value="beans"><?php echo $type_of_grind[0]; ?></option>
							<option value="coarse"><?php echo $type_of_grind[1]; ?></option>
							<option value="espresso"><?php echo $type_of_grind[2]; ?></option>
						</select>
						<select name="quantity" class="quantity">
							<option value="1">Quantity</option>
							<option value="1"><?php echo $quantity[0]; ?></option>
							<option value="2"><?php echo $quantity[1]; ?></option>
							<option value="3"><?php echo $quantity[2]; ?></option>
							<option value="4"><?php echo $quantity[3]; ?></option>
						</select>
						<select name="grams" class="product-weight">
							<option value="small"><?php echo $product_weight[0] ?></option>
						</select>
					</label>
					<div class="product-price single-product-price"><?php echo get_field('price'); ?></div>
					<a href="<?php the_permalink(27); ?>" class="btn-enquire">Enquire</a>
				</div>
			</div>

			<?php if ($query->max_num_pages > 1) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Previous', 'domain')); ?></div>
					<div class="nav-next"><?php previous_posts_link(__('Next <span class="meta-nav">&rarr;</span>', 'domain')); ?></div>
				</div>
			<?php endif; ?>

		</div><!-- .wrapper -->
	</main><!-- #main -->
</div><!-- #primary -->

</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>