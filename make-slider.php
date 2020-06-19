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
	 
	wp_register_script( 'slider-owl-js', plugins_url('slider/js/owl.carousel.min.js'), array( 'jquery' ) );
    wp_enqueue_script( 'slider-owl-js' );
	
	wp_register_script( 'slider-init-owl-js', plugins_url('slider/js/init.js'), array( 'jquery' ) );
    wp_enqueue_script( 'slider-init-owl-js' );
	
	wp_enqueue_style( 'slider-owl-css', plugins_url( 'slider/css/owl.carousel.min.css' ) );
	wp_enqueue_style( 'slider-css', plugins_url( 'slider/css/slider.css' ) );
	
	wp_enqueue_style( 'slider-owl-theme-css', plugins_url( 'slider/css/owl.theme.default.min.css' ) );
	wp_enqueue_style( 'slider-animate-css', plugins_url( 'slider/css/animate.css' ) );
	
	include 'template.php';
	
    return ;
}

add_shortcode('slider', 'tbare_wordpress_plugin_demo');
 
