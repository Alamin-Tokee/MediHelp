<?php require 'home_navbar.php'; ?>

<?php 

if (isset($_GET['post_id'])) {
	
	$id = $_GET['post_id'];

	$post = new Post;

	$edit_post = $post->readPostById($id);

}

?>


<div class="card-header">
	<h3>Edit Your Story <i class="fas fa-edit"></i></h3>
</div>

<!--<div class="card-body">

	<form action="update_post.php" method="POST">

		<div class="from-group">
			<input type="hidden" name="post_id" value="<?php echo $edit_post->post_id ?>">
		</div>

		<div class="from-group">
			<label  for="title">Title</label>
			<input type="text" name="title" class="form-control" value="<?php echo $edit_post->title ?>" required >
		</div>

		<!--<div class="form-group mt-2">
			<p>Content</p>
			<textarea name="content" required cols="150" rows="10" ><?php echo $edit_post->content; ?></textarea>
		</div>-->

		<!--<div class="form-group mt-2">
			<label for="exampleFormControlTextarea1">Content</label>
			<textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $edit_post->content; ?></textarea>
		</div>

		<button name="update" class="btn btn-primary ">Update</button>

	</form>


</div>-->

<div class="col-sm-12">
      <div class="well">
       <div class="card">
        <div class="card-header">
          <h3>Edit Your Story <i class="fas fa-edit"></i></h3>
        </div>
        <div class="card-body">
          <form action="update_post.php" method="POST">

		<div class="from-group">
			<input type="hidden" name="post_id" value="<?php echo $edit_post->post_id ?>">
		</div>

		<div class="from-group">
			<label  for="title">Title</label>
			<input type="text" name="title" class="form-control" value="<?php echo $edit_post->title ?>" required >
		</div>

		<!--<div class="form-group mt-2">
			<p>Content</p>
			<textarea name="content" required cols="150" rows="10" ><?php echo $edit_post->content; ?></textarea>
		</div>-->

		<div class="form-group mt-2">
			<label for="exampleFormControlTextarea1">Content</label>
			<textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $edit_post->content; ?></textarea>
		</div>

		<button name="update" class="btn btn-primary ">Update</button>

	</form>
        </div>
      </div>
    </div>
  </div>


<?php require 'footer.php'; ?>
