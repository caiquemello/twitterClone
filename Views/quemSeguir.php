<html>
	<head>
		<meta charset="utf-8" />
		<title>twitter</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="/css/style.css">

	</head>

	<body>

		<?php 

			$pequisar = filter_input(INPUT_GET,'pesquisar', FILTER_SANITIZE_SPECIAL_CHARS);
		    require_once '../controllers/appControllers.php';
			 require_once '../Models/autoload.php';
			 $usuario = new Usuario();
			
			 if(isset($_GET['pesquisar']) && $_GET['pesquisar'] != '') {
			 $usuario->__set('id',$_SESSION['id']);
			 $result = $usuario->getALL($pequisar);
			}else{

				$result = array();
			}

		 ?>
		
<nav class="navbar navbar-expand-lg menu">
	<div class="container">
	  <div class="navbar-nav">
	  	<a class="menuItem" href="timiline.php">
	  		Home
	  	</a>

	  	<a class="menuItem" href="../views/sair.php">
	  		Sair
	  	</a>
			<img src="../public/img/twitter_logo.png" class="menuIco" />
	  </div>
	</div>
</nav>

<div class="container mt-5">
	<div class="row pt-2">
		
		<div class="col-md-3">

			<div class="perfil">
				<div class="perfilTopo">

				</div>

				<div class="perfilPainel">
					
					<div class="row mt-2 mb-2">
						<div class="col mb-2">
							<span class="perfilPainelNome">Nome do Usuário</span>
						</div>
					</div>

					<div class="row mb-2">

						<div class="col">
							<span class="perfilPainelItem">Tweets</span><br />
							<span class="perfilPainelItemValor">0</span>
						</div>

						<div class="col">
							<span class="perfilPainelItem">Seguindo</span><br />
							<span class="perfilPainelItemValor">0</span>
						</div>

						<div class="col">
							<span class="perfilPainelItem">Seguidores</span><br />
							<span class="perfilPainelItemValor">0</span>
						</div>

					</div>

				</div>
			</div>

		</div>

		<div class="col-md-6">
			
			<div class="row mb-2">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<form action="" method="get">
								<div class="input-group mb-3">
									<input type="text" name="pesquisar" class="form-control" placeholder="Quem você está procurando?">
									<div class="input-group-append">
										<button class="btn btn-primary" type="submit">Procurar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
					<?php foreach ($result as  $value) { ?>
							
			<div class="row mb-2">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6 font-weight-bold">
									<?php echo ucfirst($value['nome']) ;?>
									
								</div>
							
								<div class="col-md-6 d-flex justify-content-end">
									<div>
										<?php if($value['seguindo_sn'] == 0	) {?>
										<a href="../controllers/
										deixar_De_Seguir.php?acao=seguir&id_usuario=<?=$value['id']?>" class="btn btn-success">Seguir</a>
										<?php } ;?>
										<?php if($value['seguindo_sn'] == 1	) {?>
										<a href="../controllers/deixar_De_Seguir.php?acao=deixar_de_seguir&id_usuario=<?=$value['id']?>" class="btn btn-danger">Deixar de seguir</a>
										<?php } ;?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

				<?php } ?>

		</div>
	</div>
</div>

	</body>

</html>