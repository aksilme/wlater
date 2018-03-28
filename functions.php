<?php
/**
 * Electro Child
 *
 * @package electro-child
 */

/**
 * Include all your custom code here
 */

function william_theme_scripts() {
	wp_enqueue_style( 'font-awsomewilliam', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'william-style', get_stylesheet_uri() );
   
}
add_action( 'wp_enqueue_scripts', 'william_theme_scripts' );