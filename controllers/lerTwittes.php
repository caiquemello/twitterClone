<?php 

	
		require_once '../Models/autoload.php';
				
	if($_SESSION['id'] != ''&& $_SESSION['nome'] != ''){
		
	}else{
		header('location:../views/index.php?erro');
	}
	 $id = $_SESSION['id'];
	$twitts = new Twitt();
	$resul = $twitts->getALL($id);


		
	
 ?>