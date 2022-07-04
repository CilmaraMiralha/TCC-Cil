<?php
if(!isset($_SESSION)){
    session_start(); 
}

function verificandoADM(){
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION["id"]) or $_SESSION['nvl_acesso'] != 2){
        header("location:../inicio/inicio.php");
    }
}

function verificandoCliente(){

  if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION["id"]) OR $_SESSION['nvl_acesso'] != 3){
     header("location:../inicio/inicio.php");
    }
}

function verificandoVisitante(){

    if(!isset($_SESSION)){
          session_start();
      }
      if(isset($_SESSION["id"]) and $_SESSION['nvl_acesso'] == 3){
            header("location: ../Cliente/inicio-Cliente.php");
      }else if(isset($_SESSION["id"]) and $_SESSION['nvl_acesso'] == 2){
        header("location: ../Adm/inicio-Adm.php");
      }
  }


function mensagem(){
    if(isset($_SESSION['mensagem'])){
        $mensagem = $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
        return $mensagem;
    }
}

function verificacaoHeader(){
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['id']) and $_SESSION['nvl_acesso'] == 3){
        require_once "../headers/headerCliente.php";
    } else if (isset($_SESSION['id']) and $_SESSION['nvl_acesso'] == 2){
        require_once "../headers/headerAdm.php";
    } else if (!isset($_SESSION['id'])){
        require_once "../headers/header.php";
    }
}

function verProdutos(){
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['id']) == 3){
        require_once "../Cliente/ver-produtos-cliente.php";
    } else if (isset($_SESSION['id']) == 2){
        require_once "../Adm/ver-produtos.php";
    } else {
        require_once "../inicio/ver-produto-visitante.php";
    }
}

?>
