<?php 

	require_once '../Models/autoload.php';
	$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
	$twitt = new Twitt();
	$twitt->removerTwitt($id);

	header('location:../views/timiline.php');


 ?>