<?php 
    include 'conexao.php';
    $pdo = conexao::conectar();
    $sql = "SELECT * FROM produto";
    $listarprodutos = $pdo->query($sql);
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
        <h4 class="card-panel teal lighten-2 white-text align center">Produtos no Estoque</h4>        
        
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
                        <td><?php echo $produto['ID']?></td>
                        <td class="center align"><?php echo $produto['NOME']?></td>
                        <td class="center align"><?php echo $produto['CATEGORIA']?></td>
                        <td class="center align"><?php echo $produto['MARCA']?></td>
                        <td class="center align"><?php echo $produto['PRECO']?></td>
                        <td class="center align"><?php echo $produto['QUANTIDADE']?></td>
                    </tr>
                    <?php 
                        $cont++;
                        }
                    ?>
            </table>
        </div>
    </div>
</body>
</html>