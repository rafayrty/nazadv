<?php



function loadScripts(){
    wp_enqueue_style( 'app', get_template_directory_uri() .'/dist/app.css') ;
    wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css') ;
    wp_enqueue_script( 'app',  get_template_directory_uri() .'/dist/app.js' );
}

add_action( 'wp_enqueue_scripts', 'loadScripts' );

register_nav_menus( array(
	'header-menu' => 'Header Menu',
  'fullscreen-menu' => 'FullScreen Menu'
) );