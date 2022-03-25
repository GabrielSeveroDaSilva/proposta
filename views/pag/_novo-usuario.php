<?php  

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_usuario']) && $_POST['add_usuario']==1){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?,?,?)";
  try{
    $insert = Db::insert($sql, [
      $nome, $email, $senha
    ]); 
    
  }catch(Exception $e){

  }
  

}

$query = "select * from usuario";
$usuario = Db::query($query);


?>



    <div class="form">
        <form action="" class="new" method="post">
          <div class="proposta-details">
            <div class="input-box">
              <span class="details">Usuario:</span>
              <input type="text" name="nome" id="box" placeholder="Nome do Usuario...">
            </div>
            <div class="input-box">
              <span class="details">Email:</span>
              <input type="text" name="email" id="box" placeholder="Digite o E-mail...">
            </div>
            <div class="input-box">
              <span class="details">Senha:</span>
              <input type="text" name="senha" id="box" placeholder="Digite a Senha...">
            </div>
            <br>
            <div class="button">
              <button class="submit" type="submit" name="add_usuario" value="1" >Adcionar Usuario</button>
            </div>


          </div>
          
          
        </form>




