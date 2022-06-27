<?php
require_once "../conecta.php";
if(isset($_FILES['imagem'])){

    $ext = strrchr($_FILES['imagem']['tmp_name'], '.');
    $nomeimagem = md5(time()) . $ext;
    $pasta = "../imagens/";
    
    
    move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta.$nomeimagem);
}

$nomeproduto = $_POST['nomeproduto'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$descricao = $_POST['descricao'];


$sql = "INSERT INTO `produtos`( `nomeproduto`,`preco`, `quantidade`, `descricao`, `foto`) VALUES ('$nomeproduto','$preco','$quantidade','$descricao','$nomeimagem')";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
   header("location:lista-produtos.php");
}

?>