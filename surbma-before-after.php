<?php

/*
Plugin Name: Surbma - Before ←→ After
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Simply add a before-after image to any WordPress website.

Version: 1.1.0

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-before-after
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

// Localization
function surbma_before_after_init() {
	load_plugin_textdomain( 'surbma-before-after', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'surbma_before_after_init' );

function surbma_before_after_scripts( ) {
	wp_enqueue_script( 'surbma-before-after-event-move', plugins_url( '', __FILE__ ) . '/js/jquery.event.move.js', array('jquery'), '2.0.0', true );
	wp_enqueue_script( 'surbma-before-after-twentytwenty', plugins_url( '', __FILE__ ) . '/js/jquery.twentytwenty.js', array('jquery'), '1.0.0', true );

	wp_enqueue_style( 'surbma-before-after-twentytwenty-style', plugins_url( '', __FILE__ ) . '/css/twentytwenty.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'surbma_before_after_scripts' );

function surbma_before_after_footer_scripts() {
?>
<script>
jQuery(window).load(function() {
  jQuery(".twentytwenty-container").twentytwenty();
});
</script>
<?php
}
add_action( 'wp_footer', 'surbma_before_after_footer_scripts', 999 );

function surbma_before_after_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'before_src' => '',
		'before_alt' => '',
		'after_src' => '',
		'after_alt' => '',
		'width' => '',
		'height' => ''
	), $atts ) );
	return '<div class="twentytwenty-container"><img src="'.$before_src.'" alt="'.$before_alt.'" width="'.$width.'" height="'.$height.'" /><img src="'.$after_src.'" alt="'.$after_alt.'" width="'.$width.'" height="'.$height.'" /></div>';
}
add_shortcode( 'surbma-before-after', 'surbma_before_after_shortcode' );
