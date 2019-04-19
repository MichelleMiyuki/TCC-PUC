<?php
// PERMITINDO QUE QUALQUER UM ACESSO O SERVIDOR
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    header('Content-Type: text/plain');
    die();
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// TRATANDO OS DADOS QUE O FRON ENVIA
$data = json_decode(file_get_contents("php://input"));

require_once('conexao.php');


$email = $data->email;
$senha = $data->senha;
$nome = $data->nome;
$cpf = $data->cpf;
$endereco = $data->endereco;
$estado = $data->estado;
$telefone = $data->telefone;


//Verifica se o  usuário preencheu os campos de email e senha para efetuar o cadastro
if(empty($email) || empty($senha)) {
  http_response_code(400);
  $data[mensagem] = "Você precisa preencher os campos de email e senha!";
  echo json_encode($data);
  // echo json_encode(array("mensagem" => "Você precisa preencher os campos de email e senha!"));
  exit();
}

//Envia o email e senha informados pelo usuário para o banco de dados
$query = mysqli_query($conexao, "INSERT INTO `usuario` (`id`,`email`, `senha`, `nome`,`cpf`,`endereco`,`estado`,`telefone`) VALUES (NULL,'$email', '$senha', '$nome', '$cpf', '$endereco', '$estado', '$telefone')") or die('Não foi possível incluir');
//Exibe mensagem de sucesso ao usuário e redireciona para a página de login (index.php)
http_response_code(200);
echo json_encode(array("mensagem" => "Usuário inserido com sucesso!"));
?>