<?php
include "../conecta.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `produtos` WHERE id='$id'";
$resultado = mysqli_query($conexao,$sql);
$produto = mysqli_fetch_assoc($resultado);
?>

<title><?=$produto['nomeproduto']?></title>

<style type="text/css">
 
 /* label focus color */
 .input-field input[type=text]:focus + label {
   color: #e91e63 !important;
 }
 /* label underline focus color */
 .input-field input[type=text]:focus {
   border-bottom: 1px solid #e91e63 !important;
   box-shadow: 0 1px 0 0 #e91e63 !important;
 }
 
   /* label focus color */
   .input-field textarea[type=text]:focus + label {
   color: #e91e63 !important;
 }
 /* label underline focus color */
 .input-field textarea[type=text]:focus {
   border-bottom: 1px solid #e91e63 !important;
   box-shadow: 0 1px 0 0 #e91e63 !important;
 }

    /* label focus color */
    .input-field textarea[type=file]:focus + label {
   color: #e91e63 !important;
 }
 /* label underline focus color */
 .input-field textarea[type=file]:focus {
   border-bottom: 1px solid #e91e63 !important;
   box-shadow: 0 1px 0 0 #e91e63 !important;
 }

</style>

<body>
<main>
<?php require_once "../headers/headerAdm.php";?>

<div class="container">

    <form action="edita-produto.php" method="post" enctype="multipart/form-data">

        <h1>Alterar produto:</h1>

        <div class="card-panel yellow lighten-5">

        <input type="hidden" name = "id" value = "<?= $produto['id'] ?>">

        <div class="row">
          <div class="input-field col s6">
            <input id="nomeproduto" type="text" name="nomeproduto" value = <?="$produto[nomeproduto]"?> required>
            <label for="nomeproduto">Nome do produto</label>
          </div>
        </div>
       
        <div class="row">
          <div class="input-field col s6">
            <input id="preco" type="text" name="preco" value = <?="$produto[preco]"?> required>
            <label for="preco">Preço</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input id="quantidade" type="text" name="quantidade"  value = <?="$produto[quantidade]"?> required>
            <label for="quantidade">Quantidade</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <textarea id="descricao" type="text" class="materialize-textarea" name="descricao" required><?="$produto[descricao]"?></textarea>
            <label for="descricao">Descrição</label>
          </div>
        </div>

        <div class="file-field input-field">
        <div class="btn pink">
       <span><i class = "material-icons">add_a_photo</i></span>
       <input id = "imagem" type="file" name="imagem">
         </div>
         <div class="file-path-wrapper">
       <label for = "imagem1">Escolha uma foto</label><input id = "imagem1" class="file-path" type="text">
        </div>
        </div>
       
        <button class="btn waves-effect waves-light pink" type="submit" value="Cadastrar">Salvar alterações</button>

        </div>
    </form>
    </div>
</main>        
</body>

<?php include_once "../geral/rodape.php";?>
