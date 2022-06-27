<?php 
if(!isset($_SESSION)){
    session_start(); 
}



var_dump($_SESSION);

if(isset($_SESSION['id'])){
    if($_SESSION['nvl_acesso'] == 2){

    } 
} else {
    header("location:../inicio/inicio.php");
}



?>
