<?php 



		require_once '../Models/autoload.php';
				session_start();
	if($_SESSION['id'] != ''&& $_SESSION['nome'] != ''){
		
	}else{
		header('location:../views/index.php?erro');
	}

		$twitts = filter_input(INPUT_POST,'twitt',FILTER_SANITIZE_SPECIAL_CHARS);
		if($twitts != ''){
		$id = $_SESSION['id'];
		$twitt = new Twitt();
		$twitt->salvar($id,$twitts);
	}


		

		header('location:../views/timiline.php');

 ?>