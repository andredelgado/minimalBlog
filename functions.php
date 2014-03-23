<?php

function minimalBlog_register_theme_menu() {
	register_nav_menu('primary', 'main menu');	
}

add_action('init', 'minimalBlog_register_theme_menu');

?>