<?php
/**
 * The template for displaying archive products.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <!-- Products Categories --->
            <header class="entry-header">
                <h1 class="shop-stuff-header">Shop Stuff</h1>


                <div class="fp-products-return">


                    <?php
                    $terms = get_terms(
                        array(
                            'taxonomy' => 'product-type',
                            'hide_empty' => 0
                        )
                    );
                    ?>
                    <ul class="product-terms">
                        <?php
                        foreach ($terms as $term) :
                            ?>

                            <a class="term-descript-prod-type" href="<?php echo get_term_link($term); ?>">
                                <?php echo $term->name; ?>
                            </a>
                            </li>
                        <?php
                    endforeach;
                    ?>
                    </ul>
                </div>

            </header><!-- .entry-header -->

            <!-- End of products categories -->


            <div class="grid-articles">
                <div class="entry-content">

                    <?php /* Start the Loop */ ?> <?php while (have_posts()) : the_post(); ?> <?php
                                                                                                    ?> <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <?php if (has_post_thumbnail()) : ?>
                                <a class="thumb-nail-post-link" href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('large'); ?></a>

                            <?php endif; ?>

                            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?> <?php echo CFS()->get('product_price'); ?> <?php if ('post' === get_post_type()) : ?> <?php endif; ?> </article> <!-- #post-## -->



                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>
                    <?php echo CFS()->get('product_price'); ?>

                <?php endif; ?>
            </div>
        </div><!-- .entry-content -->


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>