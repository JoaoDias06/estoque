<?php 
    $id = $_GET['id'];
    include 'conexao.php';
    $pdo = conexao::conectar();
    $sql = "SELECT * FROM produto JOIN categoria ON produto.CATEGORIA_PRODUTO = categoria.ID_CATEGORIA JOIN marca ON produto.MARCA_PRODUTO = marca.ID_MARCA WHERE ID_PRODUTO=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    $produto = $query->fetch(PDO::FETCH_ASSOC);
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
    <title>Remover Produto</title>
</head>
<body class="grey lighten-3">
    <div class="col">
        <h3 class="card-panel teal lighten-2 white-text align center">Remover Produto</h3>

        <div class="container">
            <h5 class="align center">Informações do Produto</h5>
            <br>
            <h6>ID: <?php echo $id?></h6>
            <h6>NOME: <?php echo $produto['NOME_PRODUTO']?></h6>
            <h6>CATEGORIA: <?php echo $produto['NOME_CATEGORIA']?></h6>
            <h6>MARCA: <?php echo $produto['NOME_MARCA']?></h6>
            <h6>PREÇO <?php echo $produto['PRECO_PRODUTO']?></h6>
            <h6>QUANTIDADE: <?php echo $produto['QUANTIDADE_PRODUTO']?></h6>
            
            <div class="row">
                <form action="remProduto.php" method="POST" id="frmremProduto">
                    <div class="input-field">
                        <br>
                        <button class="btn waves-effect waves-light red" type="submit" name="btnGravar">Deletar
                            <i class="material-icons right">delete</i>
                        </button>
                        <button class="btn waves-effect waves-light green" type="button" name="btnVoltar"
                                onclick="JavaScript:location.href='listarProdutos.php'">Voltar
                                <i class="material-icons right">arrow_back</i>    
                        </button>
                    </div>    
                </form>
            </div>
        </div>
    </div>
</body>
</html>