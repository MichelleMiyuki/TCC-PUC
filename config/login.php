<!-- [BACK-END] Arquivo para realizar o login do usuário (Fazer autenticação)-->

<?php 
session_start();
require_once('conexao.php');

//Verifica se o  usuário preencheu os campos de email e senha para efetuar o login
if(empty($_POST['email']) || empty($_POST['senha'])) {
 header('Location: ../index.php');
 exit();
}

//Guarda o email e senha digitados pelo usuário em variaveis
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//Verifica se o email digitado está cadastrado no banco de dados
$query = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email'");
$row = mysqli_num_rows($query);


if($row > 0) {
//Se o email estiver cadastrado, verifica se a senha está correta
    $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'");
    $row = mysqli_num_rows($sql);
    
    if($row > 0) {
//Se a senha estiver correta, efetua o login, exibe mensagem de sucesso ao usuário e redireciona para a homepage
         session_start();
         $_SESSION['email'] = $_POST["email"];
         $_SESSION['senha'] = $_POST["senha"];
         echo  "<script>alert('Login realizado com sucesso!'); window.location='../home.php';</script>";
    }else{
//Se a senha estiver incorreta, mostra mensagem de erro para o usuário e volta para a página de login (index.php)
        echo  "<script>alert('Senha inválida!'); window.location='../index.php';</script>";
    }
} else {
//Se o email não estiver cadastrado, exibe mensagem de erro ao usuário e redireciona para a página de cadastro
     echo  "<script>alert('Email não cadastrado. Por favor, efetue o cadastro.'); window.location='../cadastro.php';</script>";
}

?>