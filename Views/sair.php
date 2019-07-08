<?php 
	require_once'../controllers/appControllers.php';
 
	session_start();
	session_destroy();
	print_r($_SESSION);
	header('location:../views/index.php');
 ?>