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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>ESTOQUE</title>
</head>
<body>
    <div class="col s12">
        <h4 class="card-panel teal lighten-2 white-text align center">Produtos no Estoque  
            <a class="btn-floating btn-medium waves-effect waves-light green hoverable" onclick="Javascript:location.href='frminsProduto.php'">
            <i class="material-icons">add</i></a>
        </h4>
        
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
                <li><a href="frminsCategoria.php"><i class="material-icons">add</i>ADICIONAR CATEGORIA</a></li>
                <li><a href="frminsMarca.php"><i class="material-icons">add</i>ADICIONAR MARCA</a></li>
                <li><div class="divider"></div></li>
            </ul>
            <a href="listarProdutos.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons teal-text">menu</i></a>

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