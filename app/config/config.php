<?php
$servername = $_ENV["SERVERNAME"];
$port = $_ENV["PORT"];
$username = $_ENV["USERNAME"];
$password = $_ENV["PASSWORD"];
$dbname = $_ENV["DBNAME"];

$conn = pg_connect("host=$servername port=$port dbname=$dbname user=$username password=$password");

if (!$conn) 
    die("Erro na conexão: " . error_get_last()['message']);
echo "Conexão bem sucedida";
?>