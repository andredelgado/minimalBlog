<?php

function minimalBlog_register_theme_menu() {
	register_nav_menu('primary', 'main menu');	
}

function minimalBlog_theme_support() {
    add_theme_support( 'post-thumbnails' );
}

add_action('init', 'minimalBlog_register_theme_menu');

add_action( 'after_setup_theme', 'minimalBlog_theme_support' );

?>