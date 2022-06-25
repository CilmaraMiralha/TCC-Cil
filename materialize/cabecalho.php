<?php 
if(!isset($_SESSION))
session_start();


var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<nav class="nav-extended yellow lighten-3">
<button href="#" data-target="slide-out" class = "sidenav-trigger float-left btn-flat" ><i class="material-icons">menu</i></button> 
    <div class="nav-wrapper container">

      <a href="#"><img src="../imagens/DeCoracao.png" width="100"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php if(!isset($_SESSION['id'])) { ?>
        <li><a class="pink-text" href="../crudCliente/entrar.php">Entrar</a></li>
        <li><a class="pink-text" href="../crudCliente/cadastrar.php">Cadastre-se</a></li>
        <?php }else{ ?>
          <li> <a class = "pink-text" href = "../crudCliente/sairdaconta.php">Sair</a></li>

          <?php } ?>
      </ul>

    <div class="nav-content">
      <ul class="tabs tabs-transparent">
     <div class="row">
      <div class="col offset-s3">
        <li class="tab"><a class="pink-text" href="../index/index.php">Início</a></li>
        <li class="tab"><a class="pink-text" href="../crudAdm/lista-produtos.php">Produtos</a></li>
        <li class="tab"><a class="pink-text" href="#test3">Sobre</a></li>
        <li class="tab"><a class="pink-text" href="#test4">Contato</a></li>
        
        <li> 
    

            <form action="../materialize/pesquisa.php">
            <div class="input-field">
            <input id="search" type="search" class = "right" name="pesquisa">
            <label class="label-icon" for="search"><i class="material-icons pink-text">search</i></label>
  
            <i class="material-icons">close</i>
            </div>
             </form>
            </li>
            </div>
            </div>
      </ul>
         
      </div>
    </div>
  </nav>

  <?php 
          
          if(isset($_SESSION['id'])){
            if($_SESSION['nvl_acesso'] == 2){  ?>
      <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    

  </ul>

  <?php }}?>