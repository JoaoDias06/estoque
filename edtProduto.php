<?php 
    include 'conexao.php';
    $id = trim($_POST['id']);
    $nome = trim($_POST['txtnome']);
    $categoria = trim($_POST['txtcategoria']);
    $marca = trim($_POST['txtmarca']);
    $preco = trim($_POST['txtpreco']);
    $quantidade = trim($_POST['txtquantidade']);

    if(!empty($nome) && !empty($categoria) && !empty($marca) && !empty($preco) && !empty($quantidade)) {
        $pdo = conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE produto set NOME_PRODUTO=?, CATEGORIA_PRODUTO=?, MARCA_PRODUTO=?, PRECO_PRODUTO=?, QUANTIDADE_PRODUTO=? WHERE ID_PRODUTO=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $categoria, $marca, $preco, $quantidade, $id));
    }

    header("location:listarProdutos.php");
?>