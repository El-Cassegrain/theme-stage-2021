<?php
/**
** activation theme
**/


/* Remove WP Crap */
/* Functions */
//remove WP version
remove_action('wp_head', 'wp_generator');

//Display adminbar
show_admin_bar( false );

/* Suppr useless things */
remove_action( 'wp_head', 'wlwmanifest_link');

function wp_remove_version() {
    return '';
}
add_filter('the_generator', 'wp_remove_version');

remove_action ('wp_head', 'rsd_link');
	
remove_action( 'wp_head', 'wp_shortlink_wp_head');

//supprimer les arguments des ressources statiques
function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

define('WP_POST_REVISIONS', 2);

add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
wp_deregister_script('heartbeat');
}

function wpdocs_dequeue_dashicon() {
        if (current_user_can( 'update_core' )) {
            return;
        }
        wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

/* Disable oEmbed */
function my_deregister_scripts(){
  wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

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
    
    /* BS */
    wp_enqueue_script( 'BS', get_stylesheet_directory_uri() . '/sources/js/bootstrap.bundle.min.js', array(), '1', true ); 
    
    /* GSAP */
    wp_enqueue_script( 'GSAP', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', array(), '3.6.1', true ); 
    
    /* On front-page */
    wp_enqueue_script( 'active-gsap', get_stylesheet_directory_uri() . '/assets/js/gsap-script.js', array(), 1, true ); //true charge in footer
    
    /* My script */
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), 1, true ); //true charge in footer
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


add_image_size( '1366x313', 1366, 313, true );