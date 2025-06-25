<?php
include '../Pagina Principal/menu.php';

if (isset($_GET['busca']))
        $busca = trim($_GET['busca']);
    else $busca = '';

include '../conexao.php';
$pdo = conexao::conectar();
$sql1 = "SELECT * FROM movimentos JOIN produto ON movimentos.PRODUTO_ID = produto.ID_PRODUTO";
if ($busca != '')
        $sql1 = $sql1 . " WHERE NOME_PRODUTO LIKE '%" . $busca . "%' ORDER BY NOME_PRODUTO;";
$listarmovimento = $pdo->query($sql1);
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
            <h4 class="card-panel teal lighten-2 white-text align center">Movimentos
                <a class="btn-floating btn-medium waves-effect waves-light green hoverable" onclick="Javascript:location.href='movimentacao.php'">
                    <i class="material-icons">add</i></a>
            </h4>
        </div>

        <div class="row ">
        <div class="input-field">
            <form action="listarMovimento.php" method="GET" id="frmbscmovimento" class="s12">
                
                    <label for="lblnome" class="teal-text">Informe o nome do Produto</label>
                    <input type="text" placeholder="Informe o nome do Produto a ser pesquisado" class="form-control s6" id="txtbusca" name="busca">
                    <button class="btn waves-effect waves-light col s2 teal darken-4" type="SUBMIT">
                        BUSCAR <i class="material-icons right">search</i>
                    </button>
                
            </form>
        </div>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th class="center align">PRODUTO</th>
                <th class="center align">TIPO</th>
                <th class="center align">DATA</th>
                <th class="center align">QUANTIDADE</th>
                <th class="center align">OBSERVAÇÃO</th>
            </tr>

            <?php
            $cont = 0;
            foreach ($listarmovimento as $movimento) {
            ?>
                <tr class="grey lighten-3">
                    <td><?php echo $movimento['ID'] ?></td>
                    <td class="center align"><?php echo $movimento['NOME_PRODUTO'] ?></td>
                    <td class="center align"><?php echo $movimento['TIPO'] ?></td>
                    <td class="center align"><?php echo $movimento['DATA'] ?></td>
                    <td class="center align"><?php echo $movimento['QUANTIDADE'] ?></td>
                    <td class="center align"><?php echo $movimento['OBSERVACAO'] ?></td>
                </tr>
            <?php
                $cont++;
            }
            ?>
        </table>
    </div>


    <h6 class="center align">O Número de Movimentações no Estoque é de <?php echo $cont ?></h6>
</body>
</html>
