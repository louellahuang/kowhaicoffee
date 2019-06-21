<?php 

// custom post type
function product_post_type() 
{
	$supports = array(
		'title', // post title
		'author', // post author
		'thumbnail', // featured images
		);
		
	$labels = array(
		'name' => _x('Product', 'plural'),
		'singular_name' => _x('Product', 'singular'),
		'menu_name' => _x('Product', 'admin menu'),
		'name_admin_bar' => _x('Product', 'admin bar'),
		'add_new' => _x('Add New', 'add new'),
		'add_new_item' => __('Add New Product'),
		'new_item' => __('New Product'),
		'edit_item' => __('Edit Products'),
		'view_item' => __('View Products'),
		'all_items' => __('All Products'),
		'search_items' => __('Search Products'),
		'not_found' => __('No Products found.'),
		);

	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'menu_icon' => 'dashicons-store',
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'shop'),
		// 'show_in_rest' => true,
		// 'supports' => array('editor'),
		'has_archive' => false,
		'hierarchical' => false,
		// 'taxonomies'  => array( 'category' )
		);

	register_post_type('product', $args);
}

add_action('init', 'product_post_type');

// Coffee image size
function configure_image_sizes() {
	add_image_size ( 'product-thumbnail', 100 );
}

add_action ( 'after_setup_theme', 'configure_image_sizes' );

// Add taxonomy

// function product_shop_taxonomy()
// {
//     $args = array(
// 	'label' => 'All Coffees',
// 	'public' => true,
// 	'rewrite' => array( 'slug' => 'shop' ),
// 	'hierarchical' => true,
// 	'show_in_rest' => true
// 	);

//     register_taxonomy('shop', 'product', $args);
// }

// add_action('init', 'product_shop_taxonomy');

?>