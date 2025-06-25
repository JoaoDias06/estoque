<?php 
    //abre a sessão
    session_start();

    //destroi as variaveis de sessão
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);

    //redireciona para index.php-login
    Header("location:index.php");
?>