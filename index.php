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
 <!-- Download BTN Library -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/download.css">
 <!-- Download BTN Library -->
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
 <br>
 <br>
 <br>
 <!-- Slider -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
	<a href="produto-dericksultimatecalculator.php">
      <img class="d-block w-100" src="img/slides1.png" alt="Primeiro Slide">
	  </a>
	    <div class="carousel-caption d-none d-md-block">
    <h5>Conheça a melhor calculadora do mundo!</h5>
    <p>Usufrua do alto desempenho deste software criado para solucionar problemas do dia a dia.</p>
  </div>
    </div>
    <div class="carousel-item">
	<a href="sobre.php">
      <img class="d-block w-100" src="img/slides2.png" alt="Segundo Slide">
	  </a>
	    <div class="carousel-caption d-none d-md-block">
    <h5>Conheça a nossa incrível história!</h5>
    <p>Saiba como, onde e porque esta empresa maravilhosa foi fundada, e nossos planos para o futuro.</p>
  </div>
    </div>
    <div class="carousel-item">
	<a href="contato.php">
      <img class="d-block w-100" src="img/slides3.png" alt="Terceiro Slide">
	  </a>
	    <div class="carousel-caption d-none d-md-block">
    <h5>Entre em contato conosco!</h5>
    <p>Sua opinião é muito valiosa para nós então não deixe de dividi-la conosco.</p>
  </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
<!-- Slider --> 
 <br>
 <br>
 <br>
 <!-- Últimos Produtos -->
<div style="background-color: #f2f2f2;">
<center>
  <h1> Últimos Produtos </h1>
<img src="img/calc.png" width="50%" height="50%">
  <h1> Derick's Ultimate Calculator </h1>
  <h6> Versão 1.0</h6>
  <br>
  </center>
  <p style="padding-top: 0;
  padding-right: 20%;
  padding-bottom: 0;
  padding-left: 20%;">
  A Derick's Ultimate Calculator é um software gratuito que permite com que o usuário performe as quatro operações
  básicas da matemática, de uma forma simples, rápida e eficaz.<br>
  Com uma interface gráfica descomplicada e intuitiva, qualquer um pode usufruir do poder de alta performance deste
  software altamente útil e eficiente. Basta somente digitar os números que você deseja operar nos campos editáveis,
  e com apenas um click você poderá realizar as quatro operações básicas da matemática com grande facilidade e 
  velocidade.<br>
  <a href="produto-dericksultimatecalculator.php"> Saiba mais. </a>
  <br>
  <br>
  </p>
  <center>
  <a href="">
  <button class="botão"><i class="fa fa-download"></i> Download</button>
  </a>
  </center>
<br>
<br>
<br>
</div>
<!-- Últimos Produtos -->
<br>
<br>
<br>
<!-- Sobre a Empresa -->
<div style="background-color: #ffffff;">
<center>
 <h1> Sobre a Empresa </h1>
 <br>
<img src="img/escritorio.jpg" width="50%" height="50%">
 <br>
<small>Nosso escritório.</small>
  <br>
  <br>
</center>
  <p style="padding-top: 0;
  padding-right: 20%;
  padding-bottom: 0;
  padding-left: 20%;">
  A Derick's Software Engineering Corporation é uma empresa de desenvolvimento de softwares criada
  para facilitar a vida das pessoas por intermédio da técnologia.<br>
  Nosso dever é proporcionar aos nossos clientes as melhores formas de solução de problemas de forma
  rápida, fácil e eficaz. Existimos em função de nossos clientes, portanto a comunicação entre a empresa
  e eles é algo essencial, nós existimos por você!<br>
  Esperamos que num futuro próximo, a Derick's Software Engineering Corporation se torne líder mundial da
  área tecnológica, superando grandes empresas múltinacionais como o Google, a Microsoft e até mesmo a Apple, 
  e o único que pode nos ajudar nesta missão é você, utilizando nossos produtos e nos ajudando a melhora-los
  através do seu feedback.<br>
  Se deseja saber mais sobre a nossa empresa,
  <a href="sobre.php"> clique aqui. </a>
  </p>

</div>
<!-- Sobre a Empresa -->
<br>
<br>
<br>
<!-- Contate-nos -->
<div style="background-color: #f2f2f2;">
<center>
  <h1> Contate-nos </h1>
<br>
<br>
<img src="img/atendente.jpg" width="50%" height="50%">
  <br>
  <br>
</center>
  <p style="padding-top: 0;
  padding-right: 20%;
  padding-bottom: 0;
  padding-left: 20%;">
  Nós trabalhamos em função de nosssos clientes, portanto a sua opinião é muito importante para nós! 
  É você quem nos ajuda na criação e no aprimoramento de nossos produtos, nossa empresa existe para 
  facilitar o dia a dia de pessoas que buscam resolver seus problemas de forma rápida e eficaz.<br>
  Talvez você esteja se perguntando "onde é que eu entro nisso?". Bom, nós projetamos nossos produtos 
  para que nossos clientes possam utiliza-los, se  um cliente está insatisfeito com algum de nossos 
  produtos ele irá parar de usá-lo, e se ninguém utiliza um produto logo sua existência é inútil.<br>
  É você quem dá significado existêncial aos nossos produtos usufruindo deles, e para que você possa continuar os 
  utilizando, é nosso dever manter a integridade e funcionamento deles, logo sua opinião influencia diretamente
  na criação e aprimoramento de nossos produtos, portanto entre em contato conosco e nos envie a sua dúvida, reclamação ou sugestão.
  <a href="contato.php"> Converse conosco. </a>
  </p>
<br>
<br>
<br>
</div>
<!-- Contate-nos -->
<br>
<br>
<br>
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
</body>
</html>