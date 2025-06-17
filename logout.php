<?php 
    //abre a sessão
    session_start();

    //destroi as variaveis de sessão
    unset($_SESSION['USUARIO']);
    unset($_SESSION['SENHA']);

    //redireciona para index.php-login
    Header("location:index.php");
?>