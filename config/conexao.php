<!-- [BACK-END] Arquivo para fazer a conexão do app com o banco de dados -->

<?php
$LOCAL = false;

$HOST = 'us-cdbr-iron-east-02.cleardb.net';
$USUARIO = 'b546a5801bd90c';
$SENHA = 'f7bf2d47';
$DB = 'heroku_aa83e7a11e448e2';

if ($LOCAL){
    $HOST = 'localhost';
    $USUARIO = 'root';
    $SENHA = '';
    $DB = 'alunos';
}
    
$conexao = mysqli_connect($HOST, $USUARIO, $SENHA, $DB) or die ('Não foi possível conectar');

?>
