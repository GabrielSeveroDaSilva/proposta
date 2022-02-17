<?php

include "../class/Db.php";
Db::connect();

if (isset($_POST['submit']) && $_POST['submit'] == 'signin'){

    $email = $_POST['email'];
    $senha = $_POST['password'];

    $query = "select * from usuario where email = :email and senha = :senha";

    $data = Db::query($query,[
        'email' => $email,
        'senha' => $senha
    ]);
    if(count($data)) {
        echo "logado";
    } else{
        echo "usuario ou senha errados";
    }
    var_dump($data);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>


    <div class="login">
        <form action="" method="POST">

            <h1><i class='bx bxs-group'></i>Sign in</h1>
            <br>
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="password" placeholder="Password">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="signin" >
            
        </form>
    </div>
    
    
</body>
</html>