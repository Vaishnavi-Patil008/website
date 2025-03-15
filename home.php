
<?php
/**
 * Template Name: Home
 */

get_header(); ?>
        <!-- Start Slider  -->
        <section id="home" class="home">
    <div class="home-banner" style="position: relative; text-align: center;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/1.jpg" alt="Banner Image" style="width: 100%; height: auto;">
        <div class="banner-contentz" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
            <h1>FinVest focuses on Your Uniqueness</h1>
            <p style="text-align:justify">Our solutions are specifically designed for Salaried, Professionals & New age entrepreneurs.</p>
            <a href="http://localhost/wordpress/12-2/" class="btn btn-white">Schedule Free Call</a>
            <a href="http://localhost/wordpress/12-2/" class="btn btn-white">Whatsapp Us</a>
        </div>
    </div>
</section>

<!-- Start About Us Section -->
<section class="section about-section">
    <div class="container">
        <div class="title-box text-center">
            <h2 class="title">About Us</h2>
        </div>

        <div class="row align-items-center">
            <!-- Left Side Content -->
            <div class="col-md-6">
                <div class="about-content">
                    <h3>Our Purpose</h3>
                    <p style="text-align:justify">Our research reveals that many salaried and professional individuals lack a basic understanding of finances, often relying on intuition and seeking advice from friends, search engines, and financial influencers. This fragmented approach leads to poor decision-making, scattered financials, and broken strategies. To address this, we offer a comprehensive solution by bringing all financial aspects of salaried and professional individuals under one roof. Through our platform, we aim to provide integrated and holistic financial management, bridging awareness about gaps and empowering individuals to make well-informed decisions for a more secure financial future.</p>
                </div>
            </div>

            <!-- Right Side Overlapping Images -->
            <div class="col-md-6">
                <div class="about-image-wrapper">
                    <div class="about-background-box"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/do1.png" alt="services" class="about-main-image" style="left:100px">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/do2.png" alt="services" class="about-overlay-image">
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <!-- Left Side Overlapping Images -->
            <div class="col-md-6">
                <div class="about-image-wrapper left">
                    <div class="about-background-box"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.png" alt="services" class="about-main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.png" alt="services" class="about-overlay-image">
                </div>
            </div>

            <!-- Right Side Content -->
            <div class="col-md-6">
                <div class="about-content">
                    <h3>Our Objective</h3>
                    <p style="text-align:justify">As a family office, we specialize in crafting personalized financial solutions tailored to meet the needs of salaried professionals and new-age entrepreneurs. Our knowledgeable team, comprising experts from various financial disciplines, covers a range of areas including compliance (Income tax, GST, PF, etc.), risk management through customized insurance proposals, diversified investments with a multi-product portfolio, and educational support. We empower you with the right financial understanding, enabling you to make informed decisions or seek assistance where needed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

  <!--End Section-->
  <div class="title-box text-center">
                    <h2 class="title">We are proud of our works</h2>
                 </div> 
  <?php if(get_field('$bg_image')); ?>
  <!-- Start Facts-->
  <section id="facts" class="section parallax" style="background-image:url(<?php the_field('bg_image'); ?>)">
  
  <div class="overlay"></div>
   
       <div class="container">
          
           <div class="row">
                  
                <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                    <span><i class="icon-happy"></i></span>
                    <h3>+841</h3>
                    <span>Companies Employees</span>
                </div>
                <!-- End Item-->
 
                 <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-presentation"></i></span>
                    <h3>+800</h3>
                    <span>Families</span>
                </div>
                <!-- End Item-->

                 <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-target"></i></span>
                    <h3>+1232</h3>
                    <span>Income Under Management</span>
                </div>
                <!-- End Item-->

                 <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-trophy"></i></span>
                    <h3>+300</h3>
                    <span>AUM</span>
                </div>
                <!-- End Item-->

             </div> <!-- /.row -->
       </div> <!-- /.container -->
  </section>
  <!--End Facts--> 
       

       <!-- Start Skills Section -->
<section id="skills" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="title-box text-center white">
            <h2 class="title">Exploring Financial Triumphs: Real Stories, Real Results.</h2>
        </div>

        <!-- Skill Slider -->
        <div class="owl-carousel skills-slider">
            <!-- Skill #1 -->
            <div class="skill-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case5.jpg" alt="Photoshop"/>
                <div class="skill-info">
                    <h4>Tax Planning</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- Skill #2 -->
            <div class="skill-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case3.jpg" alt="WordPress"/>
                <div class="skill-info">
                    <h4>Investment</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- Skill #3 -->
            <div class="skill-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case4.jpg" alt="Graphic"/>
                <div class="skill-info">
                    <h4>Insurance</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- Skill #4 -->
            <div class="skill-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loss.png" alt="Development"/>
                <div class="skill-info">
                    <h4>Loss</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Skills Section -->


 
  <!--Start Services-->
   <section id="services" class="section">
        <div class="container">
            <div class="row">
            
                 <div class="title-box text-center">
                    <h2 class="title">Services</h2>
                 </div>
              
               <!--Services Item-->
               <div class="col-md-6">
                   <div class="services-box">
                       <div class="services-icon" >
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/com.jpg" alt="">
                       </div> 
                       <div class="services-desc">
                          <h4><?php the_field('service_title'); ?></h4>
                          <p> <?php the_field('service_des');?></p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
                
                <!--Services Item-->
               <div class="col-md-6">
                   <div class="services-box">
                       <div class="services-icon">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/risk.jpg" alt="">    
                    </div> 
                       <div class="services-desc">
                          <h4><?php the_field('service_tit1'); ?></h4>
                          <p><?php the_field('service_des1'); ?></p>
                       </div>
                   </div>
               </div>
               <!--End services Item-->
          </div> 
               <!--Services Item-->
               <div class="col-md-6">
                   <div class="services-box">
                       <div class="services-icon"> 
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/wealth.jpg" alt="">    
                    </div> 
                       <div class="services-desc">
                          <h4><?php the_field('service_tit2'); ?></h4>
                          <p ><?php the_field('service_des2'); ?> </p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
               <!--Services Item -->
               <div class="col-md-6">
                   <div class="services-box">
                       <div class="services-icon"> 
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aducation.jpg" alt="">    
                    </div> 
                       <div class="services-desc">
                          <h4><?php the_field('service_tit3'); ?></h4>
                          <p><?php the_field('service_des3');?> </p>
                       </div>
                   </div>      
            </div> <!--/.row-->
        </div> <!--/.container-->
   </section> 
  <!--End Services-->
   <!-- Start blog-->
   <section id="blog" class="section">
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center">
                    <h2 class="title">Latest Blog</h2>
                 </div>
                <?php 
                  $blogs_args = array(
                    'post_type' => 'post',
                    'post_per_page' => 3
                  );

                  $blog_posts = new WP_Query($blogs_args);
                  while($blog_posts->have_posts()){
                    $blog_posts->the_post(); 
                  
                ?>


               <!-- Start Blog item #1-->
               <div class="col-md-4">
                   <div class="blog-post">
                         <div class="post-media">
                            <a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail();?>
                            </a>
                         </div>
                       <div class="post-desc">
                           <h4><?php the_title() ?> </h4>
                           <h5><?php the_date() ?>/ <?php echo get_comments_number() ?></h5>
                           <p><?php the_excerpt() ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-gray-border">Read More</a>
                       </div>
                   </div>
               </div>
           <?php } ?>

           </div> <!--/.row-->
       </div> <!--/.container-->
   </section>
   <!-- End blog-->
    
    <!--Start clients-->
    <section id="clients" class="section">
           <div class="container">
               <div class="row">
               
            <div class="title-box text-center">
                <h2 class="title">Testimonials</h2>
             </div>
                
             <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
		         </div>
               </div> <!--/.row-->
         </div> <!--/.container-->
    </section>
   <!--End clients-->
   
 <!-- Start Contact Section -->
 <section id="contact" class="section parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="title-box text-center">
                <h2 class="title">Get in Touch</h2>
                <p class="subtitle">We'd love to hear from you! Fill out the form below.</p>
            </div>
        </div>

        <div class="row align-items-center">
            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="contact-form-wrapper">
                    <h3>Contact Us</h3>
                    <p class="form-text">Have questions? We're here to help.</p>
                    <?php echo do_shortcode('[contact-form-7 id="f0336b5" title="Contact form 1"]'); ?>
                </div>
            </div>

            <!-- Overlapping Image Effect -->
            <div class="col-md-6">
                <div class="contact-image-wrapper">
                    <div class="background-box"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contactform.png" alt="services" class="contact-image">
                </div>
            </div>
        </div>
    </div> 
</section>

<?php get_footer(); ?>
