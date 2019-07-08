<html>
  <head>
    <?php session_start(); ?>
    <meta charset="utf-8" />
    <title>Miniframework</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="/css/style.css">

  </head>

  <body>
    
  
<div class="container">
  <div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 36rem;">
      <div class="card-body">

        <div class="d-flex justify-content-center">
          <img src="../public/img/twitter_logo.png" />
        </div>

        <div class="row">
          <div class="col">
            <h2>Crie sua conta</h2>
          </div>
        </div>

        <div class="row">
          <div class="col">
            
            <form action="../controllers/registrar.php" method="post">
              <div class="form-group">
                <input type="text" name="nome" class="form-control" required placeholder="Nome">
              </div>
              
              <div class="form-group">
                <input type="text" name="email" class="form-control" required placeholder="E-mail">
              </div>

              <div class="form-group">
                <input type="password" name="senha" class="form-control" required placeholder="Senha">
              </div>
              
              <div class="mt-4 mb-4">
                <small class="form-text">
                  Ao inscrever-se, você concorda com os Termos de Serviço e com as Políticas de Privacidade, incluindo o Uso de Cookies. Outras pessoas poderão encontrar você pelo e-mail ou número de telefone fornecido · Opções de Privacidade
                </small>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Inscrever-se</button>
            </form>
           <?php if (isset($_SESSION['erro'])) {
              echo "<p class = 'text-white row bg-danger padding:10px text-center'>";
              echo $_SESSION['erro'];
              unset($_SESSION['erro']);
              echo "</p>";
              }
           ?>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</body>

</html>


    
  