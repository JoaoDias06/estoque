<?php 
    include '../conexao.php';
    $id = trim($_POST['id']);
    $nome = trim($_POST['txtnome']);
    $email = trim($_POST['txtemail']);

    if(!empty($nome) && !empty($email)) {
        $pdo = conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE marca SET NOME_MARCA=?, EMAIL_MARCA=? WHERE ID_MARCA=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $id));
    }

    header("location:listarMarcas.php");
?>