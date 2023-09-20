<?php
// Verifica se os cookies foram definidos
if(isset($_COOKIE['usuario_nome'], $_COOKIE['usuario_telefone'], $_COOKIE['usuario_email'])) {
    $nome = $_COOKIE['usuario_nome'];
    $telefone = $_COOKIE['usuario_telefone'];
    $email = $_COOKIE['usuario_email'];
} else {
    $nome = $telefone = $email = "Não definido";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações dos Cookies</title>
</head>
<body>
<h2>Informações armazenadas nos cookies:</h2>
<p><strong>Nome:</strong> <?php echo $nome; ?></p>
<p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>
</body>
</html>
