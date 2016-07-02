<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- ========== PAGE TITLE ========== -->
	<title><?php bloginfo( 'name' ); ?></title>

	<!-- ========== META TAGS ========== -->
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="keywords" content="coming soon, under construction, countdown">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="Peter Veerman">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- ========== VIEWPORT META ========== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- ========== FAVICON & APPLE ICONS ========== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">

	<!-- ========== GOOGLE FONTS ========== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100" rel='stylesheet' type='text/css'>

	<!-- ========== MINIFIED VENDOR CSS ========== -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/tubular.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/main.css">

	<!-- ========== MODERNIZR ========== -->
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/modernizr.js"></script>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>



<!-- ========== BODY ==========
.light-header: for light colored header
.dark-header: for dark colored header
==========  ========== -->
<body <?php body_class("light-header animsition"); ?>>

	<!-- ========== HEADER ========== -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">

				<!-- ========== LOGO  ========== -->
				<div class="col-md-6 col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" alt="sree - Coming soon HTML template" class="light-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-dark.png" alt="sree - Coming soon HTML template" class="dark-logo">
				</div> <!-- end col-md-6 -->

				<!-- ========== SOCIAL MEDIA LINKS ========== -->
				<div class="col-md-6 col-sm-6 text-right hidden-xs">
					<a href="#" class="social-btn"><i class="fa fa-facebook"></i></a>
					<a href="#" class="social-btn"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-btn"><i class="fa fa-google-plus"></i></a>
					<a href="#" class="social-btn"><i class="fa fa-envelope"></i></a>
				</div> <!-- end col-md-6 -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</header>
