<?php

/**

 * Template Name: Project Page

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package WordPress

 * @subpackage Twenty_Twenty

 * @since Twenty Twenty 1.0

 */



get_header();

?>



<!-- Page Header Start -->

    <div class="container-fluid py-4">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 text-center text-md-left">

                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Projects</h1>

                </div>

                <div class="col-md-6 text-center text-md-right">

                    <div class="d-inline-flex align-items-center">

                        <a class="btn btn-outline-primary" href="<?php echo site_url();?>">Home</a>

                        <i class="fas fa-angle-double-right text-primary mx-2"></i>

                        <a class="btn btn-outline-primary disabled" href="<?php echo site_url();?>/project">Our Projects</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Page Header Start -->





    <!-- Projects Start -->

    <div class="container-fluid bg-light py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-8 col text-center mb-4">

                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Projects</h6>

                    <h1 class="mb-4">Some Of Our Awesome Interior Designing Projects</h1>

                </div>

            </div>

            <div class="row">

                <div class="col-12 text-center mb-2">

                    <ul class="list-inline mb-4" id="portfolio-flters">

                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">All</li>

                        <li class="btn btn-outline-primary m-1" data-filter=".first">Complete</li>

                        <li class="btn btn-outline-primary m-1" data-filter=".second">Running</li>

                        <li class="btn btn-outline-primary m-1" data-filter=".third">Upcoming</li>

                    </ul>

                </div>

            </div>

            <div class="row mx-1 portfolio-container">

                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">

                    <div class="position-relative overflow-hidden">

                        <div class="portfolio-img d-flex align-items-center justify-content-center">

                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-1.jpg" alt="">

                        </div>

                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">

                            <h4 class="text-white mb-4">Luxe Living</h4>

                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="">

                                    <i class="fa fa-link"></i>

                                </a>

                                <a class="btn btn-outline-primary m-1" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-1.jpg" data-lightbox="portfolio">

                                    <i class="fa fa-eye"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">

                    <div class="position-relative overflow-hidden">

                        <div class="portfolio-img d-flex align-items-center justify-content-center">

                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-2.jpg" alt="">

                        </div>

                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">

                            <h4 class="text-white mb-4">Elegant Escape</h4>

                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="">

                                    <i class="fa fa-link"></i>

                                </a>

                                <a class="btn btn-outline-primary m-1" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-2.jpg" data-lightbox="portfolio">

                                    <i class="fa fa-eye"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">

                    <div class="position-relative overflow-hidden">

                        <div class="portfolio-img d-flex align-items-center justify-content-center">

                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-3.jpg" alt="">

                        </div>

                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">

                            <h4 class="text-white mb-4">Classic Comfort</h4>

                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="">

                                    <i class="fa fa-link"></i>

                                </a>

                                <a class="btn btn-outline-primary m-1" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-3.jpg" data-lightbox="portfolio">

                                    <i class="fa fa-eye"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">

                    <div class="position-relative overflow-hidden">

                        <div class="portfolio-img d-flex align-items-center justify-content-center">

                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-4.jpg" alt="">

                        </div>

                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">

                            <h4 class="text-white mb-4">Modern Elegance</h4>

                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="">

                                    <i class="fa fa-link"></i>

                                </a>

                                <a class="btn btn-outline-primary m-1" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-4.jpg" data-lightbox="portfolio">

                                    <i class="fa fa-eye"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">

                    <div class="position-relative overflow-hidden">

                        <div class="portfolio-img d-flex align-items-center justify-content-center">

                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-5.jpg" alt="">

                        </div>

                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">

                            <h4 class="text-white mb-4">Bold and Beautiful</h4>

                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="">

                                    <i class="fa fa-link"></i>

                                </a>

                                <a class="btn btn-outline-primary m-1" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-5.jpg" data-lightbox="portfolio">

                                    <i class="fa fa-eye"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">

                    <div class="position-relative overflow-hidden">

                        <div class="portfolio-img d-flex align-items-center justify-content-center">

                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-6.jpg" alt="">

                        </div>

                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">

                            <h4 class="text-white mb-4">Glamorous Escape</h4>

                            <div class="d-flex align-items-center justify-content-center">

                                <a class="btn btn-outline-primary m-1" href="">

                                    <i class="fa fa-link"></i>

                                </a>

                                <a class="btn btn-outline-primary m-1" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-6.jpg" data-lightbox="portfolio">

                                    <i class="fa fa-eye"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Projects End -->



<?php

get_footer();