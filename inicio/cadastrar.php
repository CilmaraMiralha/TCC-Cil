<?php
session_start();
require_once "../geral/funcoes.php";
?>

    <title>Cadastro</title>

    
    <style type="text/css">
 
  /* label focus color */
  .input-field input[type=text]:focus + label {
    color: #e91e63 !important;
  }
  /* label underline focus color */
  .input-field input[type=text]:focus {
    border-bottom: 1px solid #e91e63 !important;
    box-shadow: 0 1px 0 0 #e91e63 !important;
  }
  
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
        <?php require_once "../headers/header.php";?>
        <div class="container">

        <h1>Cadastro:</h1>

    <form action="cadastro-cliente.php" method="post">
        
        <div class="card-panel yellow lighten-5 container">
        
        <div class="row">
            <div class="input-field col s6">
                <input id="nome" type="text" class="validate" name="nome" required>
                <label for="nome">Nome</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
            <input id="sobrenome" type="text" class="validate" name="sobrenome" required>
                <label for="sobrenome">Sobrenome</label>
            </div>
        </div>

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

        <div class="row">
            <div class="input-field col s6">
            <input id="confsenha" type="password" class="validate" name="confsenha" required>
                <label for="confsenha">Confirmar senha</label>
            </div>
        </div>

         <!-- Fazer a parte de confirmar senha
        e de indicar se a senha está forte ou n -->
<br>
        <button class="btn waves-effect waves-light pink" type="submit" name="action">Cadastrar</button>

    </div>
    </form>

        <p>Já possui uma conta? <a href="entrar.php" class="pink-text" style="text-decoration:underline">Entrar</a></p>
        </div>

</main>
</body>

<?php require "../geral/rodape.php";?>
