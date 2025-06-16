<?php 
    include '../conexao.php';
    $id = trim($_POST['id']);

    if (!empty($id)) {
        $pdo = conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM marca WHERE ID_MARCA=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
    }

    header("location:listarMarcas.php");
?>