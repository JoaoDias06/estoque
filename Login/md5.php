<?php //md5.php
    echo "joao2006: " . md5("joao2006");
    echo "</br> </br>";
    echo "Imesa@2025: " . md5("Imesa@2025");
    echo "</br> </br>";
    echo "Joao Pedro Dias: " . md5("Joao Pedro Dias");
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
?>