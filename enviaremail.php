<?php
$nome = $_POST["nome"];
$email = "dsec.contato@gmail.com";
$useremail = $_POST["email"];
$assunto = $_POST["assunto"];
$comentario = $_POST["comentario"];
if(empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["assunto"]) || empty($_POST["comentario"]))
{
    echo "<script>alert('Preencha todos os campos!');document.location.href='contato.php';</script>";
}
else{
$header = "MIME-Version: 1.0\r\n";
$header .= "From: $nome <$useremail>\r\n";
$header .= "Content-type: text/html; charset=utf-8" . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion ();
$result = mail($email,$assunto,$comentario,$header);
if ($result){
    echo "<script>alert('Enviado com sucesso!');
    document.location.href='index.php';</script>";
}else{
    echo "<script>alert('Falha no envio de email :[');
    document.location.href='contato.php';</script>";
}
}
?>