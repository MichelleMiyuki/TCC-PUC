<!-- [BACK-END] Arquivo para gravar os dados de um novo usuário no banco de dados (realizar novo cadastro)-->

<?php 
include('conexao.php');

//Verifica se o  usuário preencheu os campos de email e senha para efetuar o cadastro
if(empty($_POST['email']) || empty($_POST['senha'])) {
    echo "Você precisa preencher os campos de email e senha!";
} 

//Guarda o email e senha digitados pelo usuario em variáveis
$email = $_POST['email'];
$senha = $_POST['senha'];

//Envia o email e senha informados pelo usuário para o banco de dados
$query = mysqli_query($conexao, "INSERT INTO `usuario` (`id`,`email`, `senha`) VALUES (NULL,'$email', '$senha')") or die('Não foi possível incluir');

//Exibe mensagem de sucesso ao usuário e redireciona para a página de login (index.php)
echo "<script>alert('Usuário inserido com sucesso!'); window.location='../index.php'</script>";
?>