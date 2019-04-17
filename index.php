<!--[FRONT-END] Página de login do usuário-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <nav class="navbar">
        <span class="navbar-brand mb-0 h1">Login</span>
    </nav>
    
<!--Formulário para o usuário efetuar login-->
    <form class="login" action="config/login.php" method="POST">
        <div class="form-group">
          <label>Email</label>
          <input name="email" type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" placeholder="Digite seu email" required autofocus>
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input name="senha" type="password" class="form-control" id="loginSenha" placeholder="Digite sua senha" required autofocus>
        </div>
        <button type="submit" class="btn btn-secondary btn-sm btn-block" id="btnLogin">LOGIN</button>
    </form>
</body>
</html>