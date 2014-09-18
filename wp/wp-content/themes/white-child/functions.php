<?php

function my_scripts_method() {
	wp_enqueue_script('custom-script', get_stylesheet_directory_uri().'/js/custom-script.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function localize_data(){
	// Now we can localize the script with our data.
	$translation_array = array( 'some_name' => __(get_stylesheet_directory_uri()), 'a_value' => '10' );
	wp_localize_script( 'localise-data', 'custom_script', $translation_array );
	wp_enqueue_script( 'localise-data' );
}
add_action( 'wp_enqueue_scripts', 'localize_data' );