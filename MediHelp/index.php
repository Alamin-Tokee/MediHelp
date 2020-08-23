<?php require 'navbar.php'; ?>



<div class="card-body">

	<?php 

	$post = new Post;

	$fetch_post = $post->readAllPost();



	foreach ($fetch_post as $value):
		
		?>


	<!--<h3><a style="text-decoration: none; font-family: cursive;" href="single_post.php?post_id=<?php echo $value->post_id; ?>"><?php echo $value->title; ?></a></h3>

		<p style=font-family:roboto; class="mt-3"><?php echo substr($value->content, 0,300); ?>&nbsp;<a style="text-decoration: none;" href="single_post.php?post_id=<?php echo $value->post_id; ?>">read more...</a></p>-->


		<!--<div class="card w-100">
			<div class="card-body">
				<h3><a style="text-decoration: none; font-family: cursive;" href="single_post.php?post_id=<?php echo $value->post_id; ?>"><?php echo $value->title; ?></a></h3>
				<p style=font-family:roboto; class="mt-3"><?php echo substr($value->content, 0,300); ?>&nbsp;<a style="text-decoration: none;" href="single_post.php?post_id=<?php echo $value->post_id; ?>">read more...</a></p>
				
			</div>
		</div>-->

		<!--<div class="panel panel-default">
          <div class="panel-body">
            <div class="status-upload nopaddingbtm">
              <form>
                <textarea class="form-control" placeholder="What are you doing right now?"></textarea>
                <br>
                <ul class="nav nav-pills pull-left ">
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="glyphicon glyphicon-bullhorn"></i></a></li>
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class=" glyphicon glyphicon-facetime-video"></i></a></li>
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a></li>
                </ul>
                <button type="submit" class="btn btn-success pull-right"> Share</button>
              </form>
          </div>-->
          <!-- Status Upload  --> 
          <!--</div>
          </div>-->

          <?php
          $person=$value->user_id;
          $user = new User;

          $fetch_user=$user->readPostByMe($person);

          ?>

          <div class="col-sm-12">
          	<div class="well">
          		<div class="card">
          			<div class="card-header">
          				<!--<h3><a style="text-decoration: none; font-family: cursive;" href="single_post.php?post_id=<?php echo $value->post_id; ?>"><?php echo $value->title; ?></a></h3>-->
          				<h3><a style="text-decoration: none; font-family: cursive;" href="view_profile_index.php?user_id=<?php echo $value->user_id; ?>"><?php echo $fetch_user->user_f_name ;?> <?php echo $fetch_user->user_l_name ;?></a></h3>
          			</div>
          			<div class="card-body">
          				<h3><a style="text-decoration: none; font-family: cursive;" href="single_post_index.php?post_id=<?php echo $value->post_id; ?>&u_id=<?php echo $value->user_id; ?>"><?php echo $value->title; ?></a></h3>
          				<p style=font-family:roboto; class="mt-3"><?php echo substr($value->content, 0,500); ?>&nbsp;<a style="text-decoration: none;" href="single_post_index.php?post_id=<?php echo $value->post_id; ?>&u_id=<?php echo $value->user_id; ?>">read more...</a></p>
          				<!--<ul class="nav nav-pills pull-left ">-->
          					<a href="" title=""><i class="glyphicon glyphicon-thumbs-up"></i> 2015</a>	&nbsp;
          					<a href="" title=""><i class=" glyphicon glyphicon-comment"></i> 25</a> 	&nbsp;
          					<a href="" title=""><i class="glyphicon glyphicon-share-alt"></i> 15</a>
          					
          				</div>
          			</div>
          		</div>
          	</div>







          <?php endforeach; ?>


      </div>








      <?php require 'footer.php'; ?>



