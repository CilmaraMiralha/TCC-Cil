<?php
session_start();
require_once "funcoes.php";
?>
    <title>Entrar na sua conta:</title>

<body>
       <main>
       <?php require "../materialize/cabecalho.php";?>
       <br>
       <div class="container">
<form action="entrar-cliente.php" method="POST">
       <div style="color: red;"><?= msg() ?></div>
       Email: <input type="email" name="email"><br><br>
       Senha: <input type="password" name="senha"><br><br>
       <input type= "submit" value="Enviar">
</form>

       <br><br>
       Não possui uma conta? <a href="cadastro-cliente.php">Cadastre-se</a>
       </div>
</main>
</body>
<?php require "../materialize/rodapé.php";?>