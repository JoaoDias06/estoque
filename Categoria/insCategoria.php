<?php 
    include '../conexao.php';
    $nome = trim($_POST['txtnome']);
    $descricao = trim($_POST['txtdescricao']);

    if(!empty($nome) && !empty($descricao)) {
        $pdo = conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO categoria (NOME_CATEGORIA, DESCRICAO_CATEGORIA) VALUES (?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $descricao));
    }

    header("location:listarCategorias.php");
?>
