<!-- [BACK-END] Arquivo para fazer a conexão do app com o banco de dados -->

<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'alunos');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>