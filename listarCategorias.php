<?php 
    include 'conexao.php';
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>CATEGORIAS</title>
</head>
<body class="grey lighten-5">
    <div>
        <h4 class="card-panel teal lighten-2 white-text center align">Categorias do Estoque</h4>
    </div>
    
    <div class="container">
        <ul id="slide-out" class="sidenav valign-center">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="imagens/industria.png" width="300px" height="180px">
                    </div>
                    <a href="#user"><img class="circle" src="imagens/icone.png"></a>
                    <a href="#name"><span class="white-text name">João Dias</span></a>
                    <a href="#email"><span class="white-text email">joaopedrodias0601@gmail.com</span></a>
                </div>
            </li>
            <li><div class="divider"></div></li>
            <li><a href="frminsCategoria.php"><i class="material-icons">add</i>ADICIONAR CATEGORIA</a></li>
            <li><a href="frminsMarca.php"><i class="material-icons">add</i>ADICIONAR MARCA</a></li>
            <li><div class="divider"></div></li>
            <li><a href="listarProdutos.php"><i class="material-icons">list</i>PRODUTOS</a></li>
            <li><a href="listarCategorias.php"><i class="material-icons">list</i>CATEGORIAS</a></li>
            <li><a href="listarMarcas.php"><i class="material-icons">list</i>MARCAS</a></li>
            <li><div class="divider"></div></li>
        </ul>
        <a href="listarCategorias.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons teal-text">menu</i></a>

        <table>
            <tr>
                <th>ID</th>
                <th class="center align">NOME</th>
                <th class="center align">FUNÇÕES</th>
            </tr>

            <?php 
                $cont = 0;
                foreach ($listarCat as $categoria) {
            ?>
            <tr class="grey lighten-2">
                <th><?php echo $categoria['ID_CATEGORIA']?></th>
                <th class="center align"><?php echo $categoria['NOME_CATEGORIA']?></th>
                <th class="center align">
                    <a class="btn-small waves-effect waves-light yellow darken-3" 
                        onclick="JavaScript:location:href='frmedtProduto.php?id=' + <?php echo $produto['ID_PRODUTO']?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-small waves-effect waves-light red" 
                        onclick="JavaScript:location:href='frmremProduto.php?id=' + <?php echo $produto['ID_PRODUTO']?>">
                        <i class="material-icons">delete</i>
                    </a>
                </th>
            </tr>
            <?php 
                $cont++;
                };
            ?>
        </table>
    </div>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

    $(document).ready(function(){
        $('.sidenav').sidenav();
  });
</script>