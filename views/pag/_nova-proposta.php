<?php  

$num = 35 ;
$format = number_format($num , 2,",", ".");

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_proposta']) && $_POST['add_proposta']==1){

$proposta = $_POST['proposta'] ;
$cliente_id = $_POST['cliente_id'] ;
$data_de_abertura = Date::toUS($_POST['data_de_abertura']);
$movimentacao = $_POST['movimentacao'] ;
$item = $_POST['item'] ;
$codigo_do_produto = $_POST['codigo_do_produto'] ;
$descrição_do_produto = $_POST['descricao_do_produto'] ;
$informações_do_produto = $_POST['informacoes_do_produto'] ;
$qtde = $_POST['qtde'] ;
$valor_unitario = $_POST['valor_unitario'] ;
$valor_total = $_POST['valor_total'] ;
$prazo_de_entrega = $_POST['prazo_de_entrega'] ;
$status = $_POST['status'] ;
$unid_medida = $_POST['unid_medida'] ;
  
  
  $sql = "INSERT INTO proposta (proposta, cliente_id, data_de_abertura, movimentacao, unid_medida, item, codigo_do_produto, descricao_do_produto, informacoes_do_produto, qtde, valor_total, valor_unitario, prazo_de_entrega, status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
  try{
    $insert = Db::insert($sql, [
      $proposta, $cliente_id, $data_de_abertura, $movimentacao, $item, $codigo_do_produto, $descricao_do_produto, $informacoes_do_produto, $qtde, $valor_total, $valor_unitario, $prazo_de_entrega, $status
    ]); 
    
    
  }catch(Exception $e){
    
    
  }
  

}

$query = "select * from cliente";
$clientes = Db::query($query);

$query = "select * from item";
$item = Db::query($query);

$query = "select * from configuracao";
$configuracao = Db::query($query);

$query = "select * from proposta_item";
$proposta_item = Db::query($query);



?>
</div>

<p>Você está em :</p>

<span class="text">Criar Proposta</span>
<br><br>


<!-- form de criar proposta -->
  <div class="form">
    <!-- função feita para escolher o cliente pelo nome e mosta na planilha o id -->
    <div class="uk-margin">
      <form action="" method="post">
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Cliente</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-horizontal-select" name="cliente_id" >
              <?php foreach ($clientes as $c) {?> 
                <option value="<?= $c['id']?>"><?= $c['nome']?></option>
              <?php }?>
            </select>
        </div>

      <!-- tipo movimentação -->

      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-select">Tipo de movimentação</label>
          <div class="uk-form-controls">
              <select class="uk-select" id="form-horizontal-select" name="movimentacao" >
                <?php foreach ($configuracao as $conf) {?> 
                  <option value="<?= $conf['movimentacao']?>"><?= $conf['movimentacao']?></option>
                <?php }?>
              </select>
          </div>
      </div>

      
      <!-- representante -->
      <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Representante</label>
          <div class="uk-form-controls">
              <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
          </div>
      </div>

      <!-- vendedor -->
      <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Vendedor</label>
          <div class="uk-form-controls">
              <input  class="uk-input" id="form-stacked-text" type="text" placeholder="">
          </div>
      </div>


      <!-- fazer uma função que marca qual dia esta sendo feito a proposta -->
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-select">Data de Emissão</label>
          <div class="uk-form-controls">
              <input type="date" maxlength="10" id="saida" name="data_emissao" value="29/01/2016"/>
            </div>
      </div>

      <!-- fazer uma função que calcula o tempo de entrega e da a validade -->
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-select">Data de Validade</label>
          <div class="uk-form-controls">
              <input type="date" maxlength="10" id="saida" name="data_validade" value="29/01/2016"/>
            </div>
      </div>

      <br><br>

            <!-- botoes  -->
          <button class="salvar" type="submit" name="add_item" value="1" >Adcionar Cliente</button>

          <button name="add" value="1" class="salvar-criar">Salvar e Adicinar novo cliente<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>

          <button class="cancelar">Cancelar<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>


    </form>


  </div>
<br><br>


<h2>Edição de item de proposta</h2>
<span class="text">Informações do item da proposta</span> 

<div class="form">
  <form action="" method="post">
    <label class="uk-form-label" for="form-horizontal-select">Produto</label>
    <div class="uk-form-controls">
        <select class="uk-select" id="form-horizontal-select" name="cliente_id" >
          <?php foreach ($clientes as $c) {?> 
            <option value="<?= $c['id']?>"><?= $c['nome']?></option>
          <?php }?>
        </select>
    </div>

    <!-- tipo movimentação -->

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Informação do Produto</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-horizontal-select" name="movimentacao" >
              <?php foreach ($configuracao as $conf) {?> 
                <option value="<?= $conf['movimentacao']?>"><?= $conf['movimentacao']?></option>
              <?php }?>
            </select>
        </div>
    </div>

    
    <!-- representante -->
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Quantidade</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
        </div>
    </div>

    <!-- vendedor -->
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Valor Unitario</label>
        <div class="uk-form-controls">
            <input  class="uk-input" id="form-stacked-text" type="text" placeholder="">
        </div>
    </div>


    <
    <br><br>

          <!-- botoes  -->
        <button class="salvar" type="submit" name="add_item" value="1" >Adcionar Item</button>

        <button class="excluir">Excluir<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>


  </form>
</div>
<br><br>

<div class="table">
  <!-- botao de excluir -->
    <button class="excluir">Excluir<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>

  <!-- inicio da tabela de itens adicionados -->
      <table id="tabela" class="uk-table uk-table-striped uk-table-middle" style="width:100%">
        <thead>
            <tr>
                <th>Item</th>
                <th>Descrição do produto</th>
                <th>Informações adicionais do produto</th>
                <th>Qtde</th>
                <th>Valor unitário</th>
                <th>Valor total dos produtos</th>
                
            </tr>
        </thead>
        <tbody>
          <?php 
            foreach($item as $i ){?>
              <tr>
                <td><?= $i["id"]?></td>
                <td><?= $i["produto"]?></td>
                <td><?= $i["informacoes_do_produto"]?></td>
              <?php }?>
          <?php 
            foreach($proposta_item as $pi ){?>

                <td><?= $pi["qtde"]?></td>
                <td><?= $pi["unid_medida"]?></td>
                <td><?= $pi["valor_unitario"]?></td>

              </tr>
            <?php }?>
          
        </tbody>
        
        <tfoot>
            <tr>
              <th>Item</th>
              <th>Descrição do produto</th>
              <th>Informações adicionais do produto</th>
              <th>Qtde</th>
              <th>Valor unitário</th>
              <th>Valor total dos produtos</th>
                
            </tr>
        </tfoot>
    </table>
</div>
