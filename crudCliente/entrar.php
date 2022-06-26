<?php
session_start();
require_once "funcoes.php";
?>
    <title>Entrar na sua conta</title>

    <style type="text/css">
 
  /* label focus color */
  .input-field input[type=email]:focus + label {
    color: #e91e63 !important;
  }
  /* label underline focus color */
  .input-field input[type=email]:focus {
    border-bottom: 1px solid #e91e63 !important;
    box-shadow: 0 1px 0 0 #e91e63 !important;
  }
  /* label focus color */
  .input-field input[type=password]:focus + label {
    color: #e91e63 !important;
  }
  /* label underline focus color */
  .input-field input[type=password]:focus {
    border-bottom: 1px solid #e91e63 !important;
    box-shadow: 0 1px 0 0 #e91e63 !important;
  }

</style>

<body>
       <main>
       <?php require "../materialize/cabecalho.php";?>
       <br>
       <div class="container">
              <h3>Entrar:</h3>
<form action="entrar-cliente.php" method="POST">

       <div class="card-panel yellow lighten-5 container">
       <div style="color: red;"><?= msg() ?></div>

       <div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">E-mail</label>
         <span class="helper-text" data-error="E-mail incorreto">exemplo@gmail.com</span>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s6">
          <input id="senha" type="password" class="validate" name="senha" required>
          <label for="senha">Senha</label>
        </div>
      </div>
       

       <button class="btn waves-effect waves-light pink" type="submit" name="action">Entrar</button>
</div>
</form>

       <p>Não possui uma conta? <a href="cadastrar.php" class="pink-text" style="text-decoration:underline"> Cadastre-se</a></p>
       </div>
</main>
</body>
<?php require "../materialize/rodapé.php";?>