<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<!DOCTYPE html>
<html lang="en" class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>Bengal Interior</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- <meta content="Bengal Interior- we are the leading start up company" name="keywords">
    <meta content="We are trying to fulfill our customer requirement what they need for their home and office interior" name="description"> -->
    <meta name="google-site-verification" content="KmQule6XiQ_teyDUeUMjDsiN_u4ztyE9F1u9Qe97nkQ" />

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico?v=89898989" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">


    
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link href="<?php //echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet"> -->

    <!-- Flaticon Font -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/flaticon/font/flaticon.css" rel="stylesheet">


    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
			<?php
		wp_body_open();
		?>

    <div id="loading">
        <img id="loading-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/ajax-loader.gif" alt="Loading..." />
    </div>

    <!-- Topbar Start -->
    <div class="container-fluid py-1 custom_color_bl">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="<?php echo site_url();?>/faqs/">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="<?php echo site_url();?>/help/">Help</a>
                        <!-- <span class="text-white">|</span> -->
                        <!-- <a class="text-white pl-3" href="#">Support</a> -->
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right social_area">
                    <div class="d-inline-flex align-items-center w-auto">
                        <a class="text-white px-3" href="https://www.facebook.com/people/Bengal-Interior/100063719418728/" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                       <!--  <a class="text-white px-3" href="#">
                            <i class="fab fa-twitter"></i>
                        </a> -->
                        <!-- <a class="text-white px-3" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a> -->
                        <a class="text-white px-3" href="https://www.instagram.com/bengalinterior12/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <!-- <a class="text-white pl-3" href="#">
                            <i class="fab fa-youtube"></i>
                        </a> -->
                    </div>
                </div>
            </div>

    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-dark">
                <a href="<?php echo site_url(); ?>" class="navbar-brand">
                    
                    <h1 class="m-0 display-5 text-white"><img class="logo_header" src="/wp-content/uploads/2023/05/bngl_logo_1_neww.png"></h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between pl-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?php echo site_url();?>" class="nav-item nav-link index ">Home</a>
                        <a href="<?php echo site_url();?>/about" class="nav-item nav-link about">About</a>
                        <a href="<?php echo site_url();?>/service" class="nav-item nav-link service">Service</a>
                        <a href="<?php echo site_url();?>/project" class="nav-item nav-link project">Project</a>
                        <a href="<?php echo site_url();?>/gallery" class="nav-item nav-link galler">Gallery</a>
                        <!-- <a href="<?php //echo site_url();?>/blog" class="nav-item nav-link">Blog</a> -->
<!--                         <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div> -->
                        <a href="<?php echo site_url();?>/contact" class="nav-item nav-link contact">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-dark py-3 text-white address_white">
            <div class="row flex-start">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Our Office</h5>
                            <p class="m-0">28, Grant St, Esplanade,West Bengal-700013</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Email Us</h5>
                            <p class="m-0"><a href="mailto:info@bengalinterior.in">info@bengalinterior.in</a>
</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Call Us</h5>
                            <p class="m-0"><a href="tel:9735240010">+91 9735240010</a> / <a href="tel:+91 70744 39214">+91 7074439214</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 text-left text-lg-right mb-3 mb-lg-0 align-self-center">
                    <div class="d-inline-flex text-left">
                        <!-- <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1> -->
                        <div class="d-flex flex-column">
                            <p class="m-0"><a class="btn btn-primary text-uppercase hdr_btn" href="<?php echo site_url();?>/free-consult">Free Consult</a></p>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    <!-- Under Nav End -->



