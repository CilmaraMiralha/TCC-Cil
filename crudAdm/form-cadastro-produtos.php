<title>Cadastro de produtos</title>

<body>
    <main>
    <?php require "../materialize/cabeçalho.php";?>
    <div class="container">
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
    </div>
</main>
</body>




<?php require "../materialize/rodapé.php";?>
