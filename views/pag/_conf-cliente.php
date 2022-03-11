<?php  


require_once "./class/class.php";
Db::connect();
$query = "select * from cliente";
$data = Db::query($query);





?>


<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Configuração de Clientes</span>
      <br><br>
    </div>
    <div class="bg">
    </div>

    <div class="config">

    <table id="table" class="uk-table uk-table-responsive uk-table-divider">
      <thead id="leg">
          <tr>
              <th>Cód</th>
              <th>Nome</th>
              <th>Email</th>
          </tr>
      </thead>
      <tbody>
      <?php  
        foreach($data as $p ){?>
    
          <tr>
              <td><?= $p["id"]?></td>
              <td><?= $p["nome"]?></td>
              <td><?= $p["email"]?></td>
              <i class="bi bi-pencil"><a href="edit.php"></a></i>
          </tr>
        
        <?php }?> 
      </tbody>
    </table>



    <!-- echo "<tr>".$user_data['']."</tr>"; -->

    <!-- <td><?= $p[""]?></td> -->
    </div>