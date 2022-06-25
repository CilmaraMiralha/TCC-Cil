<?php
function msg(){
    if(isset($_SESSION['mensagem'])){
        $msg = $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
        return $msg;
    }
}
?>