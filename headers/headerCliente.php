<?php 
require_once "../geral/funcoes.php";
verificandoCliente();
//var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<style>
 body{
    display: flex;
    min-height: 150vh;
    flex-direction: column;
}
main{
    flex: 1 0 auto;
}
</style>

</head>

<nav class="nav-extended yellow lighten-3">

    <div class="nav-wrapper container">

      <a href="#"><img src="../imagens/DeCoracao.png" width="100"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
    
          <li><a class='dropdown-trigger coverTrigger pink-text' href='#' data-target='dropdown'> <i class="material-icons right">arrow_drop_down</i> <?= $_SESSION['nome']; ?></a>

          <ul id='dropdown' class='dropdown-content'>
           <li><a href="#!" class="pink-text">Meus pedidos</a></li>
           <li class="divider" tabindex="-1"></li>
           <li><a href="#!" class="pink-text">Ver conta</a></li>
           <li class="divider" tabindex="-1"></li>
           <li><a class = "pink-text" href = "../Cliente/sairdaconta.php">Sair</a></li>
         </ul></li>

         <li><a class="pink-text" href = "../carrinho/carrinho.php"><i class="material-icons">shopping_cart</i></a></li>
      </ul>

    <div class="nav-content">
      <ul class="tabs tabs-transparent">
     <div class="row">
      <div class="col offset-s3">
        <li class="tab"><a class="pink-text" href="../Cliente/inicio-Cliente.php">Início</a></li>
        <li class="tab"><a class="pink-text" href="../Cliente/produto-tela-cliente.php">Produtos</a></li>
        <li class="tab"><a class="pink-text" href="#">Sobre</a></li>
        <li class="tab"><a class="pink-text" href="#">Contato</a></li>
        
        <li> 

            <form action="../geral/pesquisa.php">
            <div class="input-field">
            <input id="search" type="search" class = "right" name="pesquisa">
            <label class="label-icon" for="search"><i class="material-icons pink-text">search</i></label>
  
            <i class="material-icons">close</i>
            </div>
             </form>
            </li>
            </div>
            
      </ul>
         
      </div>
    </div>
  </nav>

