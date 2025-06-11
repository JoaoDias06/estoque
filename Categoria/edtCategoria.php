<?php 
    include '../conexao.php';
    $id = trim($_POST['id']);
    $nome = trim($_POST['txtnome']);
    $descricao = trim($_POST['txtdescricao']);

    if(!empty($nome) && !empty($descricao)) {
        $pdo = conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE categoria SET NOME_CATEGORIA=?, DESCRICAO_CATEGORIA=? WHERE ID_CATEGORIA=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $descricao, $id));
    }

    header("location:listarCategorias.php");
?>