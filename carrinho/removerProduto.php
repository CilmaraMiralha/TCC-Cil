<?php
if(!isset($_SESSION)){
    session_start();
}
include('../conecta.php');
$id_produto = $_GET['id'];
$sql = "DELETE FROM carrinho WHERE id_produto = '$id_produto'";
$resultado = mysqli_query($conexao, $sql);
unset($_SESSION['carrinho']['id_carrinho'][$id_produto]);
var_dump($_SESSION['carrinho']['id_carrinho']);
$url = $_SERVER['HTTP_REFERER'];
header("location:$url");

?>