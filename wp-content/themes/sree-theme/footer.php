<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!-- ========== CONTACT US SECTION ========== -->
	<section class="content-section section" id="contactUs">
	<div class="container">

		<!-- ========== SECTION TITLE ========== -->
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center section-title">
				<h3 class="underline longer-underline">Contact Us</h3>
				<p>We are ready for any challenges, We make your business better. Feel free to contact us anytime to boost your business and achieve new milestones.</p>
			</div>
		</div> <!-- end row -->

		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h5 class="underline">Address</h5>
						<p class="mb50">A902, Crosswinds Apt, <br>
							Western Road, Brighton, <br>
							East Sussex, Bath, <br>
							England - BA2 4QG.</p>
						</div>
						<div class="col-md-6 col-sm-6">
							<h5 class="underline">Email Id</h5>
							<p class="mb50">
								themesease@gmail.com<br>
								support@themesease.com
							</p>
						</div>
					</div> <!-- end row -->

					<div class="row">
						<div class="col-md-6 col-sm-6">
							<h5 class="underline">Contact Numbers</h5>
							<p class="mb50">
								+1 (123) 456-7890<br>
								+1 (234) 456-7981
							</p>
						</div>
						<div class="col-md-6 col-sm-6">
							<h5 class="underline">Follow Us</h5>
							<p class="mb50">
								<a href="#" class="social-btn"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-btn"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-btn"><i class="fa fa-google-plus"></i></a>
							</p>
						</div>
					</div> <!-- end row -->
				</div> <!-- end col-md-6 -->

				<div class="col-md-6 mt50">
					<form class="contact-us-form" id="form" action="<?php echo get_template_directory_uri(); ?>/send-email-mailgun.php" method="post">

						<input type="text" name="name" value="" placeholder="Enter Your Name.." required=""/>
						<input type="email" name="email" value="" placeholder="Email Your Email Id.." required=""/>
						<textarea name="message" placeholder="Email Your Message.." required="" rows="5"></textarea>

						<div class="clearfix "></div>

						<button type="submit" class="sr-btn sr-primary hvr-sweep-to-right pull-right mb20"><span class="icon pe-7s-paper-plane"></span>Send Email</button>
					</form> <!-- end form -->
				</div> <!-- end col-md-6 -->

			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- ========== end contact us section ========== -->
</div> <!-- end fullpage -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
		// (function(b, o, i, l, e, r) {
		// 	b.GoogleAnalyticsObject = l;
		// 	b[l] || (b[l] =
		// 		function() {
		// 			(b[l].q = b[l].q || []).push(arguments)
		// 		});
		// 	b[l].l = +new Date;
		// 	e = o.createElement(i);
		// 	r = o.getElementsByTagName(i)[0];
		// 	e.src = 'https://www.google-analytics.com/analytics.js';
		// 	r.parentNode.insertBefore(e, r)
		// }(window, document, 'script', 'ga'));
		// ga('create', 'UA-XXXXX-X');
		// ga('send', 'pageview');
	</script>

	<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor.js"></script>

	<!-- ========== MINIFIED PLUGINS JS ========== -->
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/plugins.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.tubular.1.0.js"></script>

	<script type="text/javascript">
		$(function($) {
			$('.bg-video').tubular({
				videoId: '9No-FiEInLA'
			});
		});
	</script>

	<?php wp_footer(); ?>

</body>
</html>
