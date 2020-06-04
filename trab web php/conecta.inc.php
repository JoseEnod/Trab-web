<?php

$host ="127.0.0.1";
$user = "root";
$Password = "";
$DB =  "sseries";

$conexao = new mysqli($host, $user, $Password, $DB);

if (!$conexao) {
	echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
} 

$query = mysqli_query($conexao, "SELECT * FROM
    sugestoes");

?>