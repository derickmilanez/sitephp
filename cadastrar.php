<!DOCTYPE html>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
?>
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
 	<script>	
	function atualizarFoto(arq){
			var f = document.getElementById("foto");
			f.src = URL.createObjectURL(arq.files[0]);		
	}		
	</script>
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
      <a href="cadastrar.php"></a><button class="btn btn-outline-light">Cadastrar</button></a>
  </div>
 </nav>
 <!-- Menu -->
<!-- Formulario -->
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <form style="border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;" method="post" action="">
  <div class="form-group">
  <h1> Cadastro </h1>
 <p>Cadastre-se em nosso site e faça parte do nosso plano de dominação mundial!</p>
    <label for="formGroupExampleInput">Nome de usuário:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insira seu nome de usuário aqui" name="usuario" maxlength="16">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Endereço de E-mail</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Insira seu email aqui" name="email" maxlength="255">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha" name="senha" maxlength="20">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmar senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme sua senha" name="confirmar">
	<?php
	if(empty($_POST["usuario"]) || empty($_POST["email"]) || empty($_POST["senha"]) || empty($_POST["confirmar"])){
	   echo "<script>alert('Preencha todos os campos!')</script>"; 
	}else{
		if (isset($_POST["senha"])){
			if ($_POST["senha"]==$_POST["confirmar"]){
                $conn = mysqli_connect("localhost","id11389124_derick","123456","id11389124_dsec");
				$usuario = $_POST["usuario"];
				$email   = $_POST["email"];
				$senha   = md5($_POST["senha"]);
				$status  = "pendente";
				$consultasql = "select * from usuarios where email='$email'";
                $consulta = mysqli_query($conn,$consultasql);
                $linha = mysqli_num_rows($consulta);
$sql = "insert into usuarios(usuario,email,senha,estatus) values('$usuario','$email','$senha','$status')";
if($linha==0){
				mysqli_query($conn,$sql);
				mysqli_close($conn);

				try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP(); // Send using SMTP
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'dsec.contato@gmail.com';
    $mail->Password = 'terraplanista2019';// SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587;// TCP port to connect to
    //Recipients
    $mail->setFrom('dsec.contato@gmail.com', 'Derick | DSEC');
    $mail->addAddress($email); // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'Confirme seu cadastro';
    $mail->Body    = '<a href="dsec.000webhostapp.com/confirmar.php?email=$email">Clique aqui</a> para confirmar seu cadastro.';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo "<script>alert('Confirme o cadastro no seu e-mai! Por via das dúvidas, cheque sua caixa de Spam.')</script>";
} catch (Exception $e) {
    echo "Não foi possível enviar o email.";
}}else{echo "<script>alert('Este endereço de email já foi registrado.')</script>";}
			}else{
				echo "<span style='color:red;'>Senha não confere!</span><br>";
			}
		}
	}
	?>
  </div>
  <div class="form-group">
    <label for="arquivo">Selecione uma foto de perfil:</label><br>
    <input type="file" class="form-control-file" id="arquivo" name="arquivo" accept="image/png,image/jpeg" /><br>
	<img id="foto" style="width:80px;height:80px;" src="img/user.png"/>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
 </form>
 <br>
 <br>
 <br>
<!-- Formulario -->
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