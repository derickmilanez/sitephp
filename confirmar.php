<?php
$email = $_GET["email"];
$sql = "update usuario set estatus='ativo' where email= '$email'";
$conn = mysqli_connect("localhost","root","","login");
mysqli_query($conn,$sql);
mysqli_close($conn);
echo "<script>alert('Cadastrado com sucesso!');document.location.href='index.php'</script>";
?>
