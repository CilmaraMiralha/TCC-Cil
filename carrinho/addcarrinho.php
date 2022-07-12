<?php
if(!isset($_SESSION)){
    session_start();
}

include('../conecta.php');
//var_dump($_GET);
$id_produto = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id='$id_produto'";
$resultado = mysqli_query($conexao, $sql);
$produto = mysqli_fetch_assoc($resultado);
//var_dump($produto);
$_SESSION['carrinho'][$id_produto] = $produto;
if (isset($_GET['observacao'])){
    $_SESSION['carrinho'][$id_produto]['observacao'] = $_GET['observacao'];
}
//var_dump($_SESSION);
if($resultado){
header("location:carrinho.php");
}
?>