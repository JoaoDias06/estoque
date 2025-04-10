<?php 
    include 'conexao.php';
    $nome = trim($_POST['txtnome']);

    if(!empty($nome)) {
        $pdo = conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO categoria (NOME_CATEGORIA) VALUES (?)";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome));
    }

    header("location:listarProdutos.php");
?>