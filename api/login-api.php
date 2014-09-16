<?php
	header('Content-Type: application/json');
	define('DIRECTORY_SEPARATOR', '/../wordpress/');

	require_once('/home/jiarhcah/public_html/painapp/wordpress/wp-blog-header.php');

	$response = array("status" => "ok", "tag" => "", "success" => 0, "error" => 0);

	$response['success'] = 0;
	$response['error'] = 0;
	$response['debug'] = "null";



	if (isset($_POST['tag']) && $_POST['tag'] != '') {
		$tag = $_POST['tag'];
		$user = $_POST['username'];
		$pass = $_POST['password'];
		switch ($tag){

			case "login":
				if(!user_pass_ok($user,$pass)){
					$response['error'] = 1;
				}else{
					$response['success'] = 1;
				}
				echo json_encode($response);
				break;
			default:
				echo "Invalid Request";
				break;
		}

	}else{

		echo "Access Denied";
	}
?>