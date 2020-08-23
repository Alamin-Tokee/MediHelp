<?php require_once 'controller.php';?>

<?php
session_start();
if(isset($_POST['log'])){

	$email=$_POST['uemail'];
	$password=$_POST['pass'];
	

	if(!empty($email) && !empty($password)){
		$read_user=new User;

		$fetch_single_user=$read_user->readUserById($email);
		$user=$fetch_single_user->user_id;
		$pass=$fetch_single_user->password;

		if($user && $pass==$password){

			$_SESSION['uemail']=$email;
			$_SESSION['u_id']=$user;

			header('location:personal_profile.php?user_id='.$user);
		}else{
			header('location:login.php?email or password incorrect');
		}
	}else{
		header('location:login.php?empty');
	}
}



?>
