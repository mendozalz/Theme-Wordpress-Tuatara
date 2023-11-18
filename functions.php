<?php 


require get_template_directory() . '/includes/walker-menu.php';

function mlz_tuatara(){

    wp_register_script('script', get_stylesheet_directory_uri(). '/js/main.js', array('jquery'), '1', true );
    wp_enqueue_script('script');

}

add_action('wp_enqueue_scripts', 'mlz_tuatara');

function adding_my_new_header() {
    wp_enqueue_style( 'new_header', get_template_directory_uri() . '/css/main.css', '1.0' ); 
}

add_action( 'wp_enqueue_scripts', 'adding_my_new_header' );

function registrandoMenu(){
	register_nav_menus(array('Primary' => 'menu Header'));
}

add_action('after_setup_theme','registrandoMenu');

   // registrar Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					get_stylesheet_directory_uri() . '/css/bootstrap.min.css', 
  					array(), 
  					'4.1.3'
  					); 
}

add_action( 'wp_enqueue_scripts', 'bootstrap_css');

// Inclregistraruir Bootstrap JS
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js', 
  					get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 
  					array('jquery'), 
  					'4.1.3', 
  					true); 
}

add_action( 'wp_enqueue_scripts', 'bootstrap_js'); 

?>