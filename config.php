<!--Código para configuração do BDD
nesse caso nosso bdd está em localhost, não possui senha de acesso e se chama sislogin-->

<?php
    define('HOST', 'localhost'); //Servidor
    define('USER', 'root'); //Usuário
    define('PASS', ''); //Senha
    define('BASE', 'sislogin'); //Base de dados

    $conn = new MySQLi(HOST, USER, PASS, BASE); //Variável de conexão