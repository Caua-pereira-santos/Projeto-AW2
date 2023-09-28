<!--Arquivo para fechar a sessão do User-->

<?php
    session_start();
    unset($_SESSION["usuario"]); //Fechar a sessão do usuario
    unset($_SESSION["nome"]); //Fecha a sessão do nome
    unset($_SESSION["tipo"]); //Fecha a sessão do tipo
    session_destroy();
    header("location: index.php"); //Redireciona para a página de login
    exit;