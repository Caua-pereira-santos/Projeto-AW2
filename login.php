<!--Arquivo onde ocorre a validação de acesso-->

<!--Para iniciar a sessão algumas informações vão ser verificadas a partir do $_POST-->
<?php
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
        print "<script>location.href='index.php';</script>"; //Se algo der errado ele é redirecionado novamente para o index
    }

   //Inclusão do arquivo config.php que conecta ao banco de dados
    include('config.php');

    //Recebem as informações que o user digitou
    $usuario = $_POST["usuario"];
    $senha   = $_POST["senha"];

    //Código SQL = Seleciona todos da tabela usuarios e verifica se o user e senha digitada existe
    $sql = "SELECT * FROM usuarios
    WHERE usuario = '{$usuario}'
    AND senha = '{$senha}'";

    //Executa a conexão com o banco
    $res = $conn->query($sql) or die($conn->error);
    
    //Transforma o resultado em uma array de objetos caso precise
    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    //Faz a verificação do resultado...se qtd for maior que 0 é pq achou o user, e ele é direcionado para a página principal
    //Caso não ache aparece uma mensagem de erro
    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["tipo"] = $row->tipo;
        print "<script>location.href='dashboard.php';</script>";

    }else{
        print "<script>alert('Usuário e/pu senha incorreta(s)');</script>";
        print "<script>location.href='index.php';</script";
    }