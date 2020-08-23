<?php require 'home_navbar.php'; ?>

<?php require_once 'controller.php'; ?>
<?php

if (isset($_GET['user_id'])) {

  $user_id = $_GET['user_id'];
}

$personal_user = new User;

$fetch_personalPost = $personal_user->readPostByMe($user_id);


?>




<div class="container">
<div class="row">
      <div class="col-md-12 text-center ">
        <div class="panel panel-default">
          <div class="userprofile social ">
            <div class="userpic"> <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="userpicimg"> </div>
            <h3 class="username"><?php echo $fetch_personalPost->user_f_name ; ?></h3>
            <p>Dhaka,  Bangladesh</p>
            <div class="socials tex-center"> <a href="" class="btn btn-circle btn-primary ">
            <i class="fa fa-facebook"></i></a> <a href="" class="btn btn-circle btn-danger ">
            <i class="fa fa-google-plus"></i></a> <a href="" class="btn btn-circle btn-info ">
            <i class="fa fa-twitter"></i></a> <a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
            </div>
          </div>
          <div class="col-md-12 border-top border-bottom">
            <ul class="nav nav-pills pull-left countlist" role="tablist">
              <li role="presentation">
                <h3>1452<br>
                  <small>Post</small> </h3>
              </li>
              <li role="presentation">
                <h3>245<br>
                  <small>Comment</small> </h3>
              </li>
              <li role="presentation">
                <h3>5000<br>
                  <small>Activity</small> </h3>
              </li>
            </ul>
            <button class="btn btn-primary followbtn">Follow</button>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- /.col-md-12 -->
      <div class="col-md-4 col-sm-12 pull-right">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Personal Details</h1>
            <p class="page-subtitle small">Limited information is visible</p>
          </div>
          <div class="col-md-12 photolist">
            <div class="row">
              <!--<div class="col-sm-3 col-xs-3"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="" alt=""> </div>
              <div class="col-sm-3 col-xs-3"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="" alt=""> </div>
              <div class="col-sm-3 col-xs-3"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="" alt=""> </div>
              <div class="col-sm-3 col-xs-3"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="" alt=""> </div>-->
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Worked with many domain</h1>
            <p class="page-subtitle small">Like to work fr different business</p>
          </div>
          <div class="col-md-12">
            <ul class="list-group">
              <li class="list-group-item"><span class="fa fa-male"></span> Worked with 1000+ people</li>
              <li class="list-group-item"><span class="fa fa-institution"></span> 60+ offices</li>
              <li class="list-group-item"><span class="fa fa-user"></span> 50000+ satify customers</li>
              <li class="list-group-item"><span class="fa fa-clock-o"></span> Work hours many and many still counting</li>
              <li class="list-group-item"><span class="fa fa-heart"></span> Customer satisfaction for servics</li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">What others are saying </h1>
            <p class="page-subtitle small">Express your self, Express to other</p>
          </div>
          <div class="col-md-12">
            <div class="media">
              <!--<div class="media-left"> <a href="javascript:void(0)"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object"> </a> </div>-->
              <div class="media-body">
                <h4 class="media-heading">Lucky Sans</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </div>
            </div>
            <div class="media">
              <!--<div class="media-left"> <a href="javascript:void(0)"> 
              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object"> </a> </div>-->
              <div class="media-body">
                <h4 class="media-heading">John Doe</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Recently Connected</h1>
            <p class="page-subtitle small">You have recemtly connected with 34 friends</p>
          </div>
          <div class="col-md-12">
            <!--<div class="memberblock"> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
              <div class="memmbername">Ajay Sriram</div>
              </a> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <div class="memmbername">Rajesh Sriram</div>
              </a> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <div class="memmbername">Manish Sriram</div>
              </a> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <div class="memmbername">Chandra Amin</div>
              </a> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <div class="memmbername">John Sriram</div>
              </a>--><a href="logout.php" class="btn btn-primary" class="member"> Log out
              <!--<div class="memmbername">Lincoln Sriram</div>-->
              </a> <!--</div>-->
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12 pull-left posttimeline">
      	<div class="panel panel-default">
      		<div class="panel-body">
      			<div class="status-upload nopaddingbtm">
      				<form action="prof.php?user_id=<?php echo $_SESSION['u_id'];?>" method="post">
      					<h5>Title</h5>
                <input type="hidden" name="user_id" class="form-control" value="<?php echo $user_id; ?>" placeholder="Here you write title">
                <input type="text" name="title" class="form-control" placeholder="Here you write title">
                <h5>Description</h5>
                <textarea class="form-control" name="content" placeholder="Here you write description"></textarea>
                <br>
                <ul class="nav nav-pills pull-left ">
					<!--<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="glyphicon glyphicon-bullhorn"></i></a></li>
					<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class=" glyphicon glyphicon-facetime-video"></i></a></li>
					<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a></li>-->
				</ul>
				<button type="share" name="share" class="btn btn-success pull-right"> Share</button>
			</form>




      <?php 

      if (isset($_POST['share'])) {

        $user_id = $_POST['user_id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        if (!empty($user_id) && !empty($title) && !empty($content)) {

          $create_post = new Post;

          $last_id =  $create_post->insertUserPost($user_id,$title,$content);



        }


      }
      ?>




		</div>
		<!-- Status Upload  --> 
	</div>
</div>



<div class="card-body">

	<?php 

  $person=$_SESSION['u_id'];
	$post = new Post;

	$fetch_post = $post->readAllPost();

	foreach ($fetch_post as $value):
    if($value->user_id==$person):
		
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
$person=$value->user_id;
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
          <h3><a style="text-decoration: none; font-family: cursive;" href="single_post.php?post_id=<?php echo $value->post_id; ?>&u_id=<?php echo $fetch_user->user_id;?>"><?php echo $value->title; ?></a></h3>
          <p style=font-family:roboto; class="mt-3"><?php echo substr($value->content, 0,300); ?>&nbsp;<a style="text-decoration: none;" href="single_post.php?post_id=<?php echo $value->post_id; ?>&u_id=<?php echo $fetch_user->user_id; ?>">read more...</a></p>
          <a class="btn btn-primary mt-3" href="edit_post.php?post_id=<?php echo $value->post_id; ?>">Edit</a>
			<a class="btn btn-danger mt-3" href="delete_post.php?post_id=<?php echo $value->post_id; ?>">Delete</a>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>
<?php endforeach; ?>

</div>





<?php require 'footer.php'; ?>



