<?php
session_start();


require "./class/User.php";
require "./class/Utils.php";

// definir a pagina atual pela url

$pagina = 'home';

if(isset($_GET['i'])){
    $pagina = addslashes($_GET['i']);
}


//carrega o header



include './header.php';

//carrega a página escolhida pelo usuario
switch ($pagina) {

    case'home':
        include './home.php';
        break;

    case'nova-proposta':
        include './pag/_nova-proposta.php';
        break;

    case'conf-proposta':
        include './pag/_conf-proposta.php';
        break;

    case'proposta':
        include './pag/_proposta.php';
        break;

    case'novo-cliente':
        include './pag/_novo-cliente.php';
        break;

    case'conf-cliente':
        include './pag/_conf-cliente.php';
        break;

    case'cliente':
        include './pag/_cliente.php';
        break;


    case'novo-item':
        include './pag/_novo-item.php';
        break;

    case'conf-item':
        include './pag/_conf-item.php';
        break;

    case'item':
        include './pag/_item.php';
        break;
        

    case'grafico':
        include './pag/_grafico.php';
        break;
        

    case'sobre':
        include './pag/_sobre.php';
        break;

    case'configuração':
        include './pag/_configuracao.php';
        break;

    case'new-user':
        include './pag/_new-user.php';
        break;

    case'sair':
        include './sair.php';
        break;

}

include './footer.php';

// $pageadmin = 'admin';

// //carrega o header
// include './admin/header.php';

// //carrega a página escolhida pelo usuario
// switch ($pageadmin) {


//     case'admin':
//         include './admin/index.php';
//         break;
// }

// include './admin/footer.php';
