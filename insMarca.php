<?php 
    include 'conexao.php';
    $nome = trim($_POST['txtnome']);    
    $email = trim($_POST['txtemail']);

    if (!empty($nome) && !empty($email)) {
        $pdo = conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO marca (NOME_MARCA, EMAIL_MARCA) VALUES (?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email));
    }

    header("location:listarProdutos.php");
?>