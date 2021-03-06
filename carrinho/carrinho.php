<?php 
include('../conecta.php');
if(!isset($_SESSION)){
    session_start();
}
?>

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
           

  <div class="center container"> 
<h1>Carrinho</h1>


        <?php 
        
    if(isset($_SESSION['carrinho']) and $_SESSION['carrinho']!= NULL){ ?>
    <div class="card-panel grey lighten-4">
<table>

<thead> <tr> <th>Foto</th> <th>Nome do produto</th> <th>Descrição</th> <th>Quantidade</th> <th>Preço</th> <th></th> </tr></thead>
<tbody>

<?php   foreach($_SESSION['carrinho'] as $key => $produto){ ?>
    
            <?php 
            echo "<tr><td><img src = '../imagens/$produto[foto]' width = '200'> </td> <td>". $produto['nomeproduto'] . "</td><td>";
            if (!isset($produto['observacao'])){
                echo "Não há observação";
            } else {
                echo $produto['observacao'];
            }
            echo "</td><td>Quantidade</td>";
                  echo "<td>" . $produto['preco'] . "</td> <td>"; ?> <a href = "removerProduto.php?id=<?=$produto['id']?>"><i class='material-icons pink-text'>delete</i></a></td></tr>
                  
          
    <?php } ?>

    </tbody></table>
    </div>
    <a href="../inicio/produtos.php" class="waves-effect waves-light btn pink left">Adicionar mais produtos</a>

<?php }else{ ?>
    <div class="card-panel grey lighten-4">
    Não há produtos no carrinho
    </div>
    <a href="../inicio/produtos.php" class="waves-effect waves-light btn pink left">Adicionar produtos</a>
    <?php } ?>


<a href="#" class="waves-effect waves-light btn pink right">Finalizar pedido</a> <br>
<br>
</div>
    </main>
</body>

<?php include_once "../geral/rodape.php"?>