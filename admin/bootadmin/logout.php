<?php
session_start();
if(!isset($_SESSION['userSession'])){
	header('location:signin.php');
}
else if(isset($_SESSION['userSession'])!=""){
	header('location:index.php');
}
if(isset($_REQUEST['logout'])){
	session_destroy();
	unset($_SESSION['userSession']);
	header('location:signin.php');
}
?>