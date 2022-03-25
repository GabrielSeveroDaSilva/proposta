<?php
require_once "./class/class.php";

User::logado();


// definir a pagina atual pela url

$pagina = 'home';

if(isset($_GET['i'])){
    $pagina = addslashes($_GET['i']);
}



//carrega o header




$content = "";

include './views/header.php';

//carrega a página escolhida pelo usuario
switch ($pagina) {

    case'home':
        $content = './views/home.php';
        break;

    case'propostas':
        $content = './views/pag/_proposta.php';
        break;

    case'clientes':
        $content = './views/pag/_cliente.php';
        break;

    case'item':
        $content = './views/pag/_item.php';
        break;

    case'':
        $content = './views/';
        break;

    case'nova-proposta':
        $content = './views/pag/_nova-proposta.php';
        break;

    case'novo-item':
        $content = './views/pag/_novo-item.php';
        break;

    case'novo-cliente':
        $content = './views/pag/_novo-cliente.php';
        break;
        
    case'configuracao':
        $content = './views/pag/_configuracao.php';
        break;

    case'sair':
        $content = './views/sair.php';
        break;

}

echo "<div class='uk-container' >";
include $content;
echo "</div>";


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
