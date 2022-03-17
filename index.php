<?php
require_once "./class/class.php";

User::logado();
Db::connect();


// definir a pagina atual pela url

$pagina = 'home';

if(isset($_GET['i'])){
    $pagina = addslashes($_GET['i']);
}



//carrega o header


include './views/header.php';

//carrega a página escolhida pelo usuario
switch ($pagina) {

    case'home':
        include './views/home.php';
        break;

    case'nova-proposta':
        include './views/pag/_nova-proposta.php';
        break;

    case'edit-proposta':
        include './views/pag/_edit-proposta.php';
        break;

    case'proposta':
        include './views/pag/_proposta.php';
        break;

    case'novo-cliente':
        include './views/pag/_novo-cliente.php';
        break;

    case'edit-cliente':
        include './views/pag/_edit-cliente.php';
        break;

    case'cliente':
        include './views/pag/_cliente.php';
        break;


    case'novo-item':
        include './views/pag/_novo-item.php';
        break;

    case'edit-item':
        include './views/pag/_edit-item.php';
        break;

    case'item':
        include './views/pag/_item.php';
        break;
        

    case'grafico':
        include './views/pag/_grafico.php';
        break;
        

    case'sobre':
        include './views/pag/_sobre.php';
        break;

    case'configuração':
        include './views/pag/_configuracao.php';
        break;

    case'novo-usuario':
        include './views/pag/_novo-usuario.php';
        break;

    case'edit':
        include './views/include/_edit.php';
        break;

    case'sair':
        include './views/sair.php';
        break;

}

include './views/footer.php';

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
