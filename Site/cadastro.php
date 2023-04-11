<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Vialog Transportes">
  <meta name="generator" content="">
  <title>Cadastre-se</title>


  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="assets/css/floating-labels.css" rel="stylesheet">
</head>

<body>

  <form class="form-signin">

    <div class="text-center mb-4">
      <img class="mb-4" src="https://d1jfoe5og03v22.cloudfront.net/EmpresaLogo/via-log-transporte-d18f87fa-8f93-4507-ae48-e66f0c13bf37.gif" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Cadastre-se</h1>
    </div>

    <div class="form-label-group">
      <input type="text" id="inputText" class="form-control" placeholder="Insira seu nome" required>
      <label for="inputText">Nome</label>
    </div>

    <div class="form-label-group">
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputEmail">Email</label>
    </div>

    <div class="form-label-group">
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
      <label for="inputPassword">Senha</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" style="background-color: #de550d;" type="submit">Cadastro</button>

    <?php

    ?>

    <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
  </form>

  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/form-validation.js"></script>
  <script>
    function validaCampoSenha(){
      var campo = document.getElementById('senha');
      var txt   = document.getElementById('senha').value;
      var n     = txt.length;
      if(n < 6) {
        alert("A senha tem apenas " + n + " caracteres, precisa ter 6 ou mais");
        return false;
        campo.focus();
      }
        return true;
    }
  </script>

</body>

</html>