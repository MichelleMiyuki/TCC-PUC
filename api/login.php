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

//pega os dados que o cliente enviou
$data = json_decode(file_get_contents("php://input"));

session_start();
require_once('conexao.php');

//Guarda o email e senha digitados pelo usuário em variaveis
$email = $data->email;
$senha = $data->senha;

//Verifica se o  usuário preencheu os campos de email e senha para efetuar o login
if(empty($email) || empty($senha)) {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Você deve fornecer usuário e senha!"));
	exit();
}

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
			// set response code - 200 OK
			http_response_code(200);
			// make it json format
			echo json_encode($query->fetch_assoc());
    }else{
//Se a senha estiver incorreta, mostra mensagem de erro para o usuário e volta para a página de login (index.php)
			http_response_code(401);
			echo json_encode(array("mensagem" => "Senha inválida!"));
    }
} else {
//Se o email não estiver cadastrado, exibe mensagem de erro ao usuário e redireciona para a página de cadastro
    http_response_code(401);
		echo json_encode(array("mensagem" => "Email não cadastrado. Por favor, efetue o cadastro."));
}
?>