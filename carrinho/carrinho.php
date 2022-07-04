<title>Página inicial</title>

<body>

    <main>
           
<?php 
if(isset($_SESSION['id'])){
    require_once "../headers/headerCliente.php";
} else {
    require_once "../headers/header.php";
}
?>

  <div class="center"> 
<h1>Carrinho</h1>


</div>

    </main>
</body>

<?php include_once "../geral/rodape.php"; ?>