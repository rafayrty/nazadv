<?php



function loadScripts(){
    wp_enqueue_style( 'app', get_template_directory_uri() .'/dist/app.css') ;
    wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css') ;
    wp_enqueue_script( 'app',  get_template_directory_uri() .'/dist/app.js' );
}

add_action( 'wp_enqueue_scripts', 'loadScripts' );

add_filter('style_loader_tag', 'development_disable_style_caching');
function development_disable_style_caching($tag){
  return str_replace(get_bloginfo('version'), time(), $tag);
}