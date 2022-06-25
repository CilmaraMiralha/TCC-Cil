<?php
session_start();
require_once "funcoes.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Entrar na sua conta:</title>
</head>

<body>
<form action="entrar-cliente.php" method="POST">
       <div style="color: red;"><?= msg() ?></div>
       Email: <input type="email" name="email"><br><br>
       Senha: <input type="password" name="senha"><br><br>
       <input type= "submit" value="Enviar">
</form>
       <br><br>
       Não possui uma conta? <a href="cadastro-cliente.php">Cadastre-se</a>
</body>
</html>