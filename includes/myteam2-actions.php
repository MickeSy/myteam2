<?php
add_action( 'after_setup_theme', 'myteam2_custom_logo_setup' );


add_action( 'after_setup_theme', 'myteam2_custom_header_setup' );


add_action('widgets_init', 'myteam2_sidebars');

add_action( 'after_setup_theme', 'myteam2_after_setup_theme' );

add_action('wp_enqueue_scripts', 'myteam2_scripts_and_styles');

?>