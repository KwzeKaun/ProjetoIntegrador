<?php

$host = "localhost";
$port = "5432";
$dbname = "cantina";
$user = "postgres";
$password = "root";

$conn = pg_connect(
    "host=$host port=$port dbname=$dbname user=$user password=$password"
);

if (!$conn) {
    die("Erro na conexão com o banco de dados");
}
?>