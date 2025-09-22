<?php 
/*Plugin Name: carousel
 *Description: Adds a responsive image carousel to your site using a simple shortcode. Includes customizable settings for autoplay, speed and navigation.
 *Version: 1.0
 *Author: David Mba
*/

//Define constants for path
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));

//Add plugin components
require_once PLUGIN_PATH . 'admin/settings-page.php';
require_once PLUGIN_URL . 'includes/shortcode-handler.php';

//enqueue style and script
function carousel_enqueue_assets() {
	wp_enqueue_style('carousel-style', PLUGIN_URL . 'assets/css/carousel-style.css');
	wp_enqueue_script('carousel-script', PLUGIN_URL . 'assets/js/carousel-script.js', array('jquery'), null, true);
}

// connect enqueueing function to wordpress enqueueing scripts hook
add_action('wp_enqueue_scripts', 'carousel_enqueue_assets');

//Activation hook
function carousel_activate(){
	//for default settings
}

register_activation_hook(__FILE__, 'carousel_activate');
