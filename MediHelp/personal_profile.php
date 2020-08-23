<?php 
require_once 'controller.php';
?>
<?php

if (isset($_GET['user_id'])) {

	$user_id = $_GET['user_id'];
}

$personal_user = new User;

$fetch_personalPost = $personal_user->readPostByMe($user_id);


?>


<?php
session_start();
if(!isset($_SESSION['uemail'])){

	header("location:index.php");
}
else{
	$_SESSION['u_id'];
	header("location:demo_home.php?user_id=".$_SESSION['u_id']);
}
?>

