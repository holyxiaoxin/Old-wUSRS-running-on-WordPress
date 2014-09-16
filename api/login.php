<?php
	header('Content-Type: application/json');
	define('DIRECTORY_SEPARATOR', '/../wordpress/');

	require_once('/home/jiarhcah/public_html/painapp/wordpress/wp-blog-header.php');

	$response = array("status" => "ok", "tag" => "", "success" => 0, "error" => 0);

	$response['success'] = 0;
	$response['error'] = 0;

	if(!user_pass_ok("holyxiaoxin","sunshine")){
		$response['error'] = 1;
	}else{
		$response['success'] = 1;
	}

	echo json_encode($response);
?>