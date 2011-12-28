<?php

//  Preload modifications

remove_action('wp_head', 'wp_generator');

show_admin_bar(false);


//  Theme functions

function copyYear ($year) {
  if (date('Y') <= $year) {
    return date('Y');
  } else return $year . ' - ' . date('Y');
}

function trimPost ($words) {
  $content = get_the_content();

  if (strlen($content) <= $words) {
    return the_content();
  }

  else return (substr($content, 0, (strrpos((substr($content, 0, $words)), " "))) . ' ... ');
}

function theme_styles_method() {

  wp_register_style('fancybox', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.css', false, '2.0.4');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.4.0');
  wp_enqueue_style('fancybox', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.css', false, '2.0.4');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', false, '1.0.2', 'all');

}

function theme_scripts_method() {

  wp_enqueue_script('jquery');

  wp_enqueue_script('placeholder', get_template_directory_uri() . '/js/jquery.placeholder.js', array('jquery'),'6.4.11' );
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.pack.js', array('jquery'),'2.0.4' );
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'),'1.0.2' );

}

add_action('wp_enqueue_scripts', 'theme_styles_method');
add_action('wp_enqueue_scripts', 'theme_scripts_method');


if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}
