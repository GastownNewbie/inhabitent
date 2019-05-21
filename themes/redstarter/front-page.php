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
				<div class="main-homepage-banner">
            	<a href="#"></a><img class="big-logo" src="wp-content/themes/redstarter/images/logos/inhabitent-logo-full.svg" alt="Inhabitent logo">
				</div>
				<section class= "product-info">
					<h2>Shop Stuff</h2>
						<div class= "products-wrapper">
							<div class= "product-type-wrapper">
								<img href="#" src = "wp-content/themes/redstarter/images/product-type-icons/do.svg" alt = "do">
								<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors</p>
								<p> 
									<a href ="#" class="btn">Do Stuff</a>
								</p>
							</div>	
							
							<div class= "product-type-wrapper">
							<img href="#" src = "wp-content/themes/redstarter/images/product-type-icons/eat.svg" alt = "eat">
								<p>Nothing beats food cooked over a fire. We have all you need for good camping eats</p>
								<p> 
									<a href ="#" class="btn">Eat Stuff</a>
								</p>
							</div>
							
							<div class= "product-type-wrapper">
							<img href="#" src = "wp-content/themes/redstarter/images/product-type-icons/sleep.svg" alt = "sleep">
								<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
								<p> 
									<a href ="#" class="btn">Sleep Stuff</a>
								</p>

							</div>
							
							<div class= "product-type-wrapper">
							<img href="#" src = "wp-content/themes/redstarter/images/product-type-icons/wear.svg" alt = "wear">
								<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
								<p> 
									<a href ="#" class="btn">Wear Stuff</a>
								</p>
							</div>

						<div>
				</section>



				

				


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
			</div>	<!-- #content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
