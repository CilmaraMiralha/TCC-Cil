<?php
session_start();

require_once "../conecta.php";
require "../inicio/funcoes.php";

$id = $_SESSION ['id'];

$sql = "SELECT * FROM clientes WHERE `id` = $id";

$resultado = mysqli_query($conexao, $sql);
$cliente = mysqli_fetch_assoc($resultado);

var_dump($cliente);

if($resultado){
    $_SESSION['nvl_acesso'] = $cliente['nivelAcesso'];
    $_SESSION['nome'] = $cliente['nome'];
   header("location: inicio-Cliente.php");
}
?>