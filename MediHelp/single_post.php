<?php require 'home_navbar.php'; ?>






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
				<h3 style=font-family:cursive;class="mb-4"><a style="text-decoration: none; font-family: cursive;" href="view_profile.php?user_id=<?php echo $fetch_singleUser->user_id; ?>"><?php echo $fetch_singleUser->user_f_name ;?> <?php echo $fetch_singleUser->user_l_name ;?></a></h3>
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







<div class="panel panel-default">
	<div class="panel-body">
		<div class="status-upload nopaddingbtm">
			<form action="single_post.php?post_id=<?php echo $fetch_singlePost->post_id; ?>&u_id=<?php echo $fetch_singleUser->user_id; ?>" method="post">
				<input type="hidden" name="post_id" value="<?php echo $fetch_singlePost->post_id; ?>" class="form-control" placeholder="Here you write title">
				<input type="hidden" name="user_com_id" value="<?php echo $_SESSION['u_id']; ?>" class="form-control" placeholder="Here you write title">
				<textarea class="form-control" name="content" placeholder="What are you doing right now?"></textarea>
				<br>
				<!--<ul class="nav nav-pills pull-left ">
					<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="glyphicon glyphicon-bullhorn"></i></a></li>
					<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class=" glyphicon glyphicon-facetime-video"></i></a></li>
					<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a></li>-->
				</ul>
				<button type="submit" name="comment" class="btn btn-success pull-right">Comment</button>
			</form>



			<?php 

			if (isset($_POST['comment'])) {

				$post_id = $_POST['post_id'];
				$user_com_id = $_POST['user_com_id'];
				$content = $_POST['content'];

				if (!empty($post_id) && !empty($user_com_id) && !empty($content)) {

					$create_comment = new Comment;

					$last_id =  $create_comment->insertUserComment($post_id,$user_com_id,$content);

				}
			}
			?>


		</div>
		<!-- Status Upload  --> 
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
          <h3><a style="text-decoration: none; font-family: cursive;" href="prof.php?user_id=<?php echo $value->user_id; ?>"><?php echo $fetch_user->user_f_name ;?> <?php echo $fetch_user->user_l_name ;?></a></h3>
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