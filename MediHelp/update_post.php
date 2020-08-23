<?php require 'controller.php'; ?>

<?php 

if (isset($_POST['update'])) {
	
	$post_id = $_POST['post_id'];
	$title = $_POST['title'];
	$content = $_POST['content'];

	$post = new Post;

	$update_post = $post->updatePost($post_id,$title,$content);

	header('location:single_post.php?post_id='.$post_id);

}



?>

