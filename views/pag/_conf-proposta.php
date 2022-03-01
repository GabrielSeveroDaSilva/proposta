<?php  

include "./class/Db.php";
include "./class/Date.php";
Db::connect();

if (isset($_POST['add_proposta']) && $_POST['add_proposta']==1){
  $cliente_id = $_POST['cliente_id'];
  $data_emissao = Date::toUS($_POST['data_emissao']);

  $sql = "INSERT INTO proposta (cliente_id, data_emissao) VALUES (?,?)";
  try{
      $insert = Db::insert($sql, [
      $cliente_id, $data_emissao
    ]); 
    
    var_dump($insert);
    echo "adicionado";
  }catch(Exception $e){

  }
  

}

$query = "select * from cliente";
$clientes = Db::query($query);


?>


<section class="home-section">
      <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">Editar Proposta </span>
        <br><br>
      </div>