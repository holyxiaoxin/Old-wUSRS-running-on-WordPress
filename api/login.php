<?php
	header('Content-Type: application/json');
	define('DIRECTORY_SEPARATOR', '/../wordpress/');

	require_once('/home/jiarhcah/public_html/painapp/wordpress/wp-blog-header.php');

	$response = array("status" => "ok", "tag" => "", "success" => 0, "error" => 0);

	$response['success'] = 0;
	$response['error'] = 0;

	$auth = wp_authenticate("holyxiaoxin","sunshine1");

	if ( is_wp_error( $auth ) ) {
	   $error_string = $auth->get_error_message();
	   echo '<div id="message" class="error"><p>' . $error_string . '</p></div>';
	}else{
		echo 'login success';
	}

	// if(!user_pass_ok("holyxiaoxin","sunshine")){
	// 	$response['error'] = 1;
	// }else{
	// 	$response['success'] = 1;
	// }

	//echo json_encode($response);
?>