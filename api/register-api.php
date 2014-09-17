<?php
	header('Content-Type: application/json');
	require_once('/home/jiarhcah/public_html/painapp/wordpress/wp-blog-header.php');

	$email = "abc@abc.abc";
	$username = "holyxiaoxin3";
	$password = "password";

	$result = wp_create_user($username, $password, $email);

	if ( is_wp_error( $result ) ) {
	   $error_string = $result->get_error_message();
	   echo '<div id="message" class="error"><p>' . $error_string . '</p></div>';
	}else{
		echo 'user succesfully created';
	}
?>