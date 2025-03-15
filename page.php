<?php get_header() ?>
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
   <!--End Contact-->
   <?php get_footer() ?>