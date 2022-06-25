<?php
session_start();

$email = $_POST ['email'];
$senha = $_POST ['senha'];
$senhaMD5 = md5 ($senha);


require_once "../conecta.php";
$sql="SELECT * FROM cliente WHERE email='$email'"; 

$resultado = mysqli_query($conexao,$sql);
$cliente = mysqli_fetch_assoc($resultSet);

//var_dump($usuario);
if(is_null($cliente)){
    $_SESSION['mensagem'] = "Usuário informado não existe!";
    header("Location: index.php");
} else if ($senhaMD5 == $cliente['senha']) {
    $_SESSION['id_pessoa'] = $cliente ['id_pessoa'];
    header("Location: inicio-cliente.php");
}else {
    $_SESSION['mensagem'] = "Senha inválida!";
    header("Location: index.php");
}

?>