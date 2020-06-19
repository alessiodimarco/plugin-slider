<?php
/**
 * Plugin Name: Semplice Slider
 * Plugin URI: https://www.esempio.com
 * Description: Mostra uno slider mediante l'utilizzo dello shortcode [slider]
 * Version: 1
 * Text Domain: semplice-slider
 * Author: Alessio di Marcoberardino
 * Author URI: https://www.esempio.com
 */
 
 function tbare_wordpress_plugin_demo($atts) {
	 
	wp_register_script( 'slider-owl-js', plugin_dir_url( __FILE__ ).('/js/owl.carousel.min.js'), array( 'jquery' ) );
    wp_enqueue_script( 'slider-owl-js' );
	
	wp_register_script( 'slider-init-owl-js', plugin_dir_url( __FILE__ ).('/js/init.js'), array( 'jquery' ) );
    wp_enqueue_script( 'slider-init-owl-js' );
	
	wp_enqueue_style( 'slider-owl-css', plugin_dir_url( __FILE__ ).( '/css/owl.carousel.min.css' ) );
	wp_enqueue_style( 'slider-css', plugin_dir_url( __FILE__ ).( '/css/slider.css' ) );
	
	wp_enqueue_style( 'slider-owl-theme-css', plugin_dir_url( __FILE__ ).( '/css/owl.theme.default.min.css' ) );
	wp_enqueue_style( 'slider-animate-css', plugin_dir_url( __FILE__ ).( '/css/animate.css' ) );
	
	include 'template.php';
	
    return ;
}

add_shortcode('slider', 'tbare_wordpress_plugin_demo');
?>
