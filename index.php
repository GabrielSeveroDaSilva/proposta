<?php

$pagina = 'home';

/* Define a página atual pela url  */
if(isset($_GET['i'])){
    $pagina = addslashes($_GET['i']);
}

/* Carrega o header */
include 'views/login.html';



