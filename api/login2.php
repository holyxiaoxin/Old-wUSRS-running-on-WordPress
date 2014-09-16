<?php
	define('DIRECTORY_SEPARATOR', '/../wordpress/');

	 // require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . '/wordpress/wp-includes/pluggable.php');
	 // require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . '/wordpress/wp-includes/capabilities.php');
	
	define('WP_USE_THEMES', false);
	include(dirname(__FILE__) . DIRECTORY_SEPARATOR . '/wordpress/wp-includes/pluggable.php');
	// require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . '/wordpress/wp-includes/formatting.php');
	// require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . '/wordpress/wp-includes/plugin.php');
	// require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . '/wordpress/wp-includes/class-wp-error.php');
	// require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . '/wordpress/wp-includes/l10n.php');


	// require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . '/wordpress/wp-blog-header.php');

	echo "start of code";

	$user = "holyxiaoxin";
	$password = "sunshine";

	$auth = wp_authenticate($user, $password);

	echo "authenticated";

	if(is_wp_error($auth)) {
	 	$status = "fail";
	 } else {
	 	$status = "pass";
	 }



	// if( is_wp_error($auth) ) {      
	//     $status = "fail";
	// } else {
	//     $status = "success";
	// }
	echo $status;
