<?php

/**

 * Template Name: Free Consulting

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

                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Consult for free</h1>

                </div>

                <div class="col-md-6 text-center text-md-right">

                    <div class="d-inline-flex align-items-center">

                        <a class="btn btn-outline-primary" href="<?php echo site_url();?>">Home</a>

                        <i class="fas fa-angle-double-right text-primary mx-2"></i>

                        <a class="btn btn-outline-primary disabled" href="<?php echo site_url();?>/free-consult">Free Consult</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Page Header Start -->





    <!-- Contact Start -->

    <div class="container-fluid bg-light">

        <div class="container">

            <div class="row">


                <div class="col-lg-12 mb-5 py-5 pl-lg-5">

                    <h2 class="text-center mb-4">Please Fill this form, we will call you</h2>

                    <div class="contact-form">


                        <?php echo do_shortcode( '[contact-form-7 id="16" title="Contact Form"]' );  ?> 


                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Contact End -->



<?php

get_footer(); ?>




