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
								<a href="<?php echo get_term_link($term); ?>">
									<li class="product-term">

										<img src="<?php echo get_template_directory_uri() .
														'/images/product-type-icons/' .
														$term->slug . '.svg'
													?>" />

										<p><?php echo $term->description; ?></p>
										<a class="product-term-link-fp" href="<?php echo get_term_link($term); ?>">
											<?php echo $term->name; ?> Stuff
										</a>

									</li>
								</a>
							<?php
						endforeach;
						?>
						</ul>
					</div>
				</section>
				<!-- .product-terms --->

				<!-- // Journal display section -->

				<div class="fp-journal-title">
					<h3 class="fp-h2">Inhabitent Journal</h3>
				</div>
				<section class="fp-journal">
					<?php
					$args = array('post_type' => 'post', 'posts_per_page' => '3', 'order' => 'ASC');
					$journal_posts = get_posts($args);

					// returns an array of posts
					?><div class="fp-journal-thumbnails">
						<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>
							<?php /* Content from your array of post results goes here */
							?>


							<ul class="fp-journal-list">
								<li>

									<?php the_post_thumbnail('medium-large'); ?>
									<span class="fr-date-comments">
										<?php echo get_the_date(); ?> /
										<?php echo get_comments_number(); ?> Comments</span>


									<a href="<?php the_permalink(); ?> ">
										<h2><?php the_title(); ?></h2>
									</a>
									<a class="read-more-button" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
								</li>
							</ul>

						<?php endforeach;
					wp_reset_postdata(); ?>
					</div>
				</section> <!-- end of Journal section--->
				<!-- Adventure section --->
				<section class="latest-adventure">
					<div class="adventure-title">
						<h2 class="fp-adventure-h2">Latest Adventures</h2>
					</div>
					<ul class="adventure-ul">
						<li class="left-side-lake">
							<h3 class="canoe-h3">Getting Back to Nature in a Canoe</h3>
							<p class="read-more-btn-fp">Read more</p>
						</li>
						<li class="beach">
							<h3 class="beach-h3">A Night with Friends at the Beach</h3>
							<p class="read-more-btn-fp">Read more</p>
						</li>
						<li class="mountain">
							<h3 class="mountain-h3">Taking in the View at Big Mountain</h3>
							<p class="read-more-btn-fp">Read more</p>
						</li>
						<li class="sky">
							<h3 class="sky-h3">Star-Gazing at the Night Sky</h3>
							<p class="read-more-btn-fp">Read more</p>
						</li>

					</ul>

				</section>
			</div> <!-- end of wrapper for below banner home-->
			<!-- end of Adventure section --->
		</div> <!-- #content -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>