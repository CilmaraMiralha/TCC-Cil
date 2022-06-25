<?php
session_start();
require_once "funcoes.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <form action="cadastro-cliente.php" method="post">
        <h1>Cadastro:</h1>
        Nome: <input type="text" name="nome" required><br><br>
        Sobrenome: <input type="text" name="sobrenome" required><br><br>
        E-mail: <input type="email" name="email" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        Confirmar Senha: <input type = "password" name = "confirmarsenha" required> <br><br>
         <!-- Fazer a parte de confirmar senha
        e de indicar se a senha está forte ou n -->
<br>
        <input type="submit" value="Cadastrar">


</form>
</body>
</html>