<?php require 'navbar.php'; ?>






<?php


if (isset($_GET['post_id'])) {

	$post_id = $_GET['post_id'];
}

$post = new Post;

$fetch_singlePost = $post->readPostById($post_id);


?>

<?php


if (isset($_GET['u_id'])) {

	$u_id = $_GET['u_id'];
}

$user = new User;

$fetch_singleUser = $user->readPostByMe($u_id);


?>



<!--<div class="card-body">



	<h3 style=font-family:cursive;class="mb-4"><?php echo $fetch_singlePost->title; ?></h3>

	<p style=font-family:roboto;><?php echo $fetch_singlePost->content; ?></p>

	<a class="btn btn-primary mb-4" href="edit_post.php?post_id=<?php echo $fetch_singlePost->post_id;?>">Edit</a>
	<a class="btn btn-danger mb-4" href="delete_post.php?post_id=<?php echo $fetch_singlePost->post_id; ?>">Delete</a>

</div>-->


<div class="col-sm-12">
	<div class="well">
		<div class="card">
			<div class="card-header">
				<h3 style=font-family:cursive;class="mb-4"><a style="text-decoration: none; font-family: cursive;" href="view_profile_index.php?user_id=<?php echo $fetch_singleUser->user_id; ?>"><?php echo $fetch_singleUser->user_f_name ;?> <?php echo $fetch_singleUser->user_l_name ;?></a></h3>
			</div>
			<div class="card-body">
				<h3 style=font-family:cursive;class="mb-4"><?php echo $fetch_singlePost->title; ?></h3>
				<p style=font-family:roboto;><?php echo $fetch_singlePost->content; ?></p>
				<!--<a class="btn btn-primary mb-4" href="edit_post.php?post_id=<?php echo $fetch_singlePost->post_id;?>">Edit</a>
				<a class="btn btn-danger mb-4" href="delete_post.php?post_id=<?php echo $fetch_singlePost->post_id; ?>">Delete</a>-->
			</div>
		</div>
	</div>
</div>

<div class="card-body">
	<div class="col-sm-12">
		<div class="well">
			<div class="card">
				<div class="card-header">
					<h1>Comment Section</h1>
				</div>
			</div>
		</div>
	</div>
</div>


<!--comment section start here-->


<div class="card-body">

	<?php 

	$post=$fetch_singlePost->post_id;
	$comment = new Comment;

	$fetch_comment = $comment->readAllPost();

	foreach ($fetch_comment as $value):
    if($value->post_id==$post):
		
		?>


	<!--<h3><a style="text-decoration: none; font-family: cursive;" href="single_post.php?post_id=<?php echo $value->post_id; ?>"><?php echo $value->title; ?></a></h3>

	<p style=font-family:roboto; class="mt-3"><?php echo substr($value->content, 0,300); ?>&nbsp;<a style="text-decoration: none;" href="single_post.php?post_id=<?php echo $value->post_id; ?>">read more...</a></p>
	<a class="btn btn-primary mt-3" href="edit_post.php?post_id=<?php echo $value->post_id; ?>">Edit</a>
	<a class="btn btn-danger mt-3" href="delete_post.php?post_id=<?php echo $value->post_id; ?>">Delete</a>-->




	<!--<div class="card w-100">
		<div class="card-body">
			<h3><a style="text-decoration: none; font-family: cursive;" href="single_post.php?post_id=<?php echo $value->post_id; ?>"><?php echo $value->title; ?></a></h3>
			<p style=font-family:roboto; class="mt-3"><?php echo substr($value->content, 0,300); ?>&nbsp;<a style="text-decoration: none;" href="single_post.php?post_id=<?php echo $value->post_id; ?>">read more...</a></p>
			<a class="btn btn-primary mt-3" href="edit_post.php?post_id=<?php echo $value->post_id; ?>">Edit</a>
			<a class="btn btn-danger mt-3" href="delete_post.php?post_id=<?php echo $value->post_id; ?>">Delete</a>
			
		</div>
	</div>-->


<?php
$person=$value->user_com_id;
$user = new User;

$fetch_user=$user->readPostByMe($person);

?>
  


    <div class="col-sm-12">
      <div class="well">
       <div class="card">
        <div class="card-header">
          <h3><a style="text-decoration: none; font-family: cursive;" href="view_profile_index.php?user_id=<?php echo $fetch_user->user_id; ?>"><?php echo $fetch_user->user_f_name ;?> <?php echo $fetch_user->user_l_name ;?></a></h3>
        </div>
        <div class="card-body">
          <!--<h3><a style="text-decoration: none; font-family: cursive;" href="single_post.php?post_id=<?php echo $value->post_id; ?>"><?php echo $value->title; ?></a></h3>-->
          <p style=font-family:roboto; class="mt-3"><?php echo substr($value->comment, 0,300); ?>&nbsp;<a style="text-decoration: none;" href="single_post.php?post_id=<?php echo $value->post_id; ?>">read more...</a></p>
          <!--<a class="btn btn-primary mt-3" href="edit_post.php?post_id=<?php echo $value->post_id; ?>">Edit</a>
			<a class="btn btn-danger mt-3" href="delete_post.php?post_id=<?php echo $value->post_id; ?>">Delete</a>-->
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>
<?php endforeach; ?>

</div>








<!--Comment section end here-->









<?php require 'footer.php'; ?>