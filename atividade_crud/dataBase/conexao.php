<?php

const HOST = "localhost";
const USER = "root";
const PASSAWORD = "bcd127";
const DATABASE = "cadastrocrud";

//ela se conecta ao banco de dados 
$conexao = mysqli_connect(HOST, USER, PASSAWORD, DATABASE);

if ($conexao === false) {
    die(mysqli_connect_error());
}



?>