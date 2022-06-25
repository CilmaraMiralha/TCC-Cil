<?php
require_once "../conecta.php";
$id = $_POST['id'];
$nomeproduto = $_POST ['nomeproduto'];
$preco = $_POST ['preco'];
$quantidade = $_POST ['quantidade'];
$descricao = $_POST ['descricao'];

if(isset($_FILES['imagem'])){

    $ext = strrchr($_FILES['imagem']['tmp_name'], '.');
    $nomeimagem = md5(time()) . $ext;
    $pasta = "../imagens/";
    
    
    move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta.$nomeimagem);
}


var_dump($_FILES);

if($_FILES['imagem']['error'] == 0){
$sql = "UPDATE `produtos` SET `nomeproduto`='$nomeproduto',`preco`='$preco',`quantidade`='$quantidade',`descricao`='$descricao',`foto`='$nomeimagem' WHERE `id` = '$id' ";

}else{
    $sql = "UPDATE `produtos` SET `nomeproduto`='$nomeproduto',`preco`='$preco',`quantidade`='$quantidade',`descricao`='$descricao' WHERE `id` = '$id' ";
}

$resultado = mysqli_query($conexao, $sql);

if($resultado){

    header("location:lista-produtos.php");
}
?>