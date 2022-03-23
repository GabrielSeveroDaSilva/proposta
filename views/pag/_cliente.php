<?php  

require_once "./class/class.php";
Db::connect();
$query = "select * from cliente";
$data = Db::query($query);


?>


<section class="home-section">
    <div class="home-content">
      
    </div>

    <p>Você está em :</p>
    <span class="text">Proposta</span>
    <br><br>
    <div class="button">
      <a href="?i=novo-cliente">Novo Cliente</a>
    </div>
    <br><br>
    <div class="table">
      <table id="tabela" class="uk-table uk-table-hover uk-table-striped uk-table-middle" style="width:100%">
          <thead>
              <tr>
                <th>nome</th>
                <th>email</th>
                <th>cidade</th>
                <th>bairro</th>
                <th>rua-av</th>
              </tr>
          </thead>
          <tbody>
          <?php  
            foreach($data as $c ){?>
        
            <td><?= $c["id"]?></td>
            <td><?= $c["nome"]?></td>
            <td><?= $c["email"]?></td>
            <td><?= $c["cidade"]?></td>
            <td><?= $c["bairro"]?></td>
            <td><?= $c["rua_av"]?></td>


            <?php }?> 
          </tbody>
          <tfoot>
              <tr>
                <th>nome</th>
                <th>email</th>
                <th>cidade</th>
                <th>bairro</th>
                <th>rua-av</th>
              </tr>
          </tfoot>
      </table>
    </div>

        