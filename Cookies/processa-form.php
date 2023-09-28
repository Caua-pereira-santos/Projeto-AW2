<?php
// Verifica se os campos foram preenchidos
if(isset($_POST['nome'], $_POST['telefone'], $_POST['email'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    // Verifica se o usuário aceitou a criação de cookies
    if(isset($_POST['aceitaCookies'])) {
        setcookie("usuario_nome", $nome, time() + 3600, "/");  // Cookie expira em 1 hora
        setcookie("usuario_telefone", $telefone, time() + 3600, "/");
        setcookie("usuario_email", $email, time() + 3600, "/");

        // Redireciona para a página que mostra os cookies
        header("Location: \Cookies\mostra-cookies.php");
        exit;
    } else {
        // Redireciona para a página de agradecimento
        header("Location: \Cookies\agradecimento.php");
        exit;
    }
}
?>

