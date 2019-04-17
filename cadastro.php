<!--[FRONT-END] Página para cadastro de novo usuário-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
    <nav class="navbar">
        <span class="navbar-brand mb-0 h1">Cadastro</span>
    </nav>
    
<!--Formulário para cadastro-->
    <form action="config/inserir.php" class="cadastro" method="post">
            <div class="form-group">
              <label for="exampleInputNome1">Nome</label>
              <input type="text" class="form-control" id="exampleInputNome1" aria-describedby="nomeHelp" placeholder="Digite seu nome completo">
            </div>
            <div class="form-group">
              <label for="exampleInputCpf1">CPF</label>
              <input type="number" class="form-control" id="exampleInputCpf1" placeholder="Digite seu CPF">
            </div>
            <div class="form-group">
                    <label for="exampleInputEndereco1">Endereço</label>
                    <input type="text" class="form-control" id="exampleInputEndereco1" placeholder="Digite seu endereço (rua, nº, complem.">
            </div>
            <div class="form-group">
                    <label for="exampleInputEstado1">Estado</label>
                    <select class="form-control">
                            <option>Escolha seu Estado</option>
                    </select>
            </div>
            <div class="form-group">
                    <label for="exampleInputMunicipio1">Município</label>
                    <select class="form-control">
                            <option>Escolha seu município</option>
                    </select>
            </div>
            <div class="form-group">
                    <label for="exampleInputTelefone1">Telefone</label>
                    <input type="tel" class="form-control" id="exampleInputCpf1" placeholder="Digite seu telefone (c/ DDD, só números)">
            </div>
            <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                    <label for="senha">Senha</label>
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-secondary btn-sm btn-block" id="enviaCadastro" name="enviar">CADASTRAR-SE</button>
        </form>
</body>
</html>