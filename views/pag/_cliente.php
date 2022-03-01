<?php  

include "./class/Db.php";
Db::connect();
$query = "select * from cliente";
$data = Db::query($query);


?>


<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Clientes</span>
      <br><br>
    </div>
    <div class="table">
        <table id="table" class="uk-table uk-table-responsive uk-table-divider">
          <thead id="leg">
              <tr>
                  <th>Cód.</th>
                  <th>Nome</th>
                  <th>Email</th>
              </tr>
          </thead>
          <tbody>
            <?php  
            foreach($data as $c ){?>
        
              <tr>
                  <td><?= $c["id"]?></td>
                  <td><?= $c["nome"]?></td>
                  <td><?= $c["email"]?></td>
              </tr>
            
            <?php }?> 
              
              
          </tbody>
        </table>
    </div>
    



    

