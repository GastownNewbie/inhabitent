<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="content" class="site-content">
			<div class="landing-page-container">
				<div class="main-homepage-banner">
					<a class="main-homepage-logo" href="#"><img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-full.svg" alt="logo front page"></a>









				</div>
			</div>
			<section class="fp-journal">
				<div class="fp-journal-title">
					<h2>Inhabitent Journal</h2>
				</div>
				<?php
				$args = array('post_type' => 'post', 'posts_per_page' => '3', 'order' => 'ASC');
				$journal_posts = get_posts($args);

				// returns an array of posts
				?>
				<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>
					<?php /* Content from your array of post results goes here */
					?>
					<div class="fp-journal-thumbnails">

						<li class="fp-journal-list">
							<ul>

								<?php the_post_thumbnail('medium-large'); ?>

								<?php echo get_the_date(); ?> /
								<?php echo get_comments_number(); ?> Comments


								<a href="<?php the_permalink(); ?> ">
									<h2><?php the_title(); ?></h2>
								</a>
								<a class="read-more-button" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
							</ul>
						</li>

					<?php endforeach;
				wp_reset_postdata(); ?>

			</section>
		</div> <!-- #content -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>