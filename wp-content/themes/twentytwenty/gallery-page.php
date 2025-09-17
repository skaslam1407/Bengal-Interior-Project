<?php

/**

 * Template Name: Gallery Page

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

<style>
    
.main {
  display: flex;
  flex-wrap: wrap;
  padding: 0 15px;
}
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}
.column #size {
  margin-top: 8px;
  vertical-align: middle;
  width:100%;
  cursor:pointer;
}
.column img {
  opacity: 0.9;
 }
.column img:hover {
  transform: scale(1.1);
  transition: transform .2s;
  opacity: 1;
 }
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  transition: transform .2s;
  }
}
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  transition: transform .2s;
  }
}
.credits{
  margin-top:50px; 
  padding:20px;
  background:white;
  border-radius:5px;
  width:450px;
  text-align:center;
  color:gray;
}
a {
  color:#000000;
  text-decoration:none;
  font-family: 'Quicksand', sans-serif;
}
a:hover{
  color:#006;
}

.gallery {
  width: 330px;
  margin: 0;
  padding: 0;
}
.comic-content {width:100%;}
.social-content {
    display: inline-block;
    position: relative;
    width: 100%;
    padding-top: 100%;
    cursor: pointer;
    overflow: hidden;
}
.comic-content .col-12:nth-child(n+4) {
    display: none;
}
.social-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    transform: scale(1);
    transition: .4s;
}
.gallery li { 
  display: none;
  float: left;
  list-style: none;
  margin-right: 10px;
}
.more, .less {
    background-color: #ec4732;
    clear: both;
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 14px;
    margin-top: 6px;
    padding: 11px 50px;
    text-align: center;
    text-transform: uppercase;
    width: auto;
}
</style>
 <!-- Page Header Start -->
    <div class="container py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">GALLERY</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="<?php echo site_url();?>">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="<?php echo site_url();?>/gallery">GALLERY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Gallery Start -->
    <div class="container-fluid pb-5">
        <div class="container">
          <h1 class="mb-4 mb-md-0 text-primary text-uppercase color-white">What We Do</h1>
                  <div class="comic-content row">
                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                          
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-1.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-1.jpg">

                        </a>
                      </div>
                      <div class="col-12 col-sm-6 col-lg-4 py-3">

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-2.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-2.jpg">

                        </a>

                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-3.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-3.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-4.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-4.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-5.jpg" target="_blank"  class="social-content">

                        <img class="social-photo"  src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-5.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-6.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-6.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-7.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-7.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-8.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-8.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-9.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-9.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-10.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-10.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-11.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-11.jpg">

                        </a>
                      </div>
                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-12.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-12.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-13.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-13.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-14.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-14.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-15.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-15.jpg">

                        </a>
                      </div>


                     <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-16.jpg" target="_blank"  class="social-content">

                        <img class="social-photo"  src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-16.jpg">

                        </a>
                      </div>


                     <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-17.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-17.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-18.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-18.jpg">

                        </a>
                      </div>


                       <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-19.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-19.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                         <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-20.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-20.jpg">

                        </a>
                      </div>


                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                         <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-21.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-21.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-22.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-22.jpg">

                        </a>
                      </div>


                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-23.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-23.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-24.jpg" target="_blank"  class="social-content">

                        <img class="social-photo"  src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-24.jpg">

                        </a>
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-25.jpg" target="_blank"  class="social-content">

                        <img class="social-photo" src="<?php echo get_template_directory_uri(); ?>/assets/gallery/gallery-25.jpg">

                        </a>

                      </div>


                     <!--  <div class="col-12 col-sm-6 col-lg-4 py-3">
                        
                      </div>



                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        
                      </div>



                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        
                      </div>

                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        
                      </div>


                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        
                      </div>



                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        
                      </div>


                      <div class="col-12 col-sm-6 col-lg-4 py-3">
                        
                      </div>
 -->


                  </div>


                  <div class="container" style="display: flex; justify-content: center; align-items: center;">
                   <div class="more">Show more</div>
                  <div class="less">Show less</div>
                  </div>

             
           
        </div>
    </div>
    <!-- Gallery  End -->


    

<?php
get_footer();?>

<script>
  

$(document).ready(function () {

   //console.log($('.comic-content .col-12').length);


    $('.comic-content .col-12:lt(9)').show();
    $('.less').hide();
    var items =  $('.comic-content .col-12').length;
    var shown =  3;
    $('.more').click(function () {
        
        shown = $('.comic-content .col-12:visible').length+3;
        if(shown< items) {
          $('.comic-content .col-12:lt('+shown+')').show(300);
        } else {
          $('.comic-content .col-12:lt('+items+')').show(300);
          $('.more').hide();
          $('.less').show();
        }
    });
    $('.less').click(function () {
        $('.comic-content .col-12').not(':lt(9)').hide(300);
        $('.more').show();
        $('.less').hide();
    });
});


</script>