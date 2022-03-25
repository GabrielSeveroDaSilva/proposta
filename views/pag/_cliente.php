<?php  

require_once "./class/class.php";
Db::connect();
$query = "select * from cliente";
$data = Db::query($query);


?>


</div>
    <p>Você está em :</p>
    <span class="text">Novo Cliente</span>
    <br><br>
    <div class="button">
      <a href="?i=novo-cliente">Novo Cliente</a>
    </div>
    <br><br>
    <div class="table">
      <table id="tabela" class="uk-table uk-table-hover uk-table-striped uk-table-middle" style="width:100%">
          <thead>
              <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>cidade</th>
                <th>bairro</th>
                <th>rua/av</th>
                <th>numero</th>
              </tr>
          </thead>
          <tbody>
          <?php  
            foreach($data as $c ){?>
            <tr>
              <td><?= $c["id"]?></td>
              <td><?= $c["nome"]?></td>
              <td><?= $c["email"]?></td>
              <td><?= $c["cidade"]?></td>
              <td><?= $c["bairro"]?></td>
              <td><?= $c["rua"]?></td>
              <td><?= $c["numero"]?></td>
            </tr>
            <?php }?> 
          </tbody>
          <tfoot>
              <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>cidade</th>
                <th>bairro</th>
                <th>rua/av</th>
                <th>numero</th>
              </tr>
          </tfoot>
      </table>
    </div>

        