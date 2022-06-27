<?php
    require_once "../conecta.php";
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);
    $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC); 
    ?>

<title>Produtos</title>

<?php require "headerCliente.php";?>

<body>
<main class="container">
<div class="row">

  
            <?php foreach ($produtos as $chave => $produto){
              ?>
              
                <div class="col s12 m5">
                <div class="card medium">
                  <div class="card-image">
         <img width = 200 src= "../imagens/<?= $produto['foto'] ?>">
        </div>
        <div class="card-content">
        <span class='card-title'><?= $produto['nomeproduto']?></span>
          <p>Preço: R$ <?= $produto['preco']?></p>
        </div>
        <div class="card-action">
        <?= "<a href='ver-produtos-cliente.php?id=$produto[id]'>Ver mais</a>"; ?>
              


        </div>
        </div>
    </div>
        <?php } ?>
        </div>
</main>
</body>

<?php include_once "../materialize/rodape.php"; ?>