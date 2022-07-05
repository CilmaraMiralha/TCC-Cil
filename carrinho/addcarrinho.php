<?php
if(!isset($_SESSION)){
    session_start();
}

include('../conecta.php');
$id_produto = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id='$id_produto'";
$resultado = mysqli_query($conexao, $sql);
$produto = mysqli_fetch_assoc($resultado);

$_SESSION['carrinho'][$id_produto] = $produto;
var_dump($_SESSION);
if($resultado){
header("location:carrinho.php");
}
?>