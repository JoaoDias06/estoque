<?php 
    include 'conexao.php';
    $id = trim($_POST['id']);

    if (!empty($id)) {
        $pdo = conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM produto WHERE id=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
    }

    header("location:listarProdutos.php");
?>