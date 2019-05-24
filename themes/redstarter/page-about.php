<?php
/**
 * The template for displaying About page.
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="content-about" class="about-content">
			<!--- your banner html --->
			<div class="about-page-container">


				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('template-parts/content', 'page'); ?>

				<?php endwhile; 
			?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>