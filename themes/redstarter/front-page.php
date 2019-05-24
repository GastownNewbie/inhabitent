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
			<!--- your banner html --->
			<div class="landing-page-container">
				<div class="main-homepage-banner">
					<a class="main-homepage-logo" href=#><img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-full.svg" alt="logo front page"></a>
				</div>
			</div>
			<!-- below homepage banner div --->
			<div class="wrap-container-home">
				<!-- product terms and icons ---->
				<section class="fp-products">
					<div class="fp-products-h2">
						<h2 class="fp-h2">Shop Stuff</h2>
					</div>

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
								<li class="product-term">
									<img src="<?php echo get_template_directory_uri() .
													'/images/product-type-icons/' .
													$term->slug . '.svg'
												?>" />

									<p><?php echo $term->description; ?></p>
									<p><a href="<?php echo get_term_link($term); ?>">
											<?php echo $term->name; ?> Stuff
										</a>

								</li>
							<?php
						endforeach;
						?>
						</ul>
					</div>
				</section>
				<!-- .product-terms --->











				<!-- // Journal display section -->
				<section class="fp-journal">
					<div class="fp-journal-title">
						<h2 class="fp-h2">Inhabitent Journal</h2>
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

							<ul class="fp-journal-list">
								<li>

									<?php the_post_thumbnail('medium-large'); ?>

									<?php echo get_the_date(); ?> /
									<?php echo get_comments_number(); ?> Comments


									<a href="<?php the_permalink(); ?> ">
										<h2><?php the_title(); ?></h2>
									</a>
									<a class="read-more-button" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
								</li>
							</ul>

						<?php endforeach;
					wp_reset_postdata(); ?>

				</section> <!-- end of Journal section--->
				<!-- Adventure section --->
				<section class="latest-adventure">
					<div class="adventure-title">
						<h2 class="fp-adventure-h2">Latest Adventures</h2>
					</div>
					<ul class="adventure-ul">
						<li class="left-side-lake">
						</li>
						<li class="beach">
						</li>
						<li class="mountain">
						</li>
						<li class="sky">
						</li>

					</ul>

				</section>
			</div> <!-- end of wrapper for below banner home-->
			<!-- end of Adventure section --->
		</div> <!-- #content -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>