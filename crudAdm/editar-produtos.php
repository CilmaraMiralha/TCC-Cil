<?php
include "../conecta.php";
$sql = "SELECT * FROM `produtos`";
$resultado = mysqli_query($conexao,$sql);
$produto = mysqli_fetch_assoc($resultado);
?>

<title><?=$produto['nomeproduto']?></title>
<body>
<main>
<?php require "../materialize/cabeçalho.php";?>
<div class="container">
    <form action="edita-produto.php" method="post" enctype="multipart/form-data">
        <h1>Alterar produto:</h1>
        <input type="hidden" name = "id" value = "<?= $produto['id'] ?>">
        Nome do produto: <input type="text" name="nomeproduto" value = <?="$produto[nomeproduto]"?>><br><br>
        Preço: <input type="text" name="preco" value = <?="$produto[preco]"?>><br><br>
        Quantidade: <input type="text" name="quantidade" value = <?="$produto[quantidade]"?>><br><br>
        Descrição: <input type="text" name="descricao" value = <?="$produto[descricao]"?>><br><br>
        Foto: <input type = "file" name = "imagem" value = <?="$produto[foto]"?>> <br><br>
        <br>
        <input type="submit" value="Alterar">
    </form>
    </div>
</main>        
</body>

<?php require "../materialize/rodapé.php";?>
