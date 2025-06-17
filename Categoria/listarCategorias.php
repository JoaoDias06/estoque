<?php 
    include '../Pagina Principal/menu.php';
    include '../conexao.php';
    $pdo = conexao::conectar();
    $sql = "SELECT * FROM categoria";
    $listarCat = $pdo->query($sql);
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
    <title>CATEGORIAS</title>
</head>
<body class="grey lighten-5">
    <div class="container">
        <div>
            <h4 class="card-panel teal lighten-2 white-text align center">Categorias no Estoque
                <a class="btn-floating btn-medium waves-effect waves-light green hoverable" onclick="JavaScript:location.href='frminsCategoria.php'">
                <i class="material-icons">add</i></a>
            </h4>
        </div>
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th class="center align">NOME</th>
                    <th class="center align">DESCRIÇÃO</th>
                    <th class="center align">FUNÇÕES</th>
                </tr>

                <?php
                    $cont = 0;
                    foreach ($listarCat as $categoria) { 
                ?>
                <tr class="grey lighten-3">
                    <td><?php echo $categoria['ID_CATEGORIA'] ?></td>
                    <td class="center align"><?php echo $categoria['NOME_CATEGORIA'] ?></td>
                    <td class="center align"><?php echo $categoria['DESCRICAO_CATEGORIA'] ?></td>
                    <td class="center align">
                        <a class="btn-small waves-effect waves-light yellow darken-3"
                            onclick="JavaScript:location:href='frmedtCategoria.php?id=' + <?php echo $categoria['ID_CATEGORIA']?>">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn-small waves-effect waves-light red"
                            onclick="JavaScript:location:href='frmremCategoria.php?id=' + <?php echo $categoria['ID_CATEGORIA']?>">
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
        <h6 class="center align">O Número de Categorias no Estoque é de <?php echo $cont?></h6>
    </div>
</body>
</html>
