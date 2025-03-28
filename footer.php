<!--Start Footer-->
<footer>
       <div class="container">
           <div class="row">
           <div class="col-md-4">
                <div class="footer-logo">
                    <?php if ( has_custom_logo() ) : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php the_custom_logo(); ?>
                        </a>
                    <?php else : ?>
                        <h2><?php bloginfo('name'); ?></h2>
                    <?php endif; ?>
                  <?php dynamic_sidebar('footer-2')?>
               
                </div>
            </div>
           
           <div class="col-md-4 col-sm-6 col-xs-6">
                  <?php dynamic_sidebar('footer-3')?>
               </div>
               <!--Start copyright-->
               <div class="col-md-4 col-sm-6 col-xs-6">
                  <?php dynamic_sidebar('footer-1')?>
               </div>
               <!--End copyright-->
               
               <!--start social icons-->
               
               
               <!--End social icons-->
           </div> <!-- /.row-->
       </div> <!-- /.container-->
   </footer>
   <!--End Footer-->

   <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>



    <script>
jQuery(document).ready(function($) {
    $('.nav .dropdown').hover(
        function() {
            $(this).addClass('show').children('.dropdown-menu').addClass('show');
        },
        function() {
            $(this).removeClass('show').children('.dropdown-menu').removeClass('show');
        }
    );
});
</script>

    <?php wp_footer() ?>
 </body>
</html>

