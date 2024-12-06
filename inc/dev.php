<?php
function vanchien_add_tailwindcss()
{
	wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/assets/css/output.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'vanchien_add_tailwindcss');