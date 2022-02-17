<!--

if(isset($_POST['submit']))

    // print_r($_POST['name']);
    // print_r('<br>');
    // print_r($_POST['email']);
    // print_r('<br>');
    // print_r($_POST['password']);

    include_once('config.php');

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $result = mysqli_query($conexao. "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");

-->

<?php
    if($_POST) {
        $senha = $_POST['senha'];
        $senhaConfirma  = $_POST['senha_confirma'];
        if ($senha == "") {
            $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
        } else if ($senha == $senhaConfirma) {
            $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais: ".$senha."</span>";
        } else {
            $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
        }
        echo "<p id='mensagem'>".$mensagem."</p>";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>


    <div class="cadastro">
        <h1>sign up</h1>

        <form action="cadastro.php" method="POST">
            <!-- <label for="name" class="labelInput">Nome</label> -->
            <input type="text" id="name" name="name" placeholder="name">
            <br>
            <!-- <label for="email" class="labelInput">Email</label> -->
            <input type="email" id="email" name="email" placeholder="email">
            <br>
            <!-- <label for="password" class="labelInput">Password</label> -->
            <input type="password" id="senha" name="senha" placeholder="password">
            <br>
            <!-- <label for="" class="labelInput">Confirm Password</label> -->
            <input type="password" id="senha_confirma" name="senha_confirma" placeholder="password">
            <br><br>
            <input type="submit" name="submit" id="submit">
        </form>
        
    </div>
    
    
</body>
</html>