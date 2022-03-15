<?php  

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_user']) && $_POST['add_user']==1){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?,?,?)";
  try{
    $insert = Db::insert($sql, [
      $nome, $email, $senha
    ]); 
    
    var_dump($insert);
    echo "adicionado";
  }catch(Exception $e){

  }
  

}

$query = "select * from usuario";
$usuario = Db::query($query);


?>


<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Novo Usuario</span>
      <br><br>
    </div>

    <div class="create">
        <form action="" class="new" method="post">

                <label for="">Nome</label>
                <input type="text" id="nome" name="nome">
                <br>
                <label for="dia">Email</label>
                <input type="email" id="email" name="email"/>
                <br>
                <label for="dia">Senha</label>
                <input type="text" id="senha" name="senha"/>
                <br>


                <button type="submit" class="submit" name="add_user" value="1">salvar</button>
            </form>
    </div>




