<?php

function load_css() {
	
	wp_register_style('css_bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('css_bootstrap');
	
	wp_register_style('css_style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('css_style');
	
	}
add_action('wp_enqueue_scripts', 'load_css');


function load_jquery() {
	
	wp_deregister_script('jquery');
	
	wp_enqueue_script('jquery', get_template_directory_uri() . '/jquery/jquery-3.6.1.min.js', '', 1, true);
	
	add_action('wp_enqueue_scripts', 'jquery');	
}
add_action('wp_enqueue_scripts', 'load_jquery');



function load_js() {
	
	wp_register_script('js_main', get_template_directory_uri() . '/js/main.js', '', 1, true);
	wp_enqueue_script('js_main');
	
	}
add_action('wp_enqueue_scripts', 'load_js');




add_theme_support('menus');
register_nav_menus(

	array(
		'top-menu' => __('Top Menu', 'theme'),
		'bottom-menu' => __('Bottom Menu', 'theme')
	)


);
