<?php
session_start();
?>
<html>
<head>
<title> Login de Usuário </title>
</head>
<body>
<form method="POST" action="validar.php">
<label>Login:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="entrar" id="entrar" name="entrar"><br>
<a href="cadastrar.php">Cadastre-se</a>
</form>
</body>
</html>
