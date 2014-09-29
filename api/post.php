<?php
	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	require_once('../wordpress/wp-blog-header.php');

	status_header(200);
	nocache_headers();

	$response = array('status' => 'ok', 'tag' => '', 'success' => 0, 'error' => 0);
	$response['success'] = 0;
	$response['error'] = 0;
	$response['postid'] = 0;
	$response['errorstring'] = '';

	$meta_value = array();

	$meta_value['numberOfQuestions'] = 2;
	$meta_value['question1'] = array('question'=>'q1', 'questionType'=>'slider');
	$meta_value['question2'] = array('question'=>'q2', 'questionType'=>'slider');



// $post = array(
// 	  'ID'             => [ <post id> ] // Are you updating an existing post?
// 	  'post_content'   => [ <string> ] // The full text of the post.
// 	  'post_name'      => [ <string> ] // The name (slug) for your post
// 	  'post_title'     => [ <string> ] // The title of your post.
// 	  'post_status'    => [ 'draft' | 'publish' | 'pending'| 'future' | 'private' | custom registered status ] // Default 'draft'.
// 	  'post_type'      => [ 'post' | 'page' | 'link' | 'nav_menu_item' | custom post type ] // Default 'post'.
// 	  'post_author'    => [ <user ID> ] // The user ID number of the author. Default is the current user ID.
// 	  'ping_status'    => [ 'closed' | 'open' ] // Pingbacks or trackbacks allowed. Default is the option 'default_ping_status'.
// 	  'post_parent'    => [ <post ID> ] // Sets the parent of the new post, if any. Default 0.
// 	  'menu_order'     => [ <order> ] // If new post is a page, sets the order in which it should appear in supported menus. Default 0.
// 	  'to_ping'        => // Space or carriage return-separated list of URLs to ping. Default empty string.
// 	  'pinged'         => // Space or carriage return-separated list of URLs that have been pinged. Default empty string.
// 	  'post_password'  => [ <string> ] // Password for post, if any. Default empty string.
// 	  'guid'           => // Skip this and let Wordpress handle it, usually.
// 	  'post_content_filtered' => // Skip this and let Wordpress handle it, usually.
// 	  'post_excerpt'   => [ <string> ] // For all your post excerpt needs.
// 	  'post_date'      => [ Y-m-d H:i:s ] // The time post was made.
// 	  'post_date_gmt'  => [ Y-m-d H:i:s ] // The time post was made, in GMT.
// 	  'comment_status' => [ 'closed' | 'open' ] // Default is the option 'default_comment_status', or 'closed'.
// 	  'post_category'  => [ array(<category id>, ...) ] // Default empty.
// 	  'tags_input'     => [ '<tag>, <tag>, ...' | array ] // Default empty.
// 	  'tax_input'      => [ array( <taxonomy> => <array | string> ) ] // For custom taxonomies. Default empty.
// 	  'page_template'  => [ <string> ] // Requires name of template file, eg template.php. Default empty.
// 	);  


	$post = array(
	  'post_content'   =>  'test comment',  // The full text of the post.
	  'post_name'      =>  'test slug',  // The name (slug) for your post
	  'post_title'     =>  'test title',  // The title of your post.
	  'post_status'    =>  'publish', // Default 'draft'.
	  'post_type'      =>  'post',  // Default 'post'.
	  'comment_status' =>  'closed'  // Default is the option 'default_comment_status', or 'closed'.
	);  

	$result = wp_insert_post( $post, true );

	if (is_wp_error($result)) {
		$response['error'] = 1;
	   	$error_string = $result->get_error_message();
	   	$response['errorstring'] = $error_string;
	}else{
		$post_id = $result;
		$response['postid'] = $result;
		$result = add_post_meta($post_id, 'type', 'scale', true);
		if(!is_wp_error($result)){
			$result = add_post_meta($post_id, 'data', $meta_value, true);
			if (!$result){
				$response['error'] = 1;
			   	$response['errorstring'] = $result;
			}else{
				$response['success'] = 1;
				$response['meta_id'] = $result;
			}
		}		
	}

	echo json_encode($response);

?>