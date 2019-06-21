<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kowhai
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php kowhai_post_thumbnail(); ?>
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header><!-- .entry-header -->
        <div>
            <?php
            while (have_posts()) :
                the_post();
                the_content();

            endwhile; // End of the loop.
            ?>
        </div>
        <div class="wrapper">
            <?php $query = new WP_Query(array('post_type' => 'product'));
            if ($query->have_posts()) : while ($query->have_posts()) : ?>
                    <?php $query->the_post(); ?>
                    <div class="card-container">
                        <a href="<?php the_permalink(); ?>">
                            <div class="product-container grow">
                                <div class="text">
                                    <h3 class="product-title"><?php echo get_field('name') ?></h3>
                                    <h4 class="originating-country"><?php echo get_field('originating_country'); ?></h4>
                                    <div class="flavour-notes">
                                        <p><?php echo get_field('flavour_notes'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-price"><?php echo get_field('price'); ?></div>
                        </a>
                    </div>

                <?php endwhile ?>

                <?php if ($query->max_num_pages > 1) : ?>
                    <div id=" nav-below" class="navigation">
                        <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Previous', 'domain')); ?></div>
                        <div class="nav-next"><?php previous_posts_link(__('Next <span class="meta-nav">&rarr;</span>', 'domain')); ?></div>
                    </div>
                <?php endif;
        endif;
        wp_reset_postdata();
        ?>

        </div><!-- .wrapper -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>