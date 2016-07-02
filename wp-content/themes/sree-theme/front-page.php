<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

        <div id="fullpage">
            <!-- ========== VIDEO DIV ========== -->
            <section class="section content-section bg-video full-page-2" id="home">
                <div class="content">
                    <div class="container outer">
                        <div class="row inner">
                            <div class="col-md-12 centered">

                                <!-- ========== Typer Headline ========== -->
                                <h1 class="headline">We believe in <span id="typer" class="typer" data-typer-targets="Perfection, Creation, Impression, Enthrall"></span>. <small>We are coming soon.</small></h1>

                                <div class="clearfix"></div>

                                <!-- ========== NOTIFY FORM ========== -->
                                <form class="notify-div mc-form">
                                    <input type="email" name="email" value="" placeholder="Email id.." required=""/>
                                    <button type="submit" class="sr-btn white-btn"><span class="icon ion-ios-paperplane"></span>Notify Me</button>
                                </form> <!-- end form -->

                            </div> <!-- end col-md-12 -->
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                    <a href="#" class="tubular-mute striked">Mute</a>
                </div> <!-- end content -->
            </section> <!-- end section -->

            <!-- ========== FEATURES ========== -->
            <section class="content-section section" id="features">
                <div class="container">

                    <!-- ========== SECTION TITLE ========== -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center section-title">
                            <h3 class="underline longer-underline">The Awesome Concept</h3>
                            <p>A perfect coming soon theme creates a lasting impression on your website visitor. It comes with an exceptional features which strongly boost your business.</p>
                        </div> <!-- end .section-title -->
                    </div> <!-- end row -->

                    <div class="row mb30">

                        <!-- ========== SINGLE FEATURE ========== -->
                        <div class="col-md-6 col-sm-6">
                            <div class=" feature-left-icon">
                                <div class="icon col-md-2 col-sm-3">
                                    <i class="ion-ios-color-filter"></i>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                    <h4 class="feature-title">Professional Design</h4>
                                    <p class="feature-desc">Our approach is tailored & unique to each client. We do innovative things as we believe in simple, creative & flexible design standards.</p>
                                </div>
                                <i class="bg-icon ion-ios-color-filter"></i>
                                <div class="clearfix"></div>
                            </div> <!-- end feature-left-icon -->
                        </div> <!-- end col-md-6 -->

                        <div class="col-md-6 col-sm-6">
                            <div class=" feature-left-icon">
                                <div class="icon col-md-2 col-sm-3">
                                    <i class="ion-ios-football"></i>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                    <h4 class="feature-title">Easy To Use</h4>
                                    <p class="feature-desc">It gives a flexibility to build site using purpose made content blocks. The interface is intuitive, allowing swift & extensive changes. </p>
                                </div>
                                <i class="bg-icon ion-ios-football"></i>
                                <div class="clearfix"></div>
                            </div> <!-- end feature-left-icon -->
                        </div> <!-- end col-md-6 -->
                    </div> <!-- end row -->

                    <div class="row mb30">
                        <div class="col-md-6 col-sm-6">
                            <div class=" feature-left-icon">
                                <div class="icon col-md-2 col-sm-3">
                                    <i class="ion-ios-infinite"></i>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                    <h4 class="feature-title">Free Updates</h4>
                                    <p class="feature-desc">Buy once and get updates for lifetime. This template has well organized and commended code makes it easy for you to customize.  </p>
                                </div>
                                <i class="bg-icon ion-ios-infinite"></i>
                                <div class="clearfix"></div>
                            </div> <!-- end feature-left-icon -->
                        </div> <!-- end col-md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <div class="feature-left-icon">
                                <div class="icon col-md-2 col-sm-3">
                                    <i class="ion-ios-people"></i>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                    <h4 class="feature-title">Awesome Support</h4>
                                    <p class="feature-desc">We provide fast and high quality support for all customers. Feel free to contact us, we try to respond to everyone within 24 hrs. period.</p>
                                </div>
                                <i class="bg-icon ion-ios-people"></i>
                                <div class="clearfix"></div>
                            </div>
                        </div> <!-- end col-md-6 -->
                    </div> <!-- end row -->

                </div> <!-- end container -->
            </section> <!-- end section -->

            <!-- ========== ABOUT US SECTION ========== -->
            <section class="content-section section" id="aboutUs">
                <div class="container">

                    <!-- ========== SECTION TITLE ========== -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center section-title">
                            <h3 class="underline longer-underline">Little About Us</h3>
                            <p>Sree is a clean and minimal HTML template that is fully responsive. Modern and stylish design makes it perfect for creative agencies and other types of business. It is carefully designed to convey perfect elegance through user friendly experience and customization simplicity. This theme is easy to work with.</p>
                        </div>
                    </div> <!-- end row -->

                    <div class="row mb50">
                        <div class="col-md-5 col-md-offset-1 col-sm-6">
                            <div class="sr-box text-center">
                                <h4 class="underline">Our Mission</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <i class="bg-icon ion-ios-flame"></i>
                            </div>
                        </div> <!-- end col-md-5 -->
                        <div class="col-md-5 col-sm-6">
                            <div class="sr-box text-center">
                                <h4 class="underline">Our Vision</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <i class="bg-icon ion-ios-lightbulb"></i>
                            </div>
                        </div> <!-- end col-md-5 -->
                    </div> <!-- end row -->

                </div> <!-- end container -->
            </section> <!-- end section -->

<?php get_footer(); ?>
