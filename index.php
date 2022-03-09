<?php
session_start();


require "./class/User.php";
require "./class/Utils.php";

include './views/login.php';

$pagina = 'home';

if(isset($_GET['i'])){
    $pagina = addslashes($_GET['i']);
}

switch ($pagina) {

    case'index':
        include './index.php';
        break;

}


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposta</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
    <div class="container">
        <div class="text">
            <h1>Projeto de proposta</h1>
            <h2>sobre</h2>
            <p>analize de erros</p>
            <p>segurança do sistema</p>
            <p>banco de dados / database</p>
            <p>login / cadastro</p>
            <p>uso de include</p>
        </div>
        <div class="home">


            

        </div>

    </div>


</body>
</html> -->