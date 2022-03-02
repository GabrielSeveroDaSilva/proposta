<?php  

include "./class/Db.php";
Db::connect();
$query = "select * from proposta";
$data = Db::query($query);


?>


<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Propostas</span>
      <br><br>
    </div>
    <div class="table">
    <table id="table" class="uk-table uk-table-responsive uk-table-divider">
      <thead id="leg">
          <tr>
              <th>Cód.</th>
              <br>
              <th>Cliente Id</th>
              <br>
              <th>Data de Emissão</th>
              <br>
              <th>Observação</th>
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