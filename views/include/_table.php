<?php  

include "./class/Db.php";
Db::connect();
$query = "select * from proposta";
$data = Db::query($query);


?>


<div class="table">
    <table id="table" class="uk-table uk-table-responsive uk-table-divider">
      <thead id="leg">
          <tr>
              <th><?php echo $nome; ?></th>
              <th>Table Heading</th>
              <th>Table Heading</th>
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
</div>