<?php /* Template Name: Find Us Template */
get_header(); ?>
<div class="find-us-container">
	<div id="primary" class="content-area">
		<main id ="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php echo the_content(); ?>
	 			 <section class="find-us-main">
					<h2 class="find-us-title">FIND US</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10414.733279306249!2d-123.13816800000001!3d49.263448!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490%20W%20Broadway%2C%20Vancouver%2C%20BC%20V6H%204E8%2C%20Canada!5e0!3m2!1sen!2sus!4v1579982929366!5m2!1sen!2sus" width="700" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						<h2>WE TAKE CAMPING VERY SERIOUSLY.</h2>
					<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
				<section class="form">
				<h2>SEND US EMAIL!</h2>
				<?php echo do_shortcode( '[contact-form-7 id="93" title="Contact form 1"]' ); ?>
					

					
					<!-- <form method="post" class="form-inner">
						<p class="form-name">
							<label for="name">Name<span class="required"> *</span></label>
							<input type="text" id="name" name="name" size="40">
							<span role="alert" class="form-invalid">This field is required.</span>
						</p>
						<p class="form-email">
							<label for="email">Email<span class="required"> *</span></label>
							<input type="email" id="email" name="email" size="40">
							<span role="alert" class="form-invalid">This field is required.</span>
						</p>
						<p class="form-subject">
							<label for="subject">Subject<span class="required"> *</span></label>
							<input type="text" id="subject" name="subject" size="40">
							<span role="alert" class="form-invalid">This field is required.</span>
						</p>
						<p class="form-message">
							<label for="message">Message<span class="required"> *</span><br></label>
							<textarea id="message" name="message" rows="5" cols="40"></textarea>
							<span role="alert" class="form-invalid">This field is required.</span>
						</p>
						<p>
							<input type="submit" value="Submit" class="submit">
						</p>
						<div class="form-error" role="alert">One or more fields have an error. Please check and try again.
						</div>
					</form>  -->


			<?php endwhile; //End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div><!-- .find-us-container-->
<?php get_footer(); ?>