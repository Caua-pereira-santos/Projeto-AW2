<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
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
<br>
<br>

<form action="save_image.php" method="post" enctype="multipart/form-data">
        Selecione a imagem de perfil:
        <input type="file" name="profileImage" id="profileImage">
        <input type="submit" value="Upload Image" name="submit">
    </form>



<footer class="bg-light text-black mt-5">
    <div class="container py-3">
    <p>&copy; 2023 Motomami</p>
        <?php
       print "<a href='\Cookies\contato.php'>Contato</a> | <a href='\Perfil\configusuario.php'>Perfil</a>";
        ?>
    </div>
</footer>



</body>
</html>
     