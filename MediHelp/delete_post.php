<?php require 'controller.php'; ?>
<?php 

if (isset($_GET['post_id'])) {
	
	$post_id  = $_GET['post_id'];
	$post = new Post;

	$delete_post = $post->deletePost($post_id);

	header('location:index.php');
}