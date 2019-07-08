<?php 
		
	require_once '../Models/autoload.php';
				
	if($_SESSION['id'] != ''&& $_SESSION['nome'] != ''){
		
	}else{
		header('location:../views/index.php?erro');
	}
		$id = $_SESSION['id'] ;
		$usuario = new Usuario();
		$usuario->__set('id',$_SESSION['id']);
	    $totalTwitte = $usuario->totalTwitte($id);

	    $totalSeguindo = $usuario->totalSeguindo();

	    $totalSeguidores = $usuario->totalSeguidores()

	     




 ?>