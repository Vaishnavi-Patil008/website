

<?php
/**
 * Template Name: About
 */

get_header(); ?>

<?php get_header(); ?>

<!-- Full-Width Background Banner -->
<section class="about-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/parallax/testimonials.jpg');">
    <div class="overlay"></div>
    <div class="container text-center">
        <h1 style="color:white">About Us</h1>
    </div>
</section>

<!-- How We Started Section -->
<section class="about-section"style="margin-top:50px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 ">
                <h2 style="text-align:center">How We Started</h2>
                <p style="text-align:justify">During the COVID-19 pandemic, we observed significant financial challenges among our network of salaried and professional individuals. This prompted us to delve deeper into the factors influencing financial decisions. After conducting a study involving 600+ participants, we discovered a lack of a comprehensive approach to financial management. Each person has unique expectations from financial management, and many are acting as their own financial integrators. Motivated by this, we initiated FinVest with a mission to address these diverse financial needs with a mission to</p>
                <p class="highlighted-text">"Spread financial literacy in salaried and professional people and help them take control of their finance."</p>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team3.jpg" alt="Teamwork" class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team4.jpg" alt="Startup" class="overlay-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 stats-box">
                <i class="icon-users"></i>
                <h3>120+</h3>
                <p>Companies Employees</p>
            </div>
            <div class="col-md-3 col-6 stats-box">
                <i class="icon-home"></i>
                <h3>400+</h3>
                <p>Families</p>
            </div>
            <div class="col-md-3 col-6 stats-box">
                <i class="icon-money"></i>
                <h3>60CR+</h3>
                <p>Income Under Management</p>
            </div>
            <div class="col-md-3 col-6 stats-box">
                <i class="icon-settings"></i>
                <h3>20CR+</h3>
                <p>AUM</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="about-section" style="margin-top: 80px !important;margin-bottom: 90px !important;">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-6 col-md-12 ">
                <div class="image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about4.png" alt="Question" class="main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about3.png" alt="Team" class="overlay-image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <h2 style="text-align:center">Why Choose Us</h2>
                <p style="text-align:justify">With over 20 years of combined experience in financial solutions, we specialize in client-oriented results and rustworthy delivery. Our approach is guided by a long-term focus, recognizing the uniqueness of everyone’s financial approach. As a digital-first enterprise, we follow streamlined processes, adhering to ethical business practices. Our commitment includes confidentiality, a clear fee structure, and compliance with regulations, providing a flexible and reliable partnership tailored to your needs.</p>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>