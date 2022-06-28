<?php
require_once "../conecta.php";
$id = $_GET['id'];
$sql= "SELECT * FROM produtos WHERE `id` = $id";
$resultado = mysqli_query($conexao, $sql);
$produto = mysqli_fetch_assoc($resultado);

if (isset($_GET['id'])){
    
}


?>




