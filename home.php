<!--[BACK-END] Autenticando o usuário-->

<?php
    require_once("config/conexao.php");
    session_start();

//Verifica se o usuário está logado. Caso não esteja, redireciona para a tela de login. Caso esteja, a página inicial é exibida normalmente
    if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
        header('Location: index.php');
        exit();
    }
?>

<!--[FRONT-END] Página inicial do app-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <nav class="navbar">
        <span class="navbar-brand mb-0 h1">Home</span>
        <span><a href="config/logout.php" class="navbar-brand mb-0 h1">Sair</a></span>
    </nav>
<!--Imagem modelo de como a página inicial será-->
    <img src="img/home.jpg" class="homepage" alt="Home">
</body>
</html>