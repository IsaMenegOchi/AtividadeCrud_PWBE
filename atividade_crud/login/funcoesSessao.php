<?php


function verificarLogin(){
    if($_SESSION['id'] != session_id() || (empty($_SESSION['id']))){
        header("location: ../index.php");
    }
}


function finalizarLogin(){
    //? Limpa todas as variaveis de sessão
    session_unset();
    //? Destroi a sessão ativa
    session_destroy();

    header("location: ../login/index.php");
}



?>