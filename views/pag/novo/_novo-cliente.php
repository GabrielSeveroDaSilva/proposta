<?php  

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_cliente']) && $_POST['add_cliente']==1){
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  $sql = "INSERT INTO cliente (nome, email) VALUES (?,?)";
  try{
    $insert = Db::insert($sql, [
      $nome, $email
    ]); 

  }catch(Exception $e){

  }
  
}

$query = "select * from cliente";
$cliente = Db::query($query);


?>

<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Novo Cliente</span>
      <br><br>
    </div>
    <div class="form">
        <form action="" class="new" method="post">
          <div class="proposta-details">
            <div class="input-box">
              <span class="details">Cliente:</span>
              <input type="text" name="nome" id="box" placeholder="Nome do Cliente...">
            </div>
            <div class="input-box">
              <span class="details">Email:</span>
              <input type="text" name="email" id="box" placeholder="Digite o E-mail...">
            </div>
            <br>
            <div class="button">
              <button class="submit" type="submit" name="add_cliente" value="1" >Adcionar Cliente</button>
            </div>


          </div>
          
          
        </form>





