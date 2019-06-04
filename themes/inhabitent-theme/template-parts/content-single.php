<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<div class="journal-wp-post-container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail('large'); ?>
			<?php endif; ?>

			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

			<div class="entry-meta">
				<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html('Pages:'),
				'after'  => '</div>',
			));
			?>
		</div><!-- .entry-content -->



		<footer class="entry-footer">
			<?php red_starter_entry_footer(); ?>
			<div class="buttons-social-media">
				<button type="button" class="social-button-blk"><i class="fab fa-facebook-f"></i> LIKE</button>
				<button type="button" class="social-button-blk"><i class="fab fa-twitter"></i> PIN</button>
				<button type="button" class="social-button-blk"><i class="fab fa-pinterest"></i> TWEET</button>
			</div>

		</footer> <!-- .entry-footer -->
	</article>
</div><!-- #post-## -->