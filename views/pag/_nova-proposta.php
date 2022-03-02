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
    
  }catch(Exception $e){

  }
  

}

$query = "select * from cliente";
$clientes = Db::query($query);


?>






<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Nova Proposta</span>
      <br><br>
    </div>

    <div class="create">
        <form action="" class="new" method="post">

                <label for="">Cliente</label>
                <select name="cliente_id" id="">
                  <?php foreach ($clientes as $c) {?> 
                    <option value="<?= $c['id']?>"><?= $c['nome']?></option>
                  <?php }?>
                </select>
                
                <!-- <br>                
                <label for="">Item</label>
                <input list="browsers" name="item" id="item">
                <datalist id="browsers">
                </datalist> -->
                <br>
                <label for="dia">Data de Emissão</label>
                <input type="date" maxlength="10" id="saida" name="data_emissao" value="29/01/2016"/>
                <br>


                <button type="submit" class="submit" name="add_proposta" value="1">salvar</button>
            </form>
    </div>





