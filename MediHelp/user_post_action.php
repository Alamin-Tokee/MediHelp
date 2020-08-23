<?php require_once 'controller.php'; ?>


<?php 

if (isset($_POST['share'])) {

	$user_id = $_POST['user_id'];
	$title = $_POST['title'];
	$content = $_POST['content'];

	if (!empty($user_id) && !empty($title) && !empty($content)) {
		
		$create_post = new Post;

		$last_id =  $create_post->insertUserPost($user_id,$title,$content);

		header('location:single_post.php?post_id='.$last_id);

	}
	else{

		header('location:create_post.php?empty');
	}
	
}