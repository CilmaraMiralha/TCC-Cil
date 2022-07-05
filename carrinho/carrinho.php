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
<div class="row">
        <div class="col s12">
<?php 
if(isset($_SESSION['carrinho']) and $_SESSION['carrinho']!= NULL){
foreach($_SESSION['carrinho'] as $key => $produto){ ?>
    
            <?php echo $produto['nomeproduto'];
                  echo $produto['preco']; ?>
                  <a href = "removerProduto.php?id=<?=$produto['id']?>">Remover do carrinho</a>
                  <br>
    
<?php }}else {
    echo "Não há produtos no carrinho";
} ?>
    </div>
    </div>
</div>
    </main>
</body>

<?php include_once "../geral/rodape.php"; ?>