<?php

if( ! function_exists('tfaccounting_setup')) :

	function tfaccounting_setup() {
		// let Wordpress handle the Title tags
		add_theme_support('title-tag');
	}

endif;
add_action('after_setup_theme', 'tfaccounting_setup');

/* -- Register Menus --- */

function register_tfaccounting_menus() {
		register_nav_menus(
			 array(
			 		'primary' => __('Primary Menu'),
			 		'footer'  => __('Footer Menu')
			 )
		);
}

add_action('init', 'register_tfaccounting_menus');

/* --- Add Stylesheets --- */

function tfaccounting_scripts() {

	// Enqueue Main Stylesheet
	wp_enqueue_style('tfaccounting_styles', get_stylesheet_uri());
	// Enqueue Google Fonts, Raleway 
	wp_enqueue_style('tfaccounting_styles', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700');
}

add_action('wp_enqueue_scripts', 'tfaccounting_scripts');


/* -- Register Widget Areas --- */

function tfaccounting_widget_init() {
		register_sidebar( 
			array (
            		'name' 		  => __('Main Sidebar', 'tfaccounting'),
            		'id' 		  => 'main-sidebar',
            		'description' => __('Widgets added here will appear in all pages using the Two Column Template', 'tfaccounting'),
            		'before_widget' => '<section id="%1$s" class="widget %2$s">',
            		'after_widget'  => '</section>',
            		'before_title'  => '<h2 class="widget-title">',
            		'after_title'   => '</h2>'

		));
}

add_action('widgets_init', 'tfaccounting_widget_init');

