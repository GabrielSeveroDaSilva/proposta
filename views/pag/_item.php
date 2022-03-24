<?php  

require_once "./class/class.php";
Db::connect();

$query = "select * from item";
$data = Db::query($query);


?>


<section class="home-section">
    <div class="home-content">
      
    </div>

    <p>Você está em :</p>
    <span class="text">Novo Item</span>
    <br><br>
    <div class="button">
      <a href="?i=novo-item">Novo Item</a>
    </div>
    <br><br>
    <div class="table">
      <table id="tabela" class="uk-table uk-table-hover uk-table-striped uk-table-middle" style="width:100%">
          <thead>
              <tr>
                <th>Id</th>
                <th>Produto</th>
                <th>tipo de movimentação</th>
                <th>Informações Adicionais do Produto</th>
                <th>Unidade de Medida </th>
                <th>Qtde</th>
                <th>Valor Unitario</th>
                <th>Valor Total</th>
              </tr>
          </thead>
          <tbody>
          <?php  
            foreach($data as $i ) {?>
            <tr>
              <td><?= $i["id"]?></td>
              <td><?= $i["produto"]?></td>
              <td><?= $i["movimentacao"]?></td>
              <td><?= $i["informacoes_do_produto"]?></td>
              <td><?= $i["unid_medida"]?></td>
              <td><?= $i["qtde"]?></td>
              <td><?= $i["valor_unitario"]?></td>
              <td><?= $i["valor_total"]?></td>
            </tr>
            <?php }?> 
          </tbody>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Produto</th>
              <th>tipo de movimentação</th>
              <th>Informações Adicionais do Produto</th>
              <th>Unidade de Medida </th>
              <th>Qtde</th>
              <th>Valor Unitario</th>
              <th>Valor Total</th>
            </tr>
          </tfoot>
      </table>
    </div>

        