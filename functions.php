<?php

function AmnetTheme_resources(){
	wp_enqueue_style('theme-style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap',get_bloginfo('template_url').'/css/bootstrap.css');
	wp_enqueue_script('script',get_bloginfo('template_url').'/js/jquery.js');
	wp_enqueue_script('cdn-js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('bootstrap-min-js','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	wp_enqueue_style('font-cdn','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts','AmnetTheme_resources');
