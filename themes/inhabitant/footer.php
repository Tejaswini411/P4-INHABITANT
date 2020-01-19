<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" style="background-image:url('<?= get_template_directory_uri() ?>/images/dark-wood.png');">
	<div class="footer-bar">
		<div class="footer-wrapper">
    	<div class="contact-info">
			<h3>CONTACT INFO </h3>
			<div class="email"><i class="fas fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></div>
			<div class="links"><i class="fas fa-phone-alt"></i><a href="tel:778-456-7891">778-456-7891.</a> </div>
    
       
       	<div class="social-media">
            <i class="fab fa-facebook-square" aria-hidden="true"></i> 
           	<i class="fab fa-twitter-square" aria-hidden="true"></i> 
           	<i class="fab fa-google-plus-square" aria-hidden="true"></i> 
		</div>
		</div>

		<div class="time">
			<h3> BUSINESS HOURS </h3>
			<p> Monday-Friday: 9am to 5pm </p>
			<p> Saturday: 10am to 2pm </p>
			<p> Sunday: Closed </p>
		</div>
</div>
		<img class="footer-logo" src="<?= get_template_directory_uri() ?>/images/logos/inhabitent-logo-text.svg">
</div>
	   <p class="legal"> COPYRIGHT &copy; 2016 INHABITENT</p>

</footer>
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
