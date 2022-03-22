<?php  

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_proposta']) && $_POST['add_proposta']==1){

$proposta = $_POST['proposta'] ;
$cliente_id = $_POST['cliente_id'] ;
$data_de_abertura = Date::toUS($_POST['data_de_abertura']);
$tipo_de_movimentação = $_POST['tipo_de_movimentacao'] ;
$item = $_POST['item'] ;
$codigo_do_produto = $_POST['codigo_do_produto'] ;
$descrição_do_produto = $_POST['descricao_do_produto'] ;
$informações_do_produto = $_POST['informacoes_do_produto'] ;
$qtde = $_POST['qtde'] ;
$valor_unitario = 100 ;
$valor_total_produtos = $_POST['valor_total_produtos'] ;
$valor_total_desconto = $_POST['valor_total_desconto'] ;
$prazo_de_entrega = $_POST['prazo_de_entrega'] ;
$status = $_POST['status'] ;
  
  
  $sql = "INSERT INTO proposta (nome_proposta, cliente_id, data_emissao, cabecalho) VALUES (?,?,?,?)";
  try{
    $insert = Db::insert($sql, [
      $nome_proposta, $cliente_id, $data_emissao, $cabecalho
    ]); 
    
    
  }catch(Exception $e){
    
    
  }
  

}

$query = "select * from cliente";
$clientes = Db::query($query);

$query = "select * from item";
$item = Db::query($query);


?>
<section class="home-section">
    <div class="home-content">
      
    </div>

<p>Você está em :</p>

<span class="text">Criar Proposta</span>

<!-- form de criar proposta -->
  <div class="form-criar">
    <!-- função feita para escolher o cliente pelo nome e mosta na planilha o id -->
    <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-select">Cliente</label>
          <div class="uk-form-controls">
              <select class="uk-select" id="form-horizontal-select" name="cliente_id" >
                <?php foreach ($clientes as $c) {?> 
                  <option value="<?= $c['id']?>"><?= $c['nome']?></option>
                <?php }?>
              </select>
          </div>
      </div>

      <!-- tipo movimentação -->

      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-select">Tipo de movimentação</label>
          <div class="uk-form-controls">
              <select class="uk-select" id="form-horizontal-select" name="tipo_de_movimentacao" >
                <?php foreach ($tipo_de_movimentacao as $tm) {?> 
                  <option value="<?= $tm['id']?>"><?= $c['nome']?></option>
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
              <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
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

    </form>


  </div>



<span class="text">itens de proposta</span>
<br><br>
<div class="box-itens-p">
<!-- Botao modal -->
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example">Open</button>


<!-- botao de excluir -->

<button class="excluir">Excluir<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>


<table id="tabela" class="uk-table uk-table-striped uk-table-middle" style="width:100%">
        <thead>
            <tr>
                <th>Marcar</th>
                <th>Item</th>
                <th>Código do produto</th>
                <th>Descrição do produto</th>
                <th>Informações adicionais do produto</th>
                <th>Qtde</th>
                <th>Valor unitário</th>
                <th>Valor total dos produtos</th>
                
            </tr>
        </thead>
         
            <td><input class="uk-checkbox" type="checkbox" checked></td>
            <td>001</td>
            <td>PA 00001</td>
            <td>Sacola plástica</td>
            <td>---</td>
            <td>10 FD</td>
            <td>100 por FD</td>
            <td>1.000,00</td>


        </tbody>
        </thead>
         
            <td><input class="uk-checkbox" type="checkbox" checked></td>
            <td>001</td>
            <td>PA 00001</td>
            <td>Sacola plástica</td>
            <td>---</td>
            <td>10 FD</td>
            <td>100 por FD</td>
            <td>1.000,00</td>


        </tbody>
        </thead>
         
            <td><input class="uk-checkbox" type="checkbox" checked></td>
            <td>001</td>
            <td>PA 00001</td>
            <td>Sacola plástica</td>
            <td>---</td>
            <td>10 FD</td>
            <td>100 por FD</td>
            <td>1.000,00</td>


        </tbody>
        <tfoot>
            <tr>
              <th>Marcar</th>
              <th>Item</th>
              <th>Código do produto</th>
              <th>Descrição do produto</th>
              <th>Informações adicionais do produto</th>
              <th>Qtde</th>
              <th>Valor unitário</th>
              <th>Valor total dos produtos</th>
              
            </tr>
        </tfoot>
    </table>
</div>




<!-- This is the modal -->
<div id="modal-example" uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
  <p>Você está em :</p>
  <h2>Edição de item de proposta</h2>
  <span class="text">Informações do item da proposta</span> 
  
    <div class="form">
      <form class="uk-form-horizontal uk-margin-large" method="post">
        <!-- preciso fazer uma função que vincule a linha de produto ao  id do item -->
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-select">Item</label>
          <div class="uk-form-controls">
              <select class="uk-select" id="form-horizontal-select" name="id" >
                <?php foreach ($item as $i) {?> 
                  <option value=""><?= $i['id']?></option>
                <?php }?>
              </select>
          </div>
      </div>
  
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-select">Produto</label>
          <div class="uk-form-controls">
              <select class="uk-select" id="form-horizontal-select" name="produto" >
                <?php foreach ($item as $i) {?> 
                  <option><?= $i['produto']?></option>
                <?php }?>
              </select>
          </div>
      </div>
  
      <!-- informações adicionais -->
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Informações adicionais do produto</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
        </div>
      </div>
  
      <!-- fazer uma função que aparece a unidade de medida do item com a escolha do mesmo... -->
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-select">Unidade de medida</label>
          <div class="uk-form-controls">
              <select class="uk-select" id="form-horizontal-select" name="unid_med" >
                <?php foreach ($item as $i) {?> 
                  <option><?= $i['unid_med']?></option>
                <?php }?>
              </select>
          </div>
      </div>
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-select">Qtde.</label>
          <div class="uk-form-controls">
          <input class="uk-input" id="form-stacked-text" type="number" placeholder="">
          </div>
      </div> 
      
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Valor unitario</label>
        <input type="text" class="uk-input" onkeypress="$(this).mask('R$ 000,00')">
      </div>

      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Valor total</label>
        <input type="text" class="uk-input" onkeypress="$(this).mask('R$ 000,00')">
      </div>





    </form>

    <!-- botoes para salvar e cancelar -->
    <p class="uk-text-right">
        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
        <button class="uk-button uk-button-primary" type="button">Save</button>
    </p>
  </div>
</div>

