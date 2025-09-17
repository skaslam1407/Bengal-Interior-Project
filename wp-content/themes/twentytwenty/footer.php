<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<!-- Footer Start -->
            <div class="bg-dark text-white pt-5 px-sm-3 px-md-5 footer_custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>28, Grant St, Esplanade,West Bengal-700013</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 9735240010</p>
                <p><i class="fa fa-envelope mr-2"></i>info@bengalinterior.in</p>
                <p><i class="fab fa-whatsapp mr-2"></i>+91 9735240010</p>

                <div class="d-flex justify-content-start mt-4">
                    <!-- <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a> -->
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.facebook.com/people/Bengal-Interior/100063719418728/" target="_blank"><i class="fab fa-facebook-f" ></i></a>
                    <!-- <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a> -->
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="<?php echo site_url();?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="<?php echo site_url();?>/about"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="<?php echo site_url();?>/service"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="<?php echo site_url();?>/project"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white mb-2" href="<?php echo site_url();?>/gallery"><i class="fa fa-angle-right mr-2"></i>Gallery</a>
                    <a class="text-white" href="<?php echo site_url();?>/contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
           <!-- <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Instagram Feed</h4>
                <div class="d-flex flex-column justify-content-start">
                 <?php //echo do_shortcode( '[insta-gallery id="1"]' );  ?>
                </div>
            </div>-->
            <div class="col-lg-3 col-md-12 mb-5">
                <h4 class="text-primary mb-4">Newsletter</h4>
                   <?php echo do_shortcode( '[contact-form-7 id="111" title="Newsletter Form"]' );  ?>
                
            </div>
        </div>
        <div class="container border-top border-secondary py-3">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="<?php echo site_url();?>">Bengal Interior</a>. All Rights Reserved. <?php echo date('Y');?>
            </p>
        </div>
    </div>
</div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript JS libraries -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/easing/easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <?php wp_footer(); ?>


  <script>
      $(window).on('load', function(){
        $('#loading').hide();
      });
  </script>

  <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "106483344313342");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
     
  <script>

    $(document).ready(function(){

     


     const url = new URL(window.location.href);

     console.log(url['pathname']);

    
         
         
         if (url['pathname'] == '/') {
           $(".index").addClass("active");
         } else {
            $(".index").removeClass("active");
         }
         
                  
         if (url['pathname'] == '/about/') {
           $(".about").addClass("active");
         } else {
            $(".about").removeClass("active");
         }
     
         
         if (url['pathname'] == '/service/') {
           $(".service").addClass("active");
         } else {
            $(".service").removeClass("active");
         }
         
        if (url['pathname'] == '/project/') {
           $(".project").addClass("active");
         } else {
            $(".project").removeClass("active");
         }
    
            if (url['pathname'] == '/gallery/') {
           $(".galler").addClass("active");
         } else {
            $(".galler").removeClass("active");
         }
    
    
        if (url['pathname'] == '/contact/') {
           $(".contact").addClass("active");
         } else {
            $(".contact").removeClass("active");
         }
    
    
    
    
    
      });

    </script>

</body>

</html>