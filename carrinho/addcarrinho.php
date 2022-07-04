<?php
if(!isset($_SESSION)){
    session_start();
}
include('../conecta.php');
$id_produto = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id='$id_produto'";

$resultado = mysqli_query($conexao, $sql);
$produto = mysqli_fetch_assoc($resultado);

$inserirProduto = "INSERT INTO `carrinho`( `id_produto`, `nome`, `preco`) 
VALUES ('$id_produto','$produto[nomeproduto]','$produto[preco]')";
$resultado2 = mysqli_query($conexao,$inserirProduto);
$id = mysqli_insert_id($conexao);
if($resultado2)
//header("location:addcarrinho2.php");
$_SESSION['carrinho'][$id];
 var_dump($_SESSION);

?>