<?php
/**
 * The template for displaying archive pages for each product category.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="taxonomy-description">', '</div>');
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post();
				?>

				<?php
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('large'); ?>
					<?php endif; ?>

					<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

					<?php echo CFS()->get('product_price'); ?>

					<?php if ('post' === get_post_type()) : ?>


					<?php endif; ?>
				</article><!-- #post-## -->
		</div><!-- .entry-content -->


	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

<?php else : ?>

	<?php get_template_part('template-parts/content', 'none'); ?>
	<?php echo CFS()->get('product_price'); ?>

<?php endif; ?>


</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>