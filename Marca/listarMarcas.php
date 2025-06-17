<?php 
    include '../Pagina Principal/menu.php';
    include '../conexao.php';
    $pdo = conexao::conectar();
    $sql = "SELECT * FROM marca";
    $listarMarca = $pdo->query($sql);
    conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Marcas</title>
</head>
<body class="grey lighten-5">
    <div class="container white">
        <div>
            <h4 class="card-panel teal lighten-2 white-text align center">Marcas no Estoque
                <a class="btn-floating btn-medium waves-effect waves-light green hoverable" onclick="JavaScript:location:href='frminsMarca.php'">
                <i class="material-icons">add</i></a>
            </h4>
        </div>
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th class="center align">NOME</th>
                    <th class="center align">EMAIL</th>
                    <th class="center align">FUNÇÕES</th>
                </tr>

                <?php 
                    $cont = 0;
                    foreach ($listarMarca as $marca) {
                ?>
                <tr class="grey lighten-3">
                    <td><?php echo $marca['ID_MARCA'] ?></td>
                    <td class="center align"><?php echo $marca['NOME_MARCA'] ?></td>
                    <td class="center align"><?php echo $marca['EMAIL_MARCA'] ?></td>
                    <td class="center align">
                        <a class="btn-small waves-effect waves-light yellow darken-3"
                            onclick="JavaScript:location:href='frmedtMarca.php?id=' + <?php echo $marca['ID_MARCA']?>">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn-small waves-effect waves-light red"
                            onclick="JavaScript:location:href='frmremMarca.php?id=' + <?php echo $marca['ID_MARCA']?>">
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
        <h6 class="center align">O Número de Marcas no Estoque é de <?php echo $cont?></h6>
    </div>
</body>
</html>