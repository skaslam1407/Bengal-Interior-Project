<?php

/**

 * Template Name: Contact US Page

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

                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Contact Us</h1>

                </div>

                <div class="col-md-6 text-center text-md-right">

                    <div class="d-inline-flex align-items-center">

                        <a class="btn btn-outline-primary" href="<?php echo site_url();?>">Home</a>

                        <i class="fas fa-angle-double-right text-primary mx-2"></i>

                        <a class="btn btn-outline-primary disabled" href="<?php echo site_url();?>/contact">Contact Us</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Page Header Start -->





    <!-- Contact Start -->

    <div class="container-fluid bg-white pb-5 custom_contact">

        <div class="container">

            <div class="row">

                <div class="col-lg-5">

                    <div class="d-flex flex-column justify-content-center bg-primary p-5">

                        <div class="d-inline-flex mb-4">

                            <h1 class="flaticon-office font-weight-normal text-secondary m-0 mr-3"></h1>

                            <div class="d-flex flex-column">

                                <h4>Our Office</h4>

                                <p class="m-0 text-white">28, Grant St, Esplanade,West Bengal-700013</p>

                            </div>

                        </div>

                        <div class="d-inline-flex mb-4">

                            <h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>

                            <div class="d-flex flex-column">

                                <h4>Email Us</h4>

                                <p class="m-0 text-white">info@bengalinterior.in</p>

                            </div>

                        </div>

                        <div class="d-inline-flex mb-4">

                            <h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>

                            <div class="d-flex flex-column">

                                <h4>Call Us</h4>

                                <p class="m-0 text-white">+91 9735240010 / 7074439214</p>

                         </div>

                        </div>

                         <div class="d-inline-flex mb-4">
                            <h1 class="font-weight-normal text-secondary m-0 mr-3"><i class="fab fa-whatsapp"></i></h1>

                            <div class="d-flex flex-column">

                                <h4>Whatapp</h4>

                                <p class="m-0 text-white">+91 9735240010</p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-7">

                    <h2 class="text-left text-uppercase">Get in touch</h2>

                    <div class="contact-form">


                        <?php echo do_shortcode( '[contact-form-7 id="16" title="Contact Form"]' );  ?> 
<!-- 
                        <div id="success"></div>

                        <form name="sentMessage" id="contactForm" novalidate="novalidate">

                            <div class="control-group">

                                <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />

                                <p class="help-block text-danger"></p>

                            </div>

                            <div class="control-group">

                                <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />

                                <p class="help-block text-danger"></p>

                            </div>

                            <div class="control-group">

                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />

                                <p class="help-block text-danger"></p>

                            </div>

                            <div class="control-group">

                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>

                                <p class="help-block text-danger"></p>

                            </div>

                            <div>

                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>

                            </div> -->

                        <!-- </form> -->

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Contact End -->



<?php

get_footer(); ?>




