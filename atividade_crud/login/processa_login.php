<?php

    session_start();
    require_once("./funcoesSessao.php");
    require_once("../dataBase/conexao.php");


    switch ($_GET["acao"]){

        case "login":

            echo "login";

            $usuario = $_POST["txt_usuario"];
            $senha = $_POST["txt_senha"];

            $sqlUsuario = "SELECT usuario, senha FROM tbl_administradores WHERE usuario = '$usuario'";

            $resultadoDados = mysqli_query($conexao, $sqlUsuario);

            $arrayDados = mysqli_fetch_array($resultadoDados);

            if(isset($usuario) && isset($senha)){

                if($usuario == $arrayDados["usuario"] && $senha == $arrayDados["senha"]){
                    $_SESSION["id"] = session_id();
                    header("location: ../cadastro/index.php");
                }
                else{
                    session_unset();
                }
            }
        break;

        case "logout":

          finalizarLogin();

        break;
    }
    
    

?>