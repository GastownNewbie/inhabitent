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
				<div class= "landing-page-container">
							<div class="main-homepage-banner">
            					<a class= "main-homepage-logo" href="#"><img src="<?php echo get_template_directory_uri()?>/images/logos/inhabitent-logo-full.svg" alt="logo front page"></a>
	
		



				

				

				</div>
							</div>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
			</div>	<!-- #content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
