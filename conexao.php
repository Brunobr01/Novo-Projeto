<?php

$host = 'localhost';
$dbname = "alunos_cadastrados";
$username = "root";
$password = '';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>