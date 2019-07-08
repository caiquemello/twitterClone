<?php 
	session_start();
	$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
	$senha =filter_input(INPUT_POST,'senha', FILTER_SANITIZE_SPECIAL_CHARS);

	require_once'../Models/autoload.php';

	
	$usuarios = new Usuario();
	//metodo para valiidar cadastro//
	if($usuarios->validaCadastro($nome,$email,$senha) && count($usuarios->buscaUsauarioPorNome($email)) == 0){
	
	$usuarios->salva($nome,$email,$senha);

	header('location:../views/cadastro.php');
	 
    }else{
    	$_SESSION['erro'] = 'Erro verifique se os campos foram preenchidos corretamente';
    	header('location:../views/inscreverse.php');
    }

 ?>