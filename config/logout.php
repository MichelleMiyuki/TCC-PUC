<!-- [BACK-END] Encerra a sessão do usuário (faz logout)-->

<?php
    session_start();
    session_destroy();
    header("location:../index.php");
?>