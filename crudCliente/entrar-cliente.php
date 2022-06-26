<?php
session_start();

$email = $_POST ['email'];
$senha = $_POST ['senha'];


require_once "../conecta.php";
$sql="SELECT * FROM clientes WHERE email='$email'"; 

$resultado = mysqli_query($conexao,$sql);
$cliente = mysqli_fetch_assoc($resultado);

//var_dump($usuario);

if(password_verify($senha, $cliente['senha'])){
    $_SESSION['id'] = $cliente['id'];
    $_SESSION['nvl_acesso'] = $cliente['nivelAcesso'];
    $_SESSION['nome'] = $cliente['nome'];
}else{
    echo "Senha incorreta";
}

if($resultado){
    header("location: ../index/index.php");
}

?>