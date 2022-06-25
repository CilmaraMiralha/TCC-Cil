<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>

      <link type="text/css" rel="stylesheet" href="../css/estilo.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<nav class="nav-extended yellow lighten-3">

    <div class="nav-wrapper container">
      <a href="#"><img src="../imagens/DeCoracao.png" width="100"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="pink-text" href="#">Entrar</a></li>
        <li><a class="pink-text" href="#">Cadastre-se</a></li>
      </ul>

    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        
        <li class="tab"><a class="pink-text" href="../crudAdm/inicio-adm.php">Início</a></li>
        <li class="tab"><a class="pink-text" href="#test2">Loja</a></li>
        <li class="tab"><a class="pink-text" href="#test3">Sobre</a></li>
        <li class="tab"><a class="pink-text" href="#test4">Contato</a></li>
        
        <li> 
    

            <form action="../materialize/pesquisa.php">
            <div class="input-field">
            <label class="prefix" for="search"><i class="material-icons pink-text">search</i></label>
            <input id="search" type="search" class = "right" name="pesquisa">
         
            <i class="material-icons">close</i>
            </div>
             </form>
            </li>
        
      </ul>
      </div>
    </div>
  </nav>