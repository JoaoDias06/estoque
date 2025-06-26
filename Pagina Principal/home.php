<?php 
    include '../Pagina Principal/menu.php';
    include '../conexao.php';
    $pdo = conexao::conectar();
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
    <title>Home</title>
</head>
<body class="grey lighten-5">
    <div class="container white">
        <div class="center align">
            <h4 class="card-panel teal lighten-2 white-text align center">Pagina Principal</h4>
            <img src="../imagens/home.png" width="800px" height="500px">
        </div>
    </div>
</body>
</html>