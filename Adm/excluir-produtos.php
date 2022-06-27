<?php
require_once "../conecta.php";

$id = $_GET['id'];

$sql = "DELETE FROM `produtos` WHERE `id`='$id'";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    header("location:lista-produtos.php");
}

?>