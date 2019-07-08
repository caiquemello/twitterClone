<?php 
	echo'<pre>';
	print_r($_GET);
	echo'<pre>';

     session_start();

	$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
	$id_usuario_seguindo = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';

		require_once '../Models/autoload.php';
				


	     $usuario = new Usuario();
	     $usuario->__set('id',$_SESSION['id']);

	     if($acao == 'seguir')
	     {
	     	$usuario->seguirUsuario($id_usuario_seguindo);

	     	header('location:../views/quemSeguir.php');

	     }elseif ($acao == 'deixar_de_seguir') {

	     	$usuario->deixarSeguir($id_usuario_seguindo);
	     	header('location:../views/quemSeguir.php');
	     }



 ?>