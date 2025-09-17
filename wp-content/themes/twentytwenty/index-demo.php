<?php
/**
 * Template Name: Home Page Redesign
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

 <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                            <h3 class="display-3 text-white mb-md-4">Make Your Resident Better</h3>
                            <a href="<?php echo site_url();?>/gallery" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                            <h3 class="display-3 text-white mb-md-4">Make Your Office Better</h3>
                            <a href="<?php echo site_url();?>/gallery" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                            <h3 class="display-3 text-white mb-md-4">Discover the Perfect Sofa for Your Resident</h3>
                            <a href="<?php echo site_url();?>/gallery" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner4.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                            <h3 class="display-3 text-white mb-md-4">Relax in style with our designer sofas</h3>
                            <a href="<?php echo site_url();?>/gallery" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-white mb-3"></i>
                        <h4 class="display-3 mb-3 text-white">12+</h4>
                        <h1 class="m-0 text-white">Years Experience</h1>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 lrnabt">Learn About Us</h6>
                    <h1 class="mb-4 section-title">We Are The Best Interior Designing Firm In Your City</h1>
                    <p>At our interior designing firm, we are committed to delivering the best possible design solutions for your Resident or office. With years of experience and a passion for creating beautiful and functional spaces, we are the top choice for interior design services in your city.</p>

                    <p>Our team of skilled designers works closely with each client to understand their unique style, needs, and budget. We take the time to listen to your ideas and preferences, and use our expertise to transform your space into a personalized and functional work of art.</p>

					<p>Whether you're looking to redesign your entire Resident or simply refresh a single room, our team has the knowledge and expertise to create a space that reflects your individual style and enhances your daily life.</p>

					<p>From selecting the perfect color scheme and furniture, to incorporating the latest design trends and technology, we are dedicated to providing unparalleled service and exceptional results. We pride ourselves on our attention to detail, commitment to quality, and ability to bring our clients' visions to life.</p>

					<p>So why choose our interior designing firm for your next project? Because we are the best in the business when it comes to creating beautiful, functional, and personalized spaces that you'll love for years to come.</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Project Planning</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Exterior & Interior</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Commercial Design</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Residential Design</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
<!-- What We Do Start -->
<div class="bg-dark home-content-gallery">
    <div class="container">
        
            <div class="col12 mb-4">
                <h2 class="text-white">What We Do</h2>
            </div>
        
              <div class="row">
                  <div class="col-12 col-sm-6 col-lg-4 py-3">
                      
                   
                    <div class="image_gal_box">
                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/service/residential.jpg">
                        <div class="overlay_gal"></div>
                    </div>
                   

                    <h3><span>Residential </span>Interior</h3>
                  </div>
                  
                  <div class="col-12 col-sm-6 col-lg-4 py-3">

                    <div class="image_gal_box">
                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/service/corporate.jpg">
                        <div class="overlay_gal"></div>
                    </div>

                    <h3><span>Corporate </span>Interior</h3>

                  </div>

                  <div class="col-12 col-sm-6 col-lg-4 py-3">
                    

                    <div class="image_gal_box">
                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/service/spatial_branding.jpg">
                        <div class="overlay_gal"></div>
                    </div>

                    <h3><span>Spatial branding </span>Interior</h3>

                    
                  </div>

                  <div class="col-12 col-sm-6 col-lg-4 py-3">
                   

                    <div class="image_gal_box">
                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/service/hotel_restaurant.jpg">
                        <div class="overlay_gal"></div>
                    </div>

                    <h3><span>Hotel & Restaurant </span>Interior</h3>

                   
                  </div>

                  <div class="col-12 col-sm-6 col-lg-4 py-3">
                  

                    <div class="image_gal_box">
                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/service/hospital.jpg">
                        <div class="overlay_gal"></div>
                    </div>

                    <h3><span>Hospital </span>Interior</h3>

                   
                  </div>

                  <div class="col-12 col-sm-6 col-lg-4 py-3">
                  

                    <div class="image_gal_box">
                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/service/landsaping.jpg">
                        <div class="overlay_gal"></div>
                    </div>

                    <h3><span>Landscaping </span>Interior</h3>

                    
                  </div>

                  <div class="col-12 col-sm-6 col-lg-4 py-3">
                   
                    <div class="image_gal_box">
                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/service/spa_hospitality.jpg">
                        <div class="overlay_gal"></div>
                    </div>

                    <h3><span>Hospitality & Spa </span>Interior</h3>

                    
                  </div>

                  <div class="col-12 col-sm-6 col-lg-4 py-3">
                  
                    <div class="image_gal_box">
                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/service/furniture.jpg">
                        <div class="overlay_gal"></div>
                    </div>

                    <h3><span>Furniture </span>Interior</h3>

                  
                  </div>

                  <div class="col-12 col-sm-6 col-lg-4 py-3">
                   

                    <div class="image_gal_box">
                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/service/corporate2.jpg">
                        <div class="overlay_gal"></div>
                    </div>

                    <h3><span> Indoor </span>Interior</h3>

                    
                  </div>




              </div>



         
       
    </div>
</div>
<!-- What We Do  End -->




    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
                    <h1 class="mb-4 section-title">Awesome Interior Designing Services For Your Resident & Office</h1>
                    <p>Our interior design services offer awesome design solutions for both your Resident and office spaces. We provide a wide range of services, including space planning, furniture selection, color coordination, lighting design, and more. With our expertise in the industry, we can help you create a functional and aesthetically pleasing space that suits your needs and reflects your personal style. Whether you're looking to redesign a single room or an entire office building, we work closely with our clients to bring their design visions to life.</p>
                    <a href="<?php echo site_url();?>/service" class="btn btn-primary mt-3 py-2 px-4">View More</a>
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
                            <p class="m-0">Kitchen design is the process of creating a functional and visually appealing kitchen space that meets the needs and preferences of the client. 
</p>
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
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                    <h1 class="mb-4 section-title">12+ Years Experience In The Interior Design Industry</h1>
                    <p class="mb-4">With over 12 years of experience in the interior design industry, I have developed a streamlined design process, stay up-to-date on the latest trends and innovations, possess strong project management skills, value collaboration with other professionals, and prioritize client satisfaction in all my designs.</p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>12+ Years Experience</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Best Interior Design</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5></li>
                    </ul>
                    <a href="<?php echo site_url();?>/project" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden ftre_image">
                        <img class="h-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Projects Start -->
    <div class="container-fluid py-5">
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
                                <!-- <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a> -->
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
                                <!-- <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a> -->
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
                                <!-- <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a> -->
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
                                <!-- <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a> -->
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
                                <!-- <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a> -->
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
                                <!-- <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a> -->
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


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center meet_members">
                        <h6 class="text-white font-weight-normal text-uppercase mb-3">Our Team</h6>
                        <h1 class="mb-0 text-center">Meet Our Team Members</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="owl-carousel team-carousel position-relative">
                        <div class="team d-flex flex-column text-center mx-0 mx-md-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/team-new.jpg" alt="">
                                <!-- <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div> -->
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Sekh Ainur Ali</h5>
                                <p class="m-0 text-white">Wood worker</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-0 mx-md-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/team-new.jpg" alt="">
<!--                                 <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div> -->
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Md. Soidul Islam</h5>
                                <p class="m-0 text-white">Furniture Designer</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-0 mx-md-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/team-new.jpg" alt="">
<!--                                 <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div> -->
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Sk Julfikar </h5>
                                <p class="m-0 text-white">Installation Specialist</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-0 mx-md-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/team-new.jpg" alt="">
<!--                                 <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div> -->
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Md. Mokbul Mollick</h5>
                                <p class="m-0 text-white">Interior Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h6 class="text-primary font-weight-normal text-uppercase">Testimonial</h6>
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
                            <p>I recently hired an interior designer to help me transform my living room into a more modern and stylish space. The designer I worked with was incredibly knowledgeable and professional, and she helped me select the perfect furniture pieces, colors, and accessories to create the look I wanted..</p>
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
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden ftre_image">
                        <img class="h-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    <div class="working_progress_area p-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2>OUR WORKING PROCESS</h2>
                    <h6>We've distilled our interior design process into 4 Steps. The same steps we have been using for more than 12 years.<br> In this steps, our architect visits your project to gather more.</h6>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 text-center mb-4">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <h5>Get Appointment</h5>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <i class="fa fa-users"></i>
    
                    <h5> Meet Customers </h5>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
    
                    <h5> Processing </h5>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <i class="fa fa-shipping-fast"></i>
                    <h5> Final Delivery </h5>
                </div>
                
            </div>
        </div>
    </div>





    <div class="client_row_area py-5">
        <div class="container text-center">
            <h3 class="mb-4">OUR CLIENTS</h3>
            <div class="row">
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 p-0">
                    <div class="pad_zero">
                        <img src="https://i1.wp.com/www.sbsinterior.com/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-17-at-18.20.50-1.jpeg?w=304" alt="">
                    </div>
                    
                </div>
                
            </div>
        </div>
        </div>
        
        
       
        
        
        
       

    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Blog</h6>
                    <h1 class="mb-4">Read The Latest News & Articles From Our Blog</h1>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">Define Your Style</h5>
                            </div>
                            <p>Before you begin designing your space, it's essential to define your style. Your style should be a reflection of your personality and taste. Do you prefer a minimalist and modern aesthetic or a cozy and traditional vibe? Knowing your style will help you make informed design decisions and create a space that feels authentic to you.</p>
                            <div class="d-flex">
                                <!-- <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small> -->
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Interior Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 105</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">Plan Your Space</h5>
                            </div>
                            <p>Once you've defined your style, it's time to plan your space. Start by considering the room's purpose and how you will use it. For example, if you're designing a living room, you'll need to consider seating arrangements, lighting, and storage. If you're redesigning a bedroom, you'll need to think about the bed placement, storage, and lighting.</p>
                            <div class="d-flex">
                                <!-- <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small> -->
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Interior Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 450</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">Furniture and Decor</h5>
                            </div>
                            <p>Furniture and decor are the final touches that bring your space together. Choose pieces that complement your style and serve a functional purpose. Don't be afraid to mix and match textures and materials to create visual interest. Decor items like artwork, rugs, and throw pillows can also add character and personality to a space.</p>
                            <div class="d-flex">
                                <!-- <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small> -->
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Interior Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 337</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


 
    <div class="hero-image-seo">
        <img class="w-100 d-block" src="/wp-content/themes/twentytwenty/assets/images/banner3.jpg" alt="seo banner">
        <div class="hero-text-seo">
          <div class="container">
            <div class="row pos_rltv">
              <div class="col-lg-8 col-md-8 mt-4 mt-md-0 pl-lg-5">
                <h2 class="elementor-heading-title elementor-size-default">If You Have Any Question, <br>Feel Free to Call <br>+91-9832623749</h2>
                <p>Give us an opportunity to build beautiful spaces for your awesome business, residents and retails.
    
                </p>
                <a href="#" class="btn btn-primary mt-3 py-2 px-4">Let's Work Together</a>
              </div>
             
            </div>
          </div>
        </div>
        <div class="overlay_seo_banner"></div>
      </div>


<?php
get_footer();
