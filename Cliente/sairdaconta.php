<?php
if(!isset($_SESSION)){
session_start();

}

unset($_SESSION['id'], $_SESSION['nvl_acesso'], $_SESSION['nome']);
header("Location: ../inicio/inicio.php");
?>