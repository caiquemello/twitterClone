<?php 

		session_start();
	if($_SESSION['id'] != ''&& $_SESSION['nome'] != ''){
		
	}else{
		header('location:../views/index.php?erro');
	}

	
 ?>