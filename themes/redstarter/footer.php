<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="biz-contact-container">
		<div class="contact-info">

			<h3>Contact Info</h3>
			<p><i class="fas fa-envelope"></i> info@inhabitent.com</p>
			<p><i class="fas fa-phone"></i> 778-456-7891</p>

		</div>



		<div class="business-hours">
			<h3>Business Hours</h3>
			<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
			<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
			<p><span class="day-of-week">Sunday:</span> Closed</p>

		</div>

		<div class="footer-block3>
				<div class=" footer-logo">
			<img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-text.svg" alt="logo sketch of arrow">

		</div>
	</div>
	<div class="site-info">
		<div class=copyright-info>
			<p>Copyright &copy <span class=footer-info>2019</span> Inhabitent</p>
		</div>


	</div><!-- .site-info -->
</footer><!-- #colophon -->
<!-- #page -->

<?php wp_footer(); ?>

</body>

</html>