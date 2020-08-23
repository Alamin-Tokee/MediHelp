<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->


<?php require 'navbar.php'; ?> 


<?php
$msg='';

if(isset($_GET['empty'])){
    $msg = 'Field must not be empty!';
}
?>


<div class="container"> 


    <?php if(!empty($msg)): ?>
        <div class="alert alert-danger"><?php echo $msg; ?></div>
    <?php endif; ?>



    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form action="" id="loginform" class="form-horizontal" role="form" method="POST">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="user email" required>                                        
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
                    </div>



                    <div class="input-group">
                      <div class="checkbox">
                        <label>
                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                      </label>
                  </div>
              </div>


              <div style="margin-top:10px" class="form-group">
                <!-- Button -->

                <div class="col-sm-12 controls">
                  <a id="btn-login" href="login_action.php" class="btn btn-success">Login  </a>
                  <!--<button id="btn-login" type="button" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Sign in</button>-->
                  <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->

              </div>
          </div>


          <div class="form-group">
            <div class="col-md-12 control">
                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                    Don't have an account! 
                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                        Sign Up Here
                    </a>
                </div>
            </div>
        </div>    
    </form>     



</div>                     
</div>  
</div>
<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Sign Up</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
        </div>  
        <div class="panel-body" >
            <form action="signup_action.php" id="signupform" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">

                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>



                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="icode" class="col-md-3 control-label">Retype Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="r_password" placeholder="Retype Password" required>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Button -->                                        
                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-signup" type="button" class="btn btn-info" name="submit"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                        <!--<a id="btn-login" name="submit" href="signup_action.php" class="btn btn-success">SignUp  </a>-->
                        <!--<span style="margin-left:8px;">or</span>--> 
                        
                    </div>
                </div>

                <!--<div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                    </div>                                           

                </div>-->



            </form>
            
        </div>
    </div>




</div> 
</div>


<?php require 'footer.php'; ?> 