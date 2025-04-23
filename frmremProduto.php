<?php 
    include 'conexao.php';
    $pdo = conexao::conectar();
    $id = $_GET['id'];
    $sql = "SELECT * FROM produto WHERE ID_PRODUTO=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    $produto = $query->fetch(PDO::FETCH_ASSOC);
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
            <h6>ID: <?php $produto['ID_PRODUTO'] ?></h6> 
        </div>
    </div>
</body>
</html>