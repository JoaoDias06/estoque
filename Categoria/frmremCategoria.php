<?php 
    $id = $_GET['id'];
    include '../conexao.php';
    $pdo = conexao::conectar();
    $sql = "SELECT * FROM categoria WHERE ID_CATEGORIA=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    $categoria = $query->fetch(PDO::FETCH_ASSOC);
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
    <title>Remover Catagoria</title>
</head>
<body class="grey lighten-5">
    <div class="container white">
        <div>
            <h3 class="card-panel teal lighten-2 white-text align center">Remover Categoria</h3>
        </div>
        <div>
            <h5 class="align center">Informações da Categoria</h5>
            <br>
            <h6>ID: <?php echo $id?></h6>
            <h6>NOME: <?php echo $categoria['NOME_CATEGORIA']?></h6>
            <h6>DESCRIÇÃO: <?php echo $categoria['DESCRICAO_CATEGORIA']?></h6>
            <div class="row">
                <form action="remCategoria.php" method="POST" id="frmremCategoria">
                    <div class="input-field">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"></input>
                        <br>
                        <button class="btn waves-effect waves-light red" type="submit" name="btnGravar">Deletar
                            <i class="material-icons right">delete</i>
                        </button>
                        <button class="btn waves-effect waves-light green" type="button" name="btnVoltar"
                                onclick="JavaScript:location.href='listarCategorias.php'">Voltar
                                <i class="material-icons right">arrow_back</i>    
                        </button>
                    </div>    
                </form>
            </div>
        </div>
    </div>
</body>
</html>