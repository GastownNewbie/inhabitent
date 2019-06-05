<?php
/**
 * The single product template file.
 *
 * @package Red_Starter_Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <?php if (is_home() && !is_front_page()) : ?>
                <header class="entry-header">
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

                <?php endif; ?>

                <?php /* Start the Loop */ ?>
                <?php while (have_posts()) : the_post(); ?>

                    <!-- .entry-header -->
                    <div class="entry-meta">
                        <div class="entry-content">

                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>


                                <div class="product-only-descr">
                                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                                    <p class="product-price"><?php echo CFS()->get('product_price'); ?></p>







                                    <?php the_content(); ?>
                                    <?php
                                    wp_link_pages(array(
                                        'before' => '<div class="page-links">' . esc_html('Pages:'),
                                        'after'  => '</div>',
                                    ));
                                    ?>
                                </div>
                            </article>
                            <div class="buttons-social-media">
                                <button type="button" class="social-button-blk"><i class="fab fa-facebook-f"></i> LIKE</button>
                                <button type="button" class="social-button-blk"><i class="fab fa-twitter"></i> PIN</button>
                                <button type="button" class="social-button-blk"><i class="fab fa-pinterest"></i> TWEET</button>
                            </div>
                        </div>


                    </div><!-- .entry-meta -->




                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

            <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>

    </main><!-- #main -->


    <?php get_footer(); ?>