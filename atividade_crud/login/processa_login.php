<?php

session_start();


    require_once("../dataBase/conexao.php");

    $usuario = $_POST["txt_usuario"];
    $senha = $_POST["txt_senha"];

    $sqlUsuario = "SELECT usuario, senha FROM tbl_administradores";

    $resultadoDados = mysqli_query($conexao, $sqlUsuario);

    $arrayDados = mysqli_fetch_array($resultadoDados);

    if(isset($_POST["txt_usuario"]) && isset($_POST["txt_senha"])){
        if($usuario == $arrayDados["usuario"] && $senha == $arrayDados["senha"]){
            $_SESSION["id"] = session_id();
            header("location: ../cadastro/index.php");
        }
        else{
            header("location: ./index.php?erro");
        }
    }

    else if($_GET["logout"]){
        finalizarLogin();
    }

    
    

?>