<?php
    $usuario = trim($_POST['USUARIO']);
    $senha = trim($_POST['SENHA']);

   include 'conexao.php'; 
   $pdo = Conexao::conectar(); 
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "SELECT  * FROM usuarios where USUARIO LIKE ?"; 
   $query = $pdo->prepare($sql);
   $query->execute(array($usuario));
   $dados = $query->fetch(PDO::FETCH_ASSOC);  
   Conexao::desconectar(); 

   

   if (md5($senha)==$dados['SENHA']){
     //  echo "passei aqui"; 
       session_start();
       $_SESSION['USUARIO'] = $dados['USUARIO'];
       $_SESSION['NOME'] = $dados['NOME']; 
       header("location:menu.php"); 
   }
   else
    header("location:./index.php")

?> 