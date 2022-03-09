<?php

include "./class/Db.php";
Db::connect();


if (isset($_POST['submit']) && $_POST['submit']==1){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuario WHERE email = :email && senha = :senha ";

    $data = Db::query($query,[
        'email' => $email,
        'senha' => $senha
    ]);


    if(count($data)) {
    
        $_SESSION["logado"] = $data[0];
    
        header("Location: ?i=index");
    } else{
        echo 'email ou senha incorretos';
    }

    

    

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/icon/favicon-16x16.png">
    <link rel="manifest" href="/img/icon/site.webmanifest">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/icofont.min.css">

    <title>Login</title>

</head>
<body>
    <div class="login">
        

        
    <form action="" method="post">

        <p>Login</p>
        <br>

        <div class="email">
            <input type="text" name="email" id="email" placeholder="User Email">
        </div>
        <br>
        <div class="senha">
            <input type="password" name="senha" id="senha" placeholder="Password">
        </div>
        <br>
        <button type="submit" name="submit" value="1" > Entrar</button>        
            
        
    </form>
    
        

    
    

    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>