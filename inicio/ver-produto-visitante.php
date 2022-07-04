<?php
require_once "../conecta.php";
$id = $_GET['id'];
$sql= "SELECT * FROM produtos WHERE `id` = $id";
$resultado = mysqli_query($conexao, $sql);
$produto = mysqli_fetch_assoc($resultado);
?>

<title><?=$produto['nomeproduto']?></title>

<?php require "../headers/header.php";?>

<body>
<main class="container">
    <br>
<?php
echo "<img src = '../imagens/$produto[foto]' width = '200'>";
echo "<p>Nome do produto: $produto[nomeproduto]</p>";
echo "<p>Preço: R$$produto[preco]</p>";
echo "<p>Quantidade disponível: $produto[quantidade]</p>";
echo "<p>Nome do produto: $produto[descricao]</p>";
?>
<a class="waves-effect waves-light btn pink" href="../carrinho/addcarrinho.php?id=<?="$produto[id]"?>">Pronta entrega</a><br><br>
<a class="waves-effect waves-light btn pink">Encomendar</a>
</main>
</body>

<?php include_once "../geral/rodape.php"; ?>