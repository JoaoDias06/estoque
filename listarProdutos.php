<?php 
    include 'conexao.php';
    $pdo = conexao::conectar();
    $sql1 = "SELECT * FROM produto JOIN categoria ON produto.CATEGORIA_PRODUTO = categoria.ID_CATEGORIA JOIN marca ON produto.MARCA_PRODUTO = marca.ID_MARCA";
    $listarprodutos = $pdo->query($sql1);
    conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>ESTOQUE</title>
</head>
<body>
    <div class="col s12">
        <h4 class="card-panel teal lighten-2 white-text align center">Produtos no Estoque  
            <a class="btn-floating btn-medium waves-effect waves-light green hoverable" onclick="Javascript:location.href='frminsProduto.php'">
            <i class="material-icons">add</i></a>
        </h4>
        
        <div class="container">
            <table>
                <tr>
                    <th>ID</th>
                    <th class="center align">NOME</th>
                    <th class="center align">CATEGORIA</th>
                    <th class="center align">MARCA</th>
                    <th class="center align">PREÇO</th>
                    <th class="center align">QUANTIDADE</th>
                </tr>

                <?php 
                    $cont = 0;
                    foreach ($listarprodutos as $produto) {
                ?>
                <tr class="grey lighten-3">
                    <td><?php echo $produto['ID_PRODUTO']?></td>
                    <td class="center align"><?php echo $produto['NOME_PRODUTO']?></td>
                    <td class="center align"><?php echo $produto['NOME_CATEGORIA']?></td>
                    <td class="center align"><?php echo $produto['NOME_MARCA']?></td>
                    <td class="center align"><?php echo $produto['PRECO_PRODUTO']?></td>
                    <td class="center align"><?php echo $produto['QUANTIDADE_PRODUTO']?></td>
                </tr>
                <?php 
                    $cont++;
                    }
                ?>
            </table>
        </div>
        
        
        <h6 class="center align">O Número de Itens no Estoque é de <?php echo $cont?></h6>
    </div>
</body>
</html>
