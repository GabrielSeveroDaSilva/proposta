<?php  

include './views/include/_edit.php';
require_once "./class/class.php";
Db::connect();

$query = "select * from proposta";
$data = Db::query($query);

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


?>

<br><br>
<div class="table">
    <table id="table" class="uk-table uk-table-responsive uk-table-divider">
      <thead id="leg">
          <tr>
              <th>Cód</th>
              <th>Proposta</th>
              <th>Cliente Id</th>
              <th>Data Emissão</th>
              <th>Observação</th>
              <th>Editar/Delete</th>
          </tr>
      </thead>
      <tbody>
        <?php  
        foreach($data as $p ){?>
    
          <tr>
              <td><?= $p["id"]?></td>
              <td><?= $p["nome_proposta"]?></td>
              <td><?= $p["cliente_id"]?></td>
              <td><?= $p["data_emissao"]?></td>
              <td><?= $p["cabecalho"]?></td>
              
              <td><?php echo "<a href='?i=edit-proposta?id=". $p['id']."'>Editar</a>";?></td>

          </tr>
        
        <?php }?> 
          
          
      </tbody>
    </table>
</div>