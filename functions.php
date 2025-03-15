<?php 
function fantasy_theme_setup(){
    add_theme_support('custom-logo', array(
        'height'      => 100, 
        'width'       => 250, 
        'flex-height' => true,
        'flex-width'  => true,
    ));
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('home-featured', 680, 400, array('center','center'));
  add_image_size('single-img', 600, 550, array('center','center'));
  add_theme_support('automatic-feed-links');  

  register_nav_menus(array(
    'primary' =>__('Primary Menu','fantasy')

  ) );
};
add_action('after_setup_theme', 'fantasy_theme_setup');



function fantasy_widgets_init() {

    register_sidebar( array(
        'name'          => __('Primary Sidebar', 'fantasy'),
        'id'            => 'main-sidebar',
        'description'   => 'Main sidebar on right side',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',  // Fix the closing tag
    ) );

    register_sidebar( array(
        'name'          => __('Footer Widget 1', 'fantasy'),
        'id'            => 'footer-1',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'fantasy'),  // Fix text domain
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',  // Fix the closing tag
    ) );

    register_sidebar( array(
        'name'          => __('Footer Widget 2', 'fantasy'),
        'id'            => 'footer-2',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'fantasy'),  // Fix text domain
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',  // Fix the closing tag
    ) );

    register_sidebar( array(
        'name'          => __('Footer Widget 3', 'fantasy'),
        'id'            => 'footer-3',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'fantasy'),  // Fix text domain
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',  // Fix the closing tag
    ) );
}

// Move the add_action call outside the function
add_action( 'widgets_init', 'fantasy_widgets_init' );

function enqueue_owl_carousel() {
    wp_enqueue_style('owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');

    wp_enqueue_script('jquery'); // Ensure jQuery is loaded
    wp_enqueue_script('owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '', true);
    wp_enqueue_script('custom-owl-slider', get_template_directory_uri() . '/assets/js/slider.js', array('jquery', 'owl-carousel-js'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_owl_carousel');



function fantasy_scripts(){
 wp_enqueue_style('style',get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts','fantasy_scripts')




?>