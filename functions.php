<?php
function myteam2_setup(){

}

add_action('after_setup_theme', 'myteam2_setup');

function myteam2_sidebars(){
//REGISTRERAR SIDEBARS
	register_sidebar(array(
		'name'	=>	'Blog sidebar'
}

add_action('widgets_init', 'myteam2_sidebars');

function myteam2_scripts_and_styles(){
	//Ladda Bootstrap 4
	wp_enqueue_style( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', array(),'4.0.0-alpha.6','all');
	//ladda egna styles
	wp_enqueue_style( 'myteam2-site', get_template_directory_uri() . '/assets/css.site.css', array('bootstrap4'),'20170404012','all');


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

