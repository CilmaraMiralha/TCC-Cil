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
    
<div class="row">
    <div class="col s12 m7">
      <div class="card medium">
        <div class="card-image">
            <?php foreach ($produtos as $chave => $produto){
         echo"<img src='../imagens/$produto[foto]'>";?>
        </div>
        <div class="card-content">
        <span class='card-title'><?= $produto['nomeproduto']?></span>
          <p>Preço: R$ <?= $produto['preco']?></p>
        </div>
        <div class="card-action">
        <?= "<a href='ver-produtos.php?id=$produto[id]'>Ver mais</a>"?>
            <?php
            if (isset($_SESSION['id'])) {
                if($_SESSION ['nvl_acesso'] == 2){
                echo "<a href='editar-produtos.php?id=$produto[id]'>Editar</a>";
                echo "<a href='#' onclick = 'confirmacao($produto[id])'>Excluir</a>";
                }
            }
            ?>

        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</main>
</body>

<?php require "../materialize/rodapé.php"; ?>
