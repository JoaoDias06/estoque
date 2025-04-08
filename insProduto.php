<?php 
    include 'conexao.php';
    $nome = trim($_POST['txtnome']);
    $categoria = trim($_POST['txtcategoria']);
    $marca = trim($_POST['txtmarca']);
    $preco = trim($_POST['txtpreco']);
    $quantidade = trim($_POST['txtquantidade']);

    if(!empty($nome) && !empty($categoria) && !empty($preco) && !empty($quantidade)) {
        $pdo = conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO produto (nome, categoria, marca, preco, quantidade) VALUES (?, ?, ?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $categoria, $marca, $preco, $quantidade));
    }
    
    header("location:listarProdutos.php");
?>