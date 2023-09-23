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
    <title>Sistema - AW2</title>
    <!-- Conexão com o Bootstrap - para deixar o formulário de login bonitinho -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Motomami</a>
        <?php
        print "Olá, " .$_SESSION["nome"];
        print "<a href='logout.php' class='btn btn-danger'> Sair</a>";
        ?>
    </div>

</nav>


<?php include 'tabela.php'; ?>


<footer class="bg-light text-black mt-5">
    <div class="container py-3">
    <p>&copy; 2023 Motomami</p>
        <?php
       print "<a href='contato.php'>Contato</a> | <a href='configusuario.php'>Perfil</a>";
        ?>
    </div>
</footer>



</body>
</html>
     