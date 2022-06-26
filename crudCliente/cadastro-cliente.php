<?php
session_start();

require_once "../conecta.php";
require "funcoes.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO `clientes`( `nome`,`sobrenome`, `email`, `senha`, `nivelAcesso`) VALUES ('$nome','$sobrenome','$email','$senha', '3')";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
    $id = mysqli_insert_id($conexao);
    $_SESSION ['id'] = $id;
   header("location: nivelacesso.php");
} else{
    $_SESSION ['mensagem'] = "Erro ao salvar o usuário no banco de dados!". 
    mysqli_errno($conexao).": ". mysqli_error($conexao);
    header("Location: cadastrar.php");
}

?>