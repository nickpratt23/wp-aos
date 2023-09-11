<?php
/*Plugin Name: Animate On Scroll
Plugin URI: https://nap29.com/plugins/animate-on-scroll/
Description: This plugin registers and initializes AOS library https://michalsnik.github.io/aos/ in WordPress.
Version: 1.0
Author: Nick Pratt
Author URI: https://nap29.com
License: GPLv2
*/


// Register and Enqueue JavaScript
function nap29_enqueue_aos_js() {
    wp_enqueue_script('aos-js', plugins_url('/js/aos.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'nap29_enqueue_aos_js');

// Register and Enqueue CSS
function nap29_enqueue_aos_css() {
    wp_enqueue_style('aos-css', plugins_url('/css/aos.css', __FILE__), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'nap29_enqueue_aos_css');
