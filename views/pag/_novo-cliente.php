<?php  

include "../class/Db.php";
Db::connect();

if (isset($_POST['add_cliente']) && $_POST['add_cliente']==1){
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  $sql = "INSERT INTO cliente (nome, email) VALUES (?,?)";
  try{
    $insert = Db::insert($sql, [
      $nome, $email
    ]); 
    
    var_dump($insert);
    echo "adicionado";
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

    <div class="create">
        <form action="" class="new" method="post">

                <label for="">Cliente</label>
                <input type="text" id="nome" name="nome">
                
                <!-- <br>                
                <label for="">Item</label>
                <input list="browsers" name="item" id="item">
                <datalist id="browsers">
                </datalist> -->
                <br>
                <label for="dia">Email</label>
                <input type="email" id="email" name="email"/>
                <br>


                <button type="submit" class="submit" name="add_cliente" value="1">salvar</button>
            </form>
    </div>





