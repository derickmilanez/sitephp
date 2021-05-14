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
 <style>
 body {
 background-image: url("img/contatobg.jpg");
 background-color: #ffffff;
 background-repeat: repeat-y;
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
<br>
<br>
<br>
<br>
<br>
<br>
 <!-- Resultado -->
 <div style="background-color: #f2f2f2;">
<center>
<br>
  <h1> Derick's Ultimate BMI Calculator Online </h1>
  <br>
<img src="img/bmilogo.png" width="60%" height="60%">
  <br>
  <small> Logo do produto. </small>
  <br>
  </center>
  <p style="padding-top: 2%;
  padding-right: 20%;
  padding-bottom: 0%;
  padding-left: 20%;">
  A Derick's Ultimate BMI Calculator é um sistema online 100% gratuíto que permite com que
  seus usuários calculem seu Índice de Massa Corporal (IMC) de modo rápido e fácil.<br>
  <br>
  Para utilizar esse sistema altamente inovador e excepcionalmente eficaz basta digitar seu
  peso (em quilogramas) e sua altura (em metros) nos campos indicados e então apertar o botão
  "Calcular".<br>
  <br>
  Ao realizar as ações citadas no parágrafo anterior, em questão de segundos você terá um texto
  mostrando o resultado do seu IMC junto com outro texto informando se você está abaixo do peso,
  acima do peso, ou no peso ideal.<br>
  <br>
  </p>
  <?php
  $imc = $_POST["peso"] / ($_POST["altura"] * $_POST["altura"]);
  echo "<center><h3>Seu IMC é: ".number_format($imc,2,",",".")."</h3></center><br>";
if ($imc < 18.5)
{
	echo "
	<center>
	  <br>
     <img src='img/skeleto.jpg' width='60%' height='60%'>
      <br>
	 <p style='padding-top: 2%;padding-right: 20%;padding-bottom: 0%;padding-left: 20%;'>Você está abaixo do peso!</p><br>
	 </center>";
}
elseif ($imc > 25)
{
	echo "
	<center>
	  <br>
     <img src='img/obeso.jpeg' width='60%' height='60%'>
      <br>
	 <p style='padding-top: 2%;padding-right: 20%;padding-bottom: 0%;padding-left: 20%;'>Você está acima do peso!</p><br>
	 </center>";
}
elseif (is_nan($imc))
{
	echo "
	<center>
	  <br>
     <img src='img/emojibrabo.png' width='30%' height='30%'>
      <br>
	 <p style='padding-top: 2%;padding-right: 20%;padding-bottom: 0%;padding-left: 20%;'>Você não pode dividir por zero!</p><br>
	 </center>";
}
else
{
	echo "
	<center>
	  <br>
     <img src='img/emojifoda.jpg' width='30%' height='30%'>
      <br>
	 <p style='padding-top: 2%;padding-right: 20%;padding-bottom: 0%;padding-left: 20%;'>Você está no peso ideal!</p><br>
	 </center>";
}
  ?>
  <!-- TABELA DE IMC -->
<center>
<h3> Tabela do IMC </h3>
  <p style="padding-top: 2%;
  padding-right: 20%;
  padding-bottom: 2%;
  padding-left: 20%;">
  Caso queira saber com mais detalhes a classificação do seu IMC, compare o resultado com
  a tabela abaixo:
  </p>
<table class="table table-bordered table-hover" style="width:60%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">IMC</th>
      <th scope="col">Classificação</th>
	  <th scope="col">Grau de Obesidade</th>
    </tr>
  </thead>
  <tbody style="background-color: #fff;">
    <tr>
      <th scope="row">MENOR QUE 18,5</th>
      <td>MAGREZA</td>
	  <td>0</td>
    </tr>
    <tr>
      <th scope="row">ENTRE 18,5 E 24,9</th>
      <td>NORMAL</td>
	  <td>0</td>
    </tr>
    <tr>
      <th scope="row">ENTRE 25,0 E 29,9</th>
      <td>SOBREPESO</td>
	  <td>1</td>
    </tr>
    <tr>
      <th scope="row">ENTRE 30,0 E 39,9</th>
      <td>OBESIDADE</td>
	  <td>2</td>
    </tr>
    <tr>
      <th scope="row">MAIOR QUE 40,0</th>
      <td>OBESIDADE GRAVE</td>
	  <td>3</td>
    </tr>
  </tbody>
</table>
<center>
<!-- TABELA DE IMC -->
 <form style="border-radius: 5px;
  background-color: #f2f2f2;
  padding: 2% 20%;
  margin: 2%, 2%;" action="imcresultado.php" method="post">
  <h3> Calcule seu IMC </h3>
    <div class="form-group">
    <label for="validationDefault01">Peso (Kg):</label>
    <input type="number" class="form-control" id="validationDefault01" placeholder="Exemplo: 50" name="peso" required>
  </div>
  <div class="form-group">
    <label for="validationDefault02">Altura (Metros):</label>
    <input type="number" class="form-control" id="validationDefault02" placeholder="Exemplo: 1,50" name="altura" step="0.01" min="0" max="10" required>
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
  </form>
<br>
<br>
  </div>
<div style="background-color: #fff;">
<center>
<br>
<h1>Experimente também a versão Offline<br> desta potente calculadora!</h1>
<img src="img/splashbmi.png" width="60%" height="60%">
  <br>
  <small> É DUBMIC sem o "O" taokei? </small>
  <br>
</center>
<br>
<p style="padding-top: 2%;
  padding-right: 20%;
  padding-bottom: 0%;
  padding-left: 20%;">
  Caso você gostou de usar a Derick's Ultimate BMI Calculator Online, porém nem sempre
  tem acesso à internet para usar esta poderosa ferramenta, é com prazer que anunciamos a
  Derick's Ultimate BMI Calculator (Sem o online) para o Sistema Operacional Windows.<br><br>
  
  Caso você se ache o espertão e já queria sair usando a ferramenta sem ler as instruções, é só
  clicar no botão de Download e  baixar. Caso contrário <a href="produto-dubmic.php">Clique aqui para saber com detalhes como usar a DUBMIC.</a>
  <br>
  </p>
  <br>
  <br>
  <center>
  <a href="">
  <button class="botão"><i class="fa fa-download"></i> Download</button>
  </a>
  </center>
  <br>
  <br>
</div>
 <!-- Resultado -->
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
  <!-- Bootstrap JS-->
</body>
</html>