<html>	
	<head>
		<meta charset="utf-8" />
		<title>Portfolio twitter Clone</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="/css/style.css">

	</head>
	<div class="container-fluid h-100">
	<div class="row">
    <body>
    <div class="col-md-6 banner">
    	<div class="row h-100 justify-content-center align-items-center">
    		<div>
    			<br>
				<div class="communicationItem">
					<i class="fas fa-search fa-2x mr-3"></i>
					Siga o que lhe interessa.
				</div>
				<div class="communicationItem">
					<i class="fas fa-user-friends fa-2x mr-3"></i>
					Saiba sobre o que as pessoas estão falando.
				</div>
				<div class="communicationItem">
					<i class="far fa-comment fa-2x mr-3"></i>
					Participe da conversa.
				</div>
			</div>
		</div>
    </div>

    <div class="col-md-6 pt-4 pl-5 pr-5">
		<form action="../controllers/autenticar.php" method="post">
			<div class="row">
				<div class="col">
					<input type="text" name="email" class="form-control" required placeholder="E-mail">
				</div>
				<div class="col">
					<input type="password" name="senha" class="form-control" required placeholder="Senha">
				</div>
				<div class="col-auto">
					<button type="submit" class="btn btn-primary mb-2">Entrar</button>
				</div>
			</div>
			<?php if(isset($_GET['erro']) == 'erro'){
			echo'<span class="text-danger">Email ou senha Invalido(s)</span>';

		} ?>
		</form>

		<div class="row pt-5 pl-5 pr-5">
			<div class="col pl-5 pr-5">
				<img src="../public/img/twitter_logo.png" />
				<h1 class="title">Veja o que está acontecendo no mundo agora</h1>

				<h2 class="mt-5 subtitle">Participe hoje do Twitter.</h2>
				<a href="inscreverse.php" class="btn btn-primary btn-block mb-2">Inscrever-se</a>
			</div>	
		</div>


    </div>

  </div>
</div>
</body>
</html>