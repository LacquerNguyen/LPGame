<?php
if ( !defined( 'ABSPATH' ) ) exit;
define('URL_IMAGE', get_stylesheet_directory_uri().'/assets/images');

add_theme_support( 'menus' );
register_nav_menus(
    array(
        'main-index' => 'Menu Index'
    )
);
register_nav_menus(
  array(
      'main-top' => 'Menu Top'
  )
);
if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_dequeue_style( 'sentry' );
        wp_enqueue_script( 'wow_js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/wow.min.js','','',true );
        wp_enqueue_script( 'dropdown_js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/dropdown.js','','',true );
        wp_enqueue_script( 'modal_js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/modal.js','','',true );
        wp_enqueue_script( 'main_js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/main.js','','',true );
        wp_enqueue_style( 'animate',  get_stylesheet_directory_uri()  . '/assets/css/animate.css', array()) ;
        wp_enqueue_style( 'slick',  get_stylesheet_directory_uri()  . '/assets/css/slick.css', array()) ;
        wp_enqueue_style( 'main',  get_stylesheet_directory_uri()  . '/assets/css/main.css', array()) ;

        wp_localize_script( 'jquery', 'ajax_object', array(
          'ajaxurl' => admin_url( 'admin-ajax.php' ),
        ));
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 40 );

function add_para_js() {
  if (is_front_page()) {
  }
}
add_action('wp_enqueue_scripts', 'add_para_js');

// Register menu
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu') );
  register_nav_menu( 'sp-menu', __( 'SP Menu') );
  register_nav_menu( 'footer', __( 'Footer Menu') );
}

function use_advanced_custom_field($elem) {
	if (function_exists('get_field')) {
		if (get_field($elem)) {
			return true;
		}
	}
}

add_filter( 'xmlrpc_enabled', '__return_false' );

function cf7_footer_script(){ 
  //if page name is contact.
  if ( is_page('download')) {?>
    <script>
    jQuery(document).ready(function() {
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        document.getElementById('contactForm').modal('hide');
      }, false );
    });
    </script>
  <?php }
}
// add_action('wp_footer', 'cf7_footer_script');

add_action( 'after_setup_theme', 'ja_theme_setup' );
function ja_theme_setup() {
    add_theme_support( 'post-thumbnails');
}

