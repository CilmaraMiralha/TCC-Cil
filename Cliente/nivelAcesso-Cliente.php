<?php 
if(!isset($_SESSION)){
    session_start(); 
}

var_dump($_SESSION);


if(isset($_SESSION['id'])){
    if($_SESSION['nvl_acesso'] != 3){
        header("location:../inicio/inicio.php");
    }
} else {
    
}
?>
