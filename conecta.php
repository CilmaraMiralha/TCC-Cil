<?php
$host ="localhost";
$user = "root";
$password = "";
$bd = "loja";
$conexao = mysqli_connect($host, $user, $password, $bd);

if($conexao == false){
    die ("Erro ao conectar ao banco de dados. Erro:".mysqli_connect_error());
}


?>