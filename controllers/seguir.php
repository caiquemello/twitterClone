<?php 


	require_once '../Models/autoload.php';
		session_start();
	if($_SESSION['id'] != ''&& $_SESSION['nome'] != ''){
		
	}else{
		header('location:../views/index.php?erro');
	}



			$pequisar = filter_input(INPUT_GET,'pesquisar', FILTER_SANITIZE_SPECIAL_CHARS);

	   	 $usuario = new Usuario();
	   	  $usuario->__set('id',$_SESSION['id']);
			
				 if(isset($_GET['pesquisar']) && $_GET['pesquisar'] != '') {
			 $usuario->__set('id',$_SESSION['id']);
			 $usuario->getALL($pequisar);
			 header('location:../views/quemSeguir.php');
			}else{

				
			}

	   // header('location:../views/quemSeguir.php');

 ?>