<title>Cadastro de produtos</title>

<?php require "../materialize/cabeçalho.php";?>



<body>
    <main class="container">
    <form action="cadastro-produtos.php" method="post" enctype="multipart/form-data">
        <h1>Cadastro de Produto:</h1>
        Nome do produto: <input type="text" name="nomeproduto"><br><br>
        Preço: <input type="text" name="preco"><br><br>
        Quantidade: <input type="text" name="quantidade"><br><br>
        Descrição: <input type="text" name="descricao"><br><br>
        Foto: <input type = "file" name = "imagem"> <br><br>
<br>
        <input type="submit" value="Cadastrar">
    </form>
</main>
</body>




<?php require "../materialize/rodapé.php";?>
