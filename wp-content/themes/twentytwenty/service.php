<?php

/**

 * Template Name: Service Page

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

    <div class="container-fluid">

        <div class="container">

            <div class="row align-items-center py-4">

                <div class="col-md-6 text-center text-md-left">

                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Services</h1>

                </div>

                <div class="col-md-6 text-center text-md-right">

                    <div class="d-inline-flex align-items-center">

                        <a class="btn btn-outline-primary" href="<?php echo site_url();?>">Home</a>

                        <i class="fas fa-angle-double-right text-primary mx-2"></i>

                        <a class="btn btn-outline-primary disabled" href="<?php echo site_url();?>/service">Our Services</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Page Header Start -->





    <!-- Services Start -->

    <div class="container-fluid py-4 bg-light">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 pr-lg-5">

                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>

                    <h1 class="mb-4 section-title">Awesome Interior Designing Services For Your Resident & Office</h1>

                    <p>Our interior design services offer awesome design solutions for both your home and office spaces. We provide a wide range of services, including space planning, furniture selection, color coordination, lighting design, and more. With our expertise in the industry, we can help you create a functional and aesthetically pleasing space that suits your needs and reflects your personal style. Whether you're looking to redesign a single room or an entire office building, we work closely with our clients to bring their design visions to life.</p>

                    <a href="<?php echo site_url();?>/project" class="btn btn-primary mt-3 py-2 px-4">View More</a>

                </div>

                <div class="col-lg-6 p-0 pt-5 pt-lg-0">

                    <div class="owl-carousel service-carousel position-relative">

                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>

                            <h5 class="mb-3">Bedroom Design</h5>

                            <p class="m-0">Your bedroom should be a place of rest and relaxation, a sanctuary that reflects your personal style and provides a comfortable space for you to unwind.</p>

                        </div>

                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>

                            <h5 class="mb-3">Kitchen Design</h5>

                            <p class="m-0">Kitchen design is the process of creating a functional and visually appealing kitchen space that meets the needs and preferences of the client.</p>

                        </div>

                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>

                            <h5 class="mb-3">Bathroom Design</h5>

                            <p class="m-0">The bathroom is a space where you can unwind and refresh, so it's important to design a space that is both functional and stylish.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Services End -->





    <!-- Features Start -->

    <div class="container-fluid py-5">

        <div class="container">

            <div class="row">

                <div class="col-lg-7 mt-5 py-5 pr-lg-5">

                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>

                    <h1 class="mb-4 section-title">12+ Years Experience In The Interior Design Industry</h1>

                    <p class="mb-4">With over 12 years of experience in the interior design industry, I have developed a streamlined design process, stay up-to-date on the latest trends and innovations, possess strong project management skills, value collaboration with other professionals, and prioritize client satisfaction in all my designs.</p>

                    <ul class="list-inline">

                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>12+ Years Experience</h5></li>

                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Best Interior Design</h5></li>

                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5></li>

                    </ul>

                    <a href="<?php echo site_url();?>/service" class="btn btn-primary mt-3 py-2 px-4">View More</a>

                </div>

                <div class="col-lg-5">

                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">

                        <img class="h-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.jpg" alt="">

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Features End -->





    <!-- Testimonial Start -->

    <div class="container-fluid bg-light py-5">

        <div class="container">

            <div class="row">

                <div class="col-md-5">

                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">

                        <img class="h-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial.jpg" alt="">

                    </div>

                </div>

                <div class="col-md-7 py-5 pl-md-5">

                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonial</h6>

                    <h1 class="mb-4 section-title">What Our Clients Say</h1>

                    <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">

                        <div class="d-flex flex-column">

                            <div class="d-flex align-items-center mb-3">

                                <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/test-new.jpg" style="width: 60px; height: 60px;" alt="">

                                <div class="ml-3">

                                    <h5>Md. Faruk Mollick</h5>

                                    <i>Bussiness Man</i>

                                </div>

                            </div>

                            <p>I recently hired an interior designer to help me transform my living room into a more modern and stylish space. The designer I worked with was incredibly knowledgeable and professional, and she helped me select the perfect furniture pieces, colors, and accessories to create the look I wanted...</p>

                        </div>

                        <div class="d-flex flex-column">

                            <div class="d-flex align-items-center mb-3">

                                <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/test-new.jpg" style="width: 60px; height: 60px;" alt="">

                                <div class="ml-3">

                                    <h5>Rajib Kumar</h5>

                                    <i>IT Professional</i>

                                </div>

                            </div>

                            <p class="m-0">I hired an interior designer to help me transform my living room, and I am beyond thrilled with the results. The designer took the time to listen to my needs and preferences and worked with me to create a space that truly reflects my style and personality.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Testimonial End -->



<?php

get_footer();