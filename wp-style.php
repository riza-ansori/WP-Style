<?php 

/*
Plugin Name: Wordpress Style
Version: 0.1
Author: Ansori Riza Yogi Saputro
Author URI: https://github.com/riza-ansori
*/

add_action( 'wp_enqueue_scripts', 'wp_style_func', 20 );

function wp_style_func(){
	wp_enqueue_style( 'wp-style', plugin_dir_url( __FILE__ ) .'css/wp-style.css' );
	wp_enqueue_style( 'font', plugin_dir_url( __FILE__ ) .'font-awesome/css/font-awesome.min.css' );
	wp_enqueue_script( 'wp-js', plugin_dir_url( __FILE__ ) .'js/wp-js.js', false );
}

?>