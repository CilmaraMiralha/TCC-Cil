<?php

require_once "../conecta.php";
include_once "../geral/funcoes.php";

?>
<title> Resultado da Pesquisa </title>

<body>
<main>

<?php
verificacaoHeader();
if($_GET['pesquisa']==""){
    header("location:../inicio/ver-produto.php");

}

$pesquisa = "%" . trim($_GET ['pesquisa']). "%";

$sql="SELECT `id`, `nomeproduto`, `preco`, `quantidade`, `descricao`, `foto` FROM `produtos` WHERE nomeproduto like '$pesquisa'";

$resultado = mysqli_query($conexao, $sql);
$produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>

<div class='container'>
<div class='card-panel grey lighten-4 center'>
<table>
    <thead><th>Imagem do produto</th><th>Nome do produto</th><th></th></thead><tbody>
    <?php foreach($produtos as $chave => $produto){ 
        if (isset ($_SESSION ['id'])){
        if ($_SESSION['nvl_acesso'] == 2){ ?>
            <tr><td> <img src ="../imagens/<?=$produto['foto']?>" width='100'></td>
            <td><?=$produto['nomeproduto']?></td>
            <td><a href="../inicio/ver-produto.php?id=<?=$produto['id']?>"><i class="material-icons pink-text small">pageview</i></a> 
            <a href="../Adm/editar-produtos.php?id=<?=$produto['id']?>"><i class="material-icons pink-text small">mode_edit</i></a>
           <!--pegar o script -->
            <a href="../Adm/excluir-produtos.php?id=<?=$produto['id']?>" onclick = "confirmacao($produto[id])"><i class="material-icons pink-text small">delete</i>
            </a></td></tr></tbody>
        <?php }else if($_SESSION['nvl_acesso'] != 2){ ?>
            <tr><td> <img src ="../imagens/<?=$produto['foto']?>" width='100'> </td>
            <td><?= $produto['nomeproduto']."</td>"?>
            <td> <a href="../inicio/ver-produto.php?id=<?=$produto['id']?>"><i class="material-icons pink-text small">pageview</i></a></td></tr></tbody>
       <?php }
    }else { ?>
        <tr><td> <img src ="../imagens/<?=$produto['foto']?>" width='100'> </td>
            <td><?= $produto['nomeproduto']?></td>
            <td> <a href="../inicio/ver-produto.php?id=<?=$produto['id']?>"><i class="material-icons pink-text small">pageview</i></a></td></tr></tbody>
    <?php }} ?>

</table></div></div>
</main>
</body>
<?php require "../geral/rodape.php";?>
