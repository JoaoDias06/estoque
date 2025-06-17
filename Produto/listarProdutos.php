<?php
include '../Pagina Principal/menu.php';
include '../conexao.php';
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>ESTOQUE</title>
</head>

<body class="grey lighten-5">
    <div class="container white">
        <div>
            <h4 class="card-panel teal lighten-2 white-text align center">Produtos no Estoque
                <a class="btn-floating btn-medium waves-effect waves-light green hoverable" onclick="Javascript:location.href='frminsProduto.php'">
                    <i class="material-icons">add</i></a>
            </h4>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th class="center align">NOME</th>
                <th class="center align">CATEGORIA</th>
                <th class="center align">MARCA</th>
                <th class="center align">PREÇO</th>
                <th class="center align">QUANTIDADE</th>
                <th class="center align">FUNÇÕES</th>
            </tr>

            <?php
            $cont = 0;
            foreach ($listarprodutos as $produto) {
            ?>
                <tr class="grey lighten-3">
                    <td><?php echo $produto['ID_PRODUTO'] ?></td>
                    <td class="center align"><?php echo $produto['NOME_PRODUTO'] ?></td>
                    <td class="center align"><?php echo $produto['NOME_CATEGORIA'] ?></td>
                    <td class="center align"><?php echo $produto['NOME_MARCA'] ?></td>
                    <td class="center align"><?php echo $produto['PRECO_PRODUTO'] ?></td>
                    <td class="center align"><?php echo $produto['QUANTIDADE_PRODUTO'] ?></td>
                    <td class="center align">
                        <a class="btn-small waves-effect waves-light yellow darken-3"
                            onclick="JavaScript:location:href='frmedtProduto.php?id=' + <?php echo $produto['ID_PRODUTO'] ?>">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn-small waves-effect waves-light red"
                            onclick="JavaScript:location:href='frmremProduto.php?id=' + <?php echo $produto['ID_PRODUTO'] ?>">
                            <i class="material-icons">delete</i>
                        </a>
                    </td>
                </tr>
            <?php
                $cont++;
            }
            ?>
        </table>
    </div>


    <h6 class="center align">O Número de Itens no Estoque é de <?php echo $cont ?></h6>
</body>
</html>