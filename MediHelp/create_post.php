<?php require 'header.php'; ?>

<?php 

$msg = '';

if (isset($_GET['empty'])) {
	
	$msg = 'Field must not be empty!';
}

?>

<div class="card-header">
	<h3>Write Your Story <i class="fas fa-pen-square"></i></h3>
</div>


<div class="card-body">

	<?php if(!empty($msg)): ?>
		<div class="alert alert-danger"><?php echo $msg; ?></div>
	<?php endif; ?>

	<form action="create_post_actions.php" method="POST">


		<div class="from-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control" placeholder="Enter Title Here" >
		</div>

		<!--<div class="form-group mt-2">
			<p>Content</p>
			<textarea name="content" cols="100%" rows="" placeholder="write your stories here..."></textarea>
		</div>-->

		<div class="form-group mt-2">
			<label for="exampleFormControlTextarea1">Content</label>
			<textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>

		<button name="publish" class="btn btn-primary ">Publish</button>

	</form>


</div>


<?php require 'footer.php'; ?>
