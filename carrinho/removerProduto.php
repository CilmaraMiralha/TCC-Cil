<?php
if(!isset($_SESSION)){
    session_start();
}
include('../conecta.php');
$id_produto = $_GET['id'];
unset($_SESSION['carrinho'][$id_produto]);

$url = $_SERVER['HTTP_REFERER'];
header("location:$url");

?>