<?php 
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['id'])){
    require_once "../headers/headerCliente.php";
} else {
    require_once "../headers/header.php";
}
?>

<title>Página inicial</title>

<body>

    <main>
           


  <div class="center"> 
<h1>Carrinho</h1>


</div>

    </main>
</body>

<?php include_once "../geral/rodape.php"; ?>