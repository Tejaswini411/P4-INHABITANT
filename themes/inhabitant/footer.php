<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" style="background:url('<?= get_template_directory_uri() ?>/img/dark-wood.png');">
	<div class="footer-bar">
    	<div class="contact-info">
			<h3>CONTACT INFO </h3>
       		<div class="links"><a href="tel:778-456-7891">778-456-7891.</a> </div>
        	<div class="email"> <a email:"info@inhabitent.com">info@inhabitent.com</a></div>
    	</div>
       
       <ul class="social-media">
           <li> <i class="fa fa-facebook-square" aria-hidden="true"></i> <span>Facebook</span> </li>
           <li> <i class="fa fa-twitter-square" aria-hidden="true"></i> <span>Twitter</span></li>
           <li> <i class="fa fa-google-plus-square" aria-hidden="true"></i> <span>Google+ </span></li>   
       </ul>

		<div>
			<h3> BUSINESS HOURS </h3>
			<p> Monday-Friday: 9am to 5pm </p>
			<p> Saturday: 10am to 2pm </p>
			<p>Sunday: Closed </p>
		</div>

		<img class="footer-logo" src="wp-content/themes/inhabitant/images/logos/inhabitent-logo-text.svg">
</div>
	   <p class="legal"> COPYRIGHT &copy; 2016 INHABITENT</p>

</footer>
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
