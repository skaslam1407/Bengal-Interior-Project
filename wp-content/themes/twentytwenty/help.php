<?php

/**

 * Template Name: Help Support Page

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

                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">HELP TIPS</h1>

                </div>

                <div class="col-md-6 text-center text-md-right">

                    <div class="d-inline-flex align-items-center">

                        <a class="btn btn-outline-primary" href="<?php echo site_url();?>">Home</a>

                        <i class="fas fa-angle-double-right text-primary mx-2"></i>

                        <a class="btn btn-outline-primary disabled" href="<?php echo site_url();?>/help">HELP</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Page Header Start -->





    <!-- Help Tips Start -->

    <div class="container-fluid bg-light">

        <div class="container py-5">

               <div class="panel-group" id="accordion">

    <div class="panel panel-default">

      <div class="panel-heading">

        <h4 class="panel-title">

          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Q.> Consider the shape of the sofa?</a></h4>

      </div>

      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body">A: In addition to size and style, the shape of your sofa can also have an impact on your living room design. For example, an L-shaped sofa can help define separate areas within an open concept space, while a curved sofa can create a focal point in a larger room.</div>

      </div>

    </div>

    <div class="panel panel-default">

      <div class="panel-heading">

        <h4 class="panel-title">

          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Q.> Mix and match furniture styles ?</a>

        </h4>

      </div>

      <div id="collapse2" class="panel-collapse collapse">

        <div class="panel-body">A: Your sofa doesn't have to match the rest of your furniture exactly. Mixing and matching furniture styles can create an eclectic, interesting look. Just be sure to choose pieces that complement each other in terms of color, texture, and scale.</div>

      </div>

    </div>

    <div class="panel panel-default">

      <div class="panel-heading">

        <h4 class="panel-title">

          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Q.> Experiment with different seating arrangements ?</a>

        </h4>

      </div>

      <div id="collapse3" class="panel-collapse collapse">

        <div class="panel-body">A: Don't be afraid to experiment with different seating arrangements around your sofa. Try placing chairs or poufs around the sofa for extra seating, or create a conversation area with two facing sofas and a coffee table in between.</div>

      </div>

    </div>





       <div class="panel panel-default">

      <div class="panel-heading">

        <h4 class="panel-title">

          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Q.> Use area rugs to define space ?</a>

        </h4>

      </div>

      <div id="collapse4" class="panel-collapse collapse">

        <div class="panel-body">A: Area rugs can help define separate areas within an open concept living room. Place an area rug under your sofa to anchor the seating area and create a cozy, inviting space.</div>

      </div>

    </div>





       <div class="panel panel-default">

      <div class="panel-heading">

        <h4 class="panel-title">

          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Q.> Opt for a sleeper sofa ?</a>

        </h4>

      </div>

      <div id="collapse5" class="panel-collapse collapse">

        <div class="panel-body">A: If you frequently have guests staying overnight, consider a sleeper sofa. These sofas can be easily converted into a bed, making them a great option for small spaces or guest rooms.</div>

      </div>

    </div>





        <div class="panel panel-default">

      <div class="panel-heading">

        <h4 class="panel-title">

          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Q.> Consider the view from the sofa ?</a>

        </h4>

      </div>

      <div id="collapse6" class="panel-collapse collapse">

        <div class="panel-body">A: When arranging your sofa, consider the view from the seating area. Make sure that the sofa is positioned to take advantage of any views or focal points in the room, like a fireplace or a picture window.</div>

      </div>

    </div>







  </div>   

        </div>

    </div>

    <!-- Help Tips End -->





    



<?php

get_footer();