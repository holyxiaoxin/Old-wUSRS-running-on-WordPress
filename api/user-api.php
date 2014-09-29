<?php
	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	require_once('/home/jiarhcah/public_html/painapp/wordpress/wp-blog-header.php');

	$response = array('status' => 'ok', 'tag' => '', 'success' => 0, 'error' => 0);
	$response['success'] = 0;
	$response['error'] = 0;
	$response['errorstring'] = '';

	if (isset($_POST['tag']) && $_POST['tag'] != '') {
		$tag = $_POST['tag'];
		switch ($tag){

			case 'login':
				if(!isset($_POST['username'])||!isset($_POST['username']))
					goto INVALIDREQUEST;
				$user = $_POST['username'];
				$pass = $_POST['password'];
				$result = wp_authenticate($user,$pass);
				if ( is_wp_error( $result ) ) {
					$response['error'] = 1;
				   	$error_string = $result->get_error_message();
				   	$response['errorstring'] = $error_string;
				}else{
					$response['success'] = 1;
				}
				echo json_encode($response);
				break;
			case 'register':
				if(!isset($_POST['username'])||!isset($_POST['password'])||!isset($_POST['email']))
					goto INVALIDREQUEST;
				$user = $_POST['username'];
				$pass = $_POST['password'];
				$email = $_POST['email'];
				$result = wp_create_user($user, $pass, $email);
				if ( is_wp_error( $result ) ) {
					$response['error'] = 1;
				   	$error_string = $result->get_error_message();
				   	$response['errorstring'] = $error_string;
				}else{
					$response['success'] = 1;
				}
				echo json_encode($response);
				break;
		INVALIDREQUEST:
			default:
				echo 'Invalid Request';
				break;
		}

	}else{

		echo 'Access Denied';
	}


?>