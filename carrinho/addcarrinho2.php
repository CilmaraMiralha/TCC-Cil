<?php
if(!isset($_SESSION)){
session_start();
}

include('../conecta.php');
$id_carrinho = $_GET['id'];

$sql = "SELECT * FROM carrinho WHERE id_carrinho = '$id_carrinho'";
$resultado = mysqli_query($conexao,$sql);
$carrinho = mysqli_fetch_assoc($resultado);
$id_produto = $carrinho['id_produto'];

$_SESSION['carrinho']['id_carrinho'][$id_produto] = $carrinho;
var_dump($_SESSION);

header("location:carrinho.php");
?>