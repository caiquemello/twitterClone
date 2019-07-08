<?php 
	
	require_once '../Models/autoload.php';
	$usuario = new Usuario();

	$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
	$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS);


	$usuario->validarUsuario($email,md5($senha));
	
	if($usuario->__get('id') != '' && $usuario->__get('nome')){
		session_start();
		$_SESSION['id'] =$usuario-> __get('id');
		$_SESSION['nome'] =$usuario-> __get('nome');

		header('location:../views/timiline.php');

	}else{
		header('location:../views/index.php?erro');
	}

	

 ?>