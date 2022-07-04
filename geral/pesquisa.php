<title> Resultado da Pesquisa </title>

<body>
<main>

<?php
if($_GET['pesquisa']==""){
    header("location:../geral/ver-produtos-geral.php");

}
$pesquisa = "%" . trim($_GET ['pesquisa']). "%";

require_once "../conecta.php";
include_once "../geral/funcoes.php";

$sql="SELECT `id`, `nomeproduto`, `preco`, `quantidade`, `descricao`, `foto` FROM `produtos` WHERE nomeproduto like '$pesquisa'";

$resultado = mysqli_query($conexao, $sql);
$produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

verificacaoHeader();

echo "<table>";
    echo "<thead><th>Imagem do produto</th><th>Nome do produto</th><th>Operações</th></thead><tbody>";
    foreach($produtos as $chave => $produto){
//tem q por o if
        echo "<tr><td> <img src ='../imagens/$produto[foto]' width='100'> </td>";
        echo "<td>". $produto['nomeproduto']."</td>";
        echo "<td><a href='ver-produtos.php?id=$produto[id]'>Ver mais </a> / <a href='editar-produtos.php?id=$produto[id]'>Editar</a> / 
        <a href='#' onclick = 'confirmacao($produto[id])'>Excluir</a></td></tr></tbody>";
    }

echo "</table>";

?>

</main>
</body>
<?php require "../geral/rodape.php";?>
 
