<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <!-- Conexão com o Bootstrap - para deixar o formulário de login bonitinho -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <a href="/dashboard.php" class="navbar-brand">Motomami</a>
        <?php
        print "Olá, " .$_SESSION["nome"];
        print "<a href='logout.php' class='btn btn-danger'> Sair</a>";
        ?>
    </div>

</nav>



<div class="container mt-5">
    <h2>Formulário de Contato</h2>

    <form action="\cookies\processa-form.php" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" pattern="\(\d{2}\) \d{4,5}-\d{4}" required>
            <small class="form-text text-muted">Formato: (12) 98765-4321</small>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="aceitaCookies" name="aceitaCookies">
            <label class="form-check-label" for="aceitaCookies">Aceitar a criação de cookies?</label>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer class="bg-light text-black mt-5">
    <div class="container py-3">
    <p>&copy; 2023 Motomami</p>
        <?php
       print "<a href='\Cookies\contato.php'>Contato</a> | <a href='\Perfil\configusuario.php'>Perfil</a>";
        ?>
    </div>
</footer>

<!--Contéudo da página inicial aqui-->

</body>
</html>
     