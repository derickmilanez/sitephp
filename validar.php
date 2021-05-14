<?php 
session_start();
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$conn = mysqli_connect("localhost","root","","login");
$sql= "SELECT * FROM usuarios WHERE email = '$login' and senha = '$senha' and estatus = 'ativo ' ";
$naosei= "SELECT * FROM usuarios WHERE email = '$login' and senha = '$senha' and estatus = 'desativa '";
  if(isset($login )&& isset ($senha)){
	  $verificar2 = mysqli_query($conn,$naosei);
	  if($verificar2=1){
		 echo "<script> alert ('espere o adm ativar seu perfil')</script>";
	  }else{
	  $verificar = mysqli_query($conn,$sql);
	  if($verificar=1){
		  
		  echo"<script>document.location.href='index.php'</script>";
	  }
	  else {
		  echo"<script> alert ('login e senha incorretos')</script>";
	  }
	  }
	  }
	  
  
?>