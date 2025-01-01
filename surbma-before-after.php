<?php

/*
Plugin Name: CPS | Before / After Images
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Simply add a before / after image to any WordPress website.

Version: 2.2

Author: CherryPick Studios
Author URI: https://www.cherrypickstudios.com/

License: GPLv2

Text Domain: surbma-before-after
Domain Path: /languages/
*/

// Prevent direct access to the plugin
defined( 'ABSPATH' ) || exit;

// Localization
add_action( 'init', function() {
	load_plugin_textdomain( 'surbma-before-after', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
} );

add_action( 'wp_enqueue_scripts', function( ) {
	wp_enqueue_script( 'surbma-before-after-event-move', plugins_url( '', __FILE__ ) . '/js/jquery.event.move.js', array('jquery'), '2.0.0', true );
	wp_enqueue_script( 'surbma-before-after-twentytwenty', plugins_url( '', __FILE__ ) . '/js/jquery.twentytwenty.js', array('jquery'), '1.0.0', true );
	wp_enqueue_style( 'surbma-before-after-twentytwenty-style', plugins_url( '', __FILE__ ) . '/css/twentytwenty.css', array(), '1.0.0' );
} );

add_action( 'wp_footer', function() {
	echo '<script>jQuery(function(){jQuery(".twentytwenty-container").twentytwenty();});</script>';
}, 999 );

add_shortcode( 'surbma-before-after', function( $atts ) {
	extract( shortcode_atts( array(
		'before_src' => '',
		'before_alt' => '',
		'after_src' => '',
		'after_alt' => '',
		'width' => '',
		'height' => ''
	), $atts ) );
	return '<div class="twentytwenty-container"><img src="' . esc_url( $before_src ) . '" alt="' . esc_attr( $before_alt ) . '" width="' . esc_attr( $width ) . '" height="' . esc_attr( $height ) . '" /><img src="' . esc_url( $after_src ) . '" alt="' . esc_attr( $after_alt ) . '" width="' . esc_attr( $width ) . '" height="' . esc_attr( $height ) . '" /></div>';
} );