<?php
$host = $_ENV[""];
$port = $_ENV[""];
$dbname = $_ENV[""];
$username = $_ENV[""];
$password = $_ENV[""];

$conn = pg_connect("host = $host port = $port dbname = $dbname username = $username password = $password");

if (!$conn) 
    die("erro na conexão: " . pg_last_error());

$query = "SELECT * FROM calc";

$result = pg_query($conn, $query);

if ($result)
    die("erro ao puxar os dados: " . pg_last_error());
?>

// while($row=pg_fetch_assoc($result))
// $row['coluna'];