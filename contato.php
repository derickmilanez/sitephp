<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <title> Derick's Software Engineering Corporation </title>
 <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
 <!-- Bootstrap CSS -->
 <style>
 body {
 background-image: url("img/contatobg.jpg");
 background-color: #ffffff;
 background-repeat: no-repeat;
 background-size: 108%;
 }
 </style>
</head>
<body>
 <!-- Menu -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php" title="Derick's Software Engineering Corporation">
    <img src="img/favicon.jpg" width="30" height="30" alt="Derick's Software Engineering Corporation">
	DSEC&reg;
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="produto-dericksultimatecalculator.php">Derick's Ultimate Calculator</a>
		  <a class="dropdown-item" href="produto-dubmic.php">Derick's Ultimate BMI Calculator</a>
		  <a class="dropdown-item" href="produto-dubmico.php">Derick's Ultimate BMI Calculator Online</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="sobre.php">Sobre</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contato.php">Contato</a>
      </li>
    </ul>
    <form class="form-inline" action="entrar.php" method="get">
      <button class="btn btn-outline-light">Entrar</button>
    </form>
	<p style="color:#fff;">⠀ou⠀</p>
    <form class="form-inline" action="cadastrar.php" method="get">
      <button class="btn btn-outline-light">Cadastrar</button>
    </form>
  </div>
 </nav>
 <!-- Menu -->
 <!-- Formulário -->
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <form style="border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;" method="post" action="enviaremail.php">
  <div class="form-group">
 <h1> Contato </h1>
 <p> Entre em contato conosco e envie a sua dúvida, reclamação ou sugestão. Atendimento 24 horas nos 7 dias da semana! </p>
    <label for="formGroupExampleInput">Nome</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Coloque seu nome aqui" name="nome">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Endereço de E-mail</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ex: lourojose@gmail.com" name="email">
  </div>
  <div class="form-group">
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Selecione o tipo de contato</label>
    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="assunto">
    <option selected>Escolher...</option>
    <option value="Reclamação">Reclamação</option>
    <option value="Dúvida">Dúvida</option>
    <option value="Sugestão">Sugestão</option>
    </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentário</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
 <br>
 <br>
 <br>
<!-- Formulário -->
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-primary" style="
   left: 0;
   bottom: 0;
   width: 100%;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#fff;">Derick's Software Engineering Corporation</h6>
        <p style="color:#fff;">Empresa focada no desenvolvimento de softwares altamente úteis e poderosos, para todo tipo de cliente.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#fff;">Produtos</h6>
        <p style="color:#fff;">
          <a href="produto-dericksultimatecalculator.php" style="color:#fff;">Derick's Ultimate Calculator</a><br>
		  <a href="produto-dubmic.php" style="color:#fff;">Derick's Ultimate BMI Calculator</a><br>
		  <a href="produto-dubmico.php" style="color:#fff;">Derick's Ultimate BMI Calculator Online</a><br>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#fff;">Links</h6>
        <p style="color:#fff;">
          <a href="entrar.php" style="color:#fff;">Sua conta</a>
        </p>
        <p style="color:#fff;">
          <a href="cadastrar.php" style="color:#fff;">Cadastre-se</a>
        </p>
        <p style="color:#fff;">
          <a href="https://www.cvv.org.br/" style="color:#fff;">Ajuda</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#fff;">Contato</h6>
        <p style="color:#fff;">Av. Maria Coelho Aguiar, 215 - Jardim São Luís, São Paulo - SP, 05804-900</p>
        <p style="color:#fff;"> derickmilanezssr@gmail.com</p>
        <p style="color:#fff;"> +55 11 3445-3540</p>
        <p style="color:#fff;"> +55 11 98406-6277</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left" style="color:#fff;">© 2019 Derick's Software Engineering Corporation. All rights reserved.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->
 <!-- Bootstrap JS-->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/bootstrap.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <!-- Bootstrap JS-->
</body>
</html>