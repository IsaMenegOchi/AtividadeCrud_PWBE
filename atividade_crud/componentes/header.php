<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEMA DE CADASTRO</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">    

</head>

<body>

    
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="">
        Cadastro
    </a>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="../cadastro">Cadastrar</a>
        </li>

    </ul>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="../listagem">Listar</a>
        </li>
        
    </ul>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="../login/processa_login.php?acao=logout">Sair</a>
        </li>
        
    </ul>

</nav>
