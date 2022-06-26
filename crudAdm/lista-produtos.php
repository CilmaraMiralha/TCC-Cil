<?php
    require_once "../conecta.php";
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);
    $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    ?>

<script>
function confirmacao(id) {
     var resposta = confirm("Deseja remover este produto?");
     if (resposta == true) {
          window.location.href = "excluir-produtos.php?id="+id;
     }}
</script>

<title>Produtos</title>

<?php require "../materialize/cabecalho.php";?>

<body>
<main class="container">
    
<br><a href="form-cadastro-produtos.php">Cadastrar produtos</a><br><br>
    
    <?php
    echo "<table>";
    echo "<thead><th>Imagem do produto</th><th>Nome do produto</th><th>Operações</th></thead><tbody>";
    foreach($produtos as $chave => $produto){

        echo "<tr><td> <img src ='../imagens/$produto[foto]' width='100'> </td>";
        echo "<td>". $produto['nomeproduto']."</td>";
        echo "<td><a href='ver-produtos.php?id=$produto[id]'>Ver mais </a> / <a href='editar-produtos.php?id=$produto[id]'>Editar</a> / 
        <a href='#' onclick = 'confirmacao($produto[id])'>Excluir</a></td></tr></tbody>";
    }

echo "</table>";
    ?>
</main>
</body>

<?php require "../materialize/rodapé.php"; ?>
