<?php
/*
Plugin Name: Carousel
Description : A plugin to display a configurable image carousel via shortcode.
Version: 1.0
Author: David Mba
*/

// define constants for path
define('CAROUSEL_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('CAROUSEL_PLUGIN_URL', plugin_dir_url(__FILE__));

// include plugin components
require_once CAROUSEL_PLUGIN_PATH . 'admin/settings-page.php';
require_once CAROUSEL_PLUGIN_PATH . 'includes/shortcode-handler.php';

// enqueue styles and scripts
function carousel_enqueue_scripts() {
	wp_enqueue_style('carousel-style', CAROUSEL_PLUGIN_URL. 'assets/css/carousel-style.css');
	wp_enqueue_script('carousel-script', CAROUSEL_PLUGIN_URL. 'assets/js/carousel-script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'carousel_enqueue_assets');

// Optional: Add activation hook
function carousel_activate() {
	// you can initialize default settings here

}
register_activation_hook(__FILE__, 'carousel_activate');
