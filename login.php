<?php
    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

   include 'conexao.php'; 
   $pdo = Conexao::conectar(); 
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "SELECT  * FROM usuarios where usuario LIKE ?;"; 
   $query = $pdo->prepare($sql);
   $query->execute(array($usuario));
   $dados = $query->fetch(PDO::FETCH_ASSOC);  
   Conexao::desconectar(); 

   if (md5($senha)==$dados['senha']){
       session_start();
       $_SESSION['usuario'] = $dados['usuario'];
       $_SESSION['nome'] = $dados['nome']; 
       header("location:./Pagina Principal/menu.php"); 
   }
   else
    header("location:index.php")

?> 