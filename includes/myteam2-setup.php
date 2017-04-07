<?php

require_once('wp-bootstrap-navwalker.php');

function myteam2_setup(){

}

add_image_size('post-featured-image', 760, 9999, 'false');


//stöd för featured images och post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150, false);


//support for site-logo

function myteam2_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}




function myteam2_custom_header_setup() {
    $args = array(
	'flex-width'    => true,
	'width'         => 1800,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
    );
    add_theme_support( 'custom-header', $args );
}


//registrera huvudmeny
register_nav_menu('primary_menu', __('Primary Menu', 'myteam2'));

add_action('after_setup_theme', 'myteam2_setup');


function myteam2_sidebars(){
//REGISTRERAR SIDEBARS
	register_sidebar(array(
		'name'	=>	'Blog sidebar',
		'id'	=>	'blog-sidebar',
		//vi vill att varje  widget ska vara ett listitem
		'before_widget'	=> '<li class="widget">',
		//stäng listitemet
		'after_widget'	=>	'</li>',
		//styr utseendet på widgetfälten
		'before_title' =>	'<h2>',
		'after_title' =>	'</h2>',

		));
}






function myteam2_scripts_and_styles(){
	//Ladda Bootstrap 4
	wp_enqueue_style( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', array(),'4.0.0-alpha.6','all');
	//ladda egna styles
	wp_enqueue_style( 'myteam2-site', get_template_directory_uri() . '/assets/css/site.css', array('bootstrap4'),'20170404012','all');


	//se till att vi får nya jquery, gammal version inbyggs i i WP
	wp_deregister_script('jquery');

	//ladda jquery
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', array(),'3.0.0.1','all');
	//laddda tether
	wp_enqueue_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'),'1.4.0','all');
	//ladda bootstraps javascript
	wp_enqueue_script( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery', 'tether'),'4.0.0-alpha.6','all');


}

add_action('wp_enqueue_scripts', 'myteam2_scripts_and_styles');

