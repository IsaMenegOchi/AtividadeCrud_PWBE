<?php

require_once("../login/funcoesSessao.php");
require_once("../dataBase/conexao.php");
verificarLogin();

switch ($_POST["acao"]){

    case "inserir":
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $celular = $_POST["celular"];

        $comandoInserirSql = "INSERT INTO tbl_pessoa (nome, sobrenome, email, celular) VALUES ('$nome', '$sobrenome', '$email', '$celular')";

        $mandarBanco = mysqli_query($conexao, $comandoInserirSql);


        // echo "<pre>";
        // var_dump($comandoInserirSql);
        // echo "</pre>"; exit;

        header("location: ../listagem/index.php");

    break;

    case "deletar":

        $idPessoa = $_POST["idPessoa"];

        $comandoDeletarSql = "DELETE FROM tbl_pessoa WHERE cod_pessoa = $idPessoa";
        $mandarBanco = mysqli_query($conexao, $comandoDeletarSql);

        header("location: ../listagem/index.php");

    break;

    case "editar":

        $idPessoa = $_POST["idPessoa"];
        $nomeEditado = $_POST["nome"];
        $sobrenomeEditado = $_POST["sobrenome"];
        $emailEditao = $_POST["email"];
        $celularEditado = $_POST["celular"];

        $comandoEditarSql = "UPDATE tbl_pessoa SET 
            nome = '$nomeEditado', 
            sobrenome = '$sobrenomeEditado', 
            email = '$emailEditao', 
            celular = '$celularEditado' 
            WHERE cod_pessoa = 11;";

        $mandarBanco = mysqli_query($conexao, $comandoEditarSql);

        header("location: ../listagem/index.php");

    break;


}



?>