<?php  

include "./class/Db.php";
Db::connect();

if (isset($_POST['add_item']) && $_POST['add_item']==1){
  $gestor = $_POST['gestor'];
  $produto = $_POST['produto'];

  $sql = "INSERT INTO item (gestor, produto) VALUES (?,?)";
  try{
    $insert = Db::insert($sql, [
      $gestor, $produto
    ]); 
    
    var_dump($insert);
    echo "adicionado";
  }catch(Exception $e){

  }
  

}

$query = "select * from item";
$item = Db::query($query);


?>


<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Novo Item</span>
      <br><br>
    </div>

    <div class="create">
        <form action="" class="new" method="post">

                <label for="">Gestor</label>
                <input type="text" id="gestor" name="gestor">
                <br>
                <label for="dia">Produto</label>
                <input type="text" id="produto" name="produto"/>
                <br>


                <button type="submit" class="submit" name="add_item" value="1">salvar</button>
            </form>
    </div>




