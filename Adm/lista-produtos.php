<?php
    require_once "../conecta.php";
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);
    $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC); 
    var_dump($produtos);
    ?>

<script>
function confirmacao(id) {
     var resposta = confirm("Deseja remover este produto?");
     if (resposta == true) {
          window.location.href = "excluir-produtos.php?id="+id;
     }}
</script>

<title>Produtos</title>

<?php require "headerAdm.php";?>

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
        <?php echo "<a href='ver-produtos.php?id=$produto[id]'>Ver mais</a>";
              echo "<a href='editar-produtos.php?id=$produto[id]'>Editar</a>";
              echo "<a href='#' onclick = 'confirmacao($produto[id])'>Excluir</a>";?>
              


        </div>
        </div>
    </div>
        <?php } ?>
        </div>
</main>
</body>

<?php include_once "../materialize/rodape.php"; ?>