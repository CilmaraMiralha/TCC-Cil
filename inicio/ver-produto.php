<?php
require_once "../conecta.php";
$id = $_GET['id'];
$sql= "SELECT * FROM produtos WHERE `id` = $id";
$resultado = mysqli_query($conexao, $sql);
$produto = mysqli_fetch_assoc($resultado);
?>

<title><?=$produto['nomeproduto']?></title>

<style type="text/css">
 
 /* label focus color */
 .input-field textarea[type=text]:focus + label {
   color: #e91e63 !important;
 }
 /* label underline focus color */
 .input-field textarea[type=text]:focus {
   border-bottom: 1px solid #e91e63 !important;
   box-shadow: 0 1px 0 0 #e91e63 !important;
 }
 </style>
<?php require_once "../geral/funcoes.php"; ?>


<body>
<main>
  
<?php
verificacaoHeader();
echo "<br> <div class='container'>";
echo "<img src = '../imagens/$produto[foto]' width = '200'>";
echo "<p>Nome do produto: $produto[nomeproduto]</p>";
echo "<p>Preço: R$$produto[preco]</p>";
echo "<p>Quantidade disponível: $produto[quantidade]</p>";
echo "<p>Nome do produto: $produto[descricao]</p>";
?>

<?php if (!isset ($_SESSION ['id']) OR $_SESSION['nvl_acesso'] != 2){ ?>

<a class="waves-effect waves-light btn pink" href="../carrinho/addcarrinho.php?id=<?="$produto[id]"?>">Pronta entrega</a><br><br>
<a class="waves-effect waves-light btn modal-trigger pink" href="#modal1">Encomenda personalizada</a>
<br><br>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Encomenda personalizada</h4>
      <p>Precisamos de informações!</p>
      <p>Como quer que seja seu produto?</p>

      <div class="row">
            <div class="input-field col s6">
            <textarea class="materialize-textarea" id="descricao" type="text" class="validate" name="descricao" placeholder="Cabelo de cor marrom, roupa amarela, etc..." required></textarea>
            </div>
        </div>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat pink-text">Adicionar ao carrinho</a>
    </div>
  </div>
  <?php }?>
</main>
</body>

<?php include_once "../geral/rodape.php"; ?>