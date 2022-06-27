<?php 
if(!isset($_SESSION)){
    session_start(); 
}

var_dump($_SESSION);

if(isset($_SESSION['id'])){
    header("location:inicio-Cliente.php");
} else {
    header("location:../inicio/inicio.php");
}
?>
