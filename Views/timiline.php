
<?php 

	require_once '../controllers/appControllers.php';
	require_once '../Models/autoload.php';
	require_once '../controllers/lerTwittes.php';
		
 ?>
 <html>
	<head>
		<meta charset="utf-8" />
		<title>twitter</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="../public/css/style.css">

	</head>

	<body>
		
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
							<span class="perfilPainelNome"><?php echo ucfirst($_SESSION['nome']) ?></span>
						</div>
					</div>

					<div class="row mb-2">

						<div class="col">
							<span class="perfilPainelItem">Tweets</span><br />
							<span class="perfilPainelItemValor"><?php require_once'../controllers/totalTwitte.php'; 
								foreach ($totalTwitte as $value) {
								     echo $value;
								}
							?></span>
						</div>

						<div class="col">
							<span class="perfilPainelItem">Seguindo</span><br />
							<span class="perfilPainelItemValor">
								<?php foreach ($totalSeguindo as $value) {
								     echo $value;
								} ?></span>
						</div>

						<div class="col">
							<span class="perfilPainelItem">Seguidores</span><br />
							<span class="perfilPainelItemValor"><?php foreach ($totalSeguidores as $value) {
								     echo $value;
								} ?></span>
						</div>

					</div>

				</div>
			</div>

		</div>

		<div class="col-md-6">
			<div class="row mb-2">
				<div class="col tweetBox">
					<form action="../controllers/twittes.php" method="post">
						<textarea class="form-control" name="twitt" id="exampleFormControlTextarea1" rows="3"></textarea>
						
						<div class="col mt-2 d-flex justify-content-end">
							<button type="submit" class="btn btn-primary">Tweet</button>
						</div>

					</form>
				</div>
			</div>

				<?php foreach ($resul as $value) { ?>
			<div class="row tweet">
				<div class="col">
					<p><strong><?php echo ucfirst($value['nome']); ?></strong><small><span class="text text-muted">
						- <?php echo $value['data']; ?></span></small></p>
					<p><?php echo $value['twitt']; ?></p>
					<br />
					<form>
						<div class="col d-flex justify-content-end">
							<?php if ($_SESSION['id'] == $value['id_usuario'] ){ ?>
							<a  href="../controllers/removerTwittes.php?id=<?= $value['id']?>" class="btn text-white bg-danger"><small>Remover</small></a>

						<?php } ?>
						</div>
					</form>
				</div>
			</div>

		<?php } ?>


		</div>


		<div class="col-md-3">
			<div class="quemSeguir">
				<span class="quemSeguirTitulo">Quem seguir</span><br />
				<hr />
				<a href="quemSeguir.php" class="quemSeguirTxt">Procurar por pessoas conhecidas</a>
			</div>
		</div>

	</div>
</div>

	</body>

</html>