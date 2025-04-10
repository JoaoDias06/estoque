<?php 
    include 'conexao.php';
    $id = trim($_POST['id']);
    $nome = trim($_POST['txtnome']);

    if(!empty($nome)) {
        $pdo = conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE categoria SET NOME_CATEGORIA WHERE ID_CATEGORIA=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $Id));
    }

    header("location:listarProdutos.php");
?>