<?php 


$dbHost = 'Localhost';
$dbUsername = 'gabriel';
$dbPassword = '9957';
$dbName= 'proposta';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_erro)
{
    echo "Erro";
}else{
    echo "conexao efetuada";
}
