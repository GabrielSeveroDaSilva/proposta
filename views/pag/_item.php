<?php  

include "./class/Db.php";
Db::connect();
$query = "select * from item";
$data = Db::query($query);


?>


<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Item</span>
      <br><br>
    </div>
    <div class="table">
        <table id="table" class="uk-table uk-table-responsive uk-table-divider">
          <thead id="leg">
              <tr>
                  <th>Cód.</th>
                  <th>Gestor</th>
                  <th>Produto</th>
              </tr>
          </thead>
          <tbody>
            
            <?php  
            foreach($data as $i ){?>
        
              <tr>
                  <td><?= $i["id"]?></td>
                  <td><?= $i["gestor"]?></td>
                  <td><?= $i["produto"]?></td>
              </tr>
            
            <?php }?> 
              
          </tbody>
        </table>
    </div>
    


