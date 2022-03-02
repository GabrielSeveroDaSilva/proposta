<?php


    


$pagina = 'home';

if(isset($_GET['i'])){
    $pagina = addslashes($_GET['i']);
}

include './views/header.php';


switch ($pagina) {

    case'home':
        include './views/index.php';
        break;

    case'nova-proposta':
        include './views/pag/_nova-proposta.php';
        break;

    case'conf-proposta':
        include './views/pag/_conf-proposta.php';
        break;

    case'proposta':
        include './views/pag/_proposta.php';
        break;

    case'novo-cliente':
        include './views/pag/_novo-cliente.php';
        break;

    case'conf-cliente':
        include './views/pag/_conf-cliente.php';
        break;

    case'cliente':
        include './views/pag/_cliente.php';
        break;


    case'novo-item':
        include './views/pag/_novo-item.php';
        break;

    case'conf-item':
        include './views/pag/_conf-item.php';
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

    case'new-user':
        include './views/pag/_new-user.php';
        break;

    case'login':
        include './views/login.php';
        break;
        
        

}






include './views/footer.php';
