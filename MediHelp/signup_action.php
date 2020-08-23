<?php require_once 'controller.php';?>

<?php
session_start();
if(isset($_POST['submit'])){
	
	$email=$_POST['email'];
	$fastname=$_POST['fastname'];
	$lastname=$_POST['lastname'];
	$password=$_POST['password'];
	$r_password=$_POST['r_password'];


	if(!empty($email) && !empty($fastname) && !empty($lastname) && !empty($password) && !empty($r_password)){
		$create_user=new User;


		$last_id=$create_user->insertUser($email,$fastname,$lastname,$password,$r_password);

		$_SESSION['uemail']=$email;
		$_SESSION['u_id']=$last_id;

		header('location:demo_home.php?user_id='.$last_id);
	}else{
		header('location:login.php?empty');
	}
}



?>
