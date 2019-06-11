<?php


$host = 'localhost'; //endereço do seu servidor banco de dados
$user = 'root'; // usuário
$pass = ''; // senha
$db = 'lanchesiffar'; // nome do banco a ser feito a conexão (database)

$connection = new mysqli($host, $user, $pass, $db);

if($connection->connect_error){
    echo 'Erro ao conectar ao MySQL:'. $connection->connect_error;
}

?>