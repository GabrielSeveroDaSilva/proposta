<?php  


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

      <table id="table" class="uk-table uk-table-responsive uk-table-divider">
      <thead id="leg">
          <tr>
              <th>Cód</th>
              <th>Cliente Id</th>
              <th>Data Emissão</th>
              <th>cabeçario</th>
          </tr>
      </thead>
      <tbody>
        <?php  
        foreach($data as $p ){?>
    
          <tr>
              <td><?= $p["id"]?></td>
              <td><?= $p["cliente_id"]?></td>
              <td><?= $p["data_emissao"]?></td>
              <td><?= $p["cabecalho"]?></td>
          </tr>
        
        <?php }?> 
          
          
      </tbody>
    </table>