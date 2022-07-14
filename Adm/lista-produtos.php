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

<?php require "../headers/headerAdm.php";?>

<body>
<main class="container">
<div class="row">

  
            <?php foreach ($produtos as $chave => $produto){
              ?>
              
                <div class="col s12 m4">
                <div class="card medium">
                  <div class="card-image">
         <img width = 200 src= "../imagens/<?= $produto['foto'] ?>">
        </div>
        <div class="card-content">
        <span class='card-title'><?= $produto['nomeproduto']?></span>
          <span>Preço: R$ <?= $produto['preco']?></span>
        </div>

        

        <div class="card-action">
          <div class="row">
        <a class='pink-text' href='../inicio/ver-produto.php?id=<?=$produto['id'];?>'>Ver mais</a>
        <a class='pink-text' href='editar-produtos.php?id=<?=$produto['id'];?>'>Editar</a>
        <a class="modal-trigger pink-text" href="#modal<?= $produto['id']; ?>">Excluir</a>
        </div>
        </div>
        </div>
    </div>
        <?php } ?>
        </div>

        <!-- Modal Structure -->
<div id="modal<?= $produto['id']; ?>" class="modal">
  <div class="modal-content">
    <h4>Excluir produto:</h4>
    <p>Você confirma a exclusão do produto <span style="font-weight: bold"> <?= $produto['nomeproduto']; ?></span>?</p>
  </div>
  <div class="modal-footer">
    <form action = "excluir-produtos.php">
    <input type = "hidden" name="id" value="<?= $produto['id']; ?>"> 
    <button type="submit" name="excluir" class="modal-action modal-close btn waves-light pink"> Excluir </button>
    <button type="button" name="cancelar" class="modal-action modal-close btn waves-light pink" > Cancelar</button>
    </form>
  </div>
</div>


</main>
</body>

<?php include_once "../geral/rodape.php"; ?>
