<?php
/**
** activation theme
**/

/* Deregister Bootstrap parent default, for SCSS gesture in child theme */
function deregister_bs_default() {
    wp_deregister_style( 'underboot-bootstrap-reboot' );
    wp_deregister_style( 'underboot-bootstrap' );
    
}
add_action('wp_dequeue_script', 'deregister_bs_default');

/* Enqueue styles */
function theme_enqueue_styles() {

    /* Parent styles */
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    /* G-fonts */
    wp_enqueue_style( 'G-fonts', 'https://fonts.googleapis.com/css2?family=Norican&family=Roboto:wght@300;400;500;700&display=swap', array(), 1 );

    /* Material icons */
    wp_enqueue_style( 'icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), 1 );
    
    /* My buttons */
    wp_enqueue_style( 'btns', get_stylesheet_directory_uri() . '/assets/css/buttons.css', array(), 1 );

    /* My styles */
    wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), 1 );
    
    

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/* Enqueue scripts */
function theme_enqueue_scripts() {
    
    
    /* GSAP */
    wp_enqueue_script( 'GSAP', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', array(), '3.6.1', true ); 

    /* My script */
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), 1, true ); //true charge in footer
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


