<?php

// This File controls the load of installed plugins, ensuring that plugin
// scripts and assets are loaded ONLY on the pages they are needed
// FRAMEWORK/INCLUDES/CONTROLS/PLUGIN-CONTROL.PHP
// @ ask Chris about this if you are not sure
// -------------------------------------------------------------------------------------------
// LIST OF PLUGINS CONTROLLED IN THIS FILE
//
// Example Plugin
//
//
// ====================================================


// Control Plugin - EXAMPLE
// Only Load Example Plugin on Home Page
// ================================================

// Check if the Plugin Class Exists and the
// function you are making does not exist
// ===============================
/*
if( class_exists( 'DEPENDENCY_CLASS' ) && ! function_exists( 'your_function_name' ) ){

	add_action( 'wp_enqueue_scripts', 'your_function_name', 100);

	// Load the script only on the front page
	// and Do Not load in the admin area
	function your_function_name(){

		if ( ! is_front_page()  && ! is_admin() ){

			//Remove Scripts
			wp_deregister_script('name-of-script-to-de-register');

			//Remove Scripts
			wp_deregister_script('name-of-styles-to-de-register');

		}

	}
}
*/