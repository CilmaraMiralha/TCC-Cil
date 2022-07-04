<?php 
include('../conecta.php');
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['id'])){
    require_once "../headers/headerCliente.php";
} else {
    require_once "../headers/header.php";
}

?>

<title>Página inicial</title>

<body>

    <main>
           
  <div class="center"> 
<h1>Carrinho</h1>

<?php 
if(isset($_SESSION['carrinho']['id_carrinho']) and $_SESSION['carrinho']['id_carrinho'] != NULL){
foreach($_SESSION['carrinho']['id_carrinho'] as $key => $produto){ ?>
    <div class="row">
        <div class="col s12">
            <?php echo $produto['nome'];
                  echo $produto['preco']; ?>
                  <a href = "removerProduto.php?id=<?=$produto['id_produto']?>">Remover do carrinho</a>
        </div>
    </div>
</div>
<?php }}else {
    echo "Não há produtos no carrinho";
} ?>
    </main>
</body>

<?php include_once "../geral/rodape.php"; ?>