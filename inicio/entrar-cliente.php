<?php
session_start();

$email = $_POST ['email'];
$senha = $_POST ['senha'];


require_once "../conecta.php";
$sql="SELECT * FROM clientes WHERE email='$email'"; 

$resultado = mysqli_query($conexao,$sql);
$cliente = mysqli_fetch_assoc($resultado);

//var_dump($usuario);

if(password_verify($senha, $cliente['senha'])){
    $_SESSION['id'] = $cliente['id'];
    $_SESSION['nvl_acesso'] = $cliente['nivelAcesso'];
    $_SESSION['nome'] = $cliente['nome'];

    if ($_SESSION['nvl_acesso'] == 2){
        header("location:../Adm/inicio-Adm.php");
    } else if($_SESSION['nvl_acesso'] == 3){

        header("location:../Cliente/inicio-Cliente.php");
    }

} 

?>