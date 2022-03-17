<?php  

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_item']) && $_POST['add_item']==1){
  $gestor = $_POST['gestor'];
  $produto = $_POST['produto'];

  $sql = "INSERT INTO item (gestor, produto) VALUES (?,?)";
  try{
    $insert = Db::insert($sql, [
      $gestor, $produto
    ]); 
    
    
  }catch(Exception $e){

  }
  

}

$query = "select * from item";
$item = Db::query($query);


?>



<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Nova Proposta</span>
      <br><br>

      
    </div>
    <div class="form">
        <form action="" class="new" method="post">
          <div class="proposta-details">
            <div class="input-box">
              <span class="details">Gestor:</span>
              <input type="text" name="gestor" id="box" placeholder="Nome do Gestor...">
            </div>
            <div class="input-box">
              <span class="details">Produto:</span>
              <input type="text" name="produto" id="box" placeholder="Nome do Produto...">
            </div>
            <br>
            <div class="button">
              <button class="submit" type="submit" name="add_item" value="1" >Adcionar Item</button>
            </div>


          </div>
          
          
        </form>