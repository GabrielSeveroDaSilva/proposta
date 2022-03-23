<?php  

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_item']) && $_POST['add_item']==1){
  $produto = $_POST['produto'];
  $unud_medida = $_POST['unud_medida'];
  $informacoes_do_produto = $_POST['informacoes_do_produto'];
  $qtde = $_POST['qtde'];
  $valor_unitario = $_POST['valor_unitario'];
  $valor_total_produtos = $_POST['valor_total_produto'];

  $sql = "INSERT INTO item (produto, unud_medida, informacoes_do_produto, qtde, valor_unitario, valor_total_produto ) VALUES (?,?,?,?,?,?)";
  try{
    $insert = Db::insert($sql, [
      $produto, $unud_medida, $informacoes_do_produto, $qtde, $valor_unitario, $valor_total_produtos
    ]); 
    
    
  }catch(Exception $e){

  }
  

}

$query = "select * from tipo_de_movimentacao";
$tm = Db::query($query);


?>

<section class="home-section">
    <div class="home-content">
      
    </div>

  <p>Você está em :</p>

  <span class="text">Criar Item</span>
  <br><br>
  <!-- form de criar proposta -->
    <div class="form-criar">
      <p>informação do item de proposta :</p>
      <div class="form-criar">
      <form action="" method="post">
        <!-- produto -->

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Produto</label>
            <div class="uk-form-controls">
            <input class="uk-input" name="produto" id="form-horizontal-text" type="text" placeholder="">  
            </div>
        </div>

        <!-- tipo movimentação -->

        <!-- <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Tipo de movimentação</label>
            <div class="uk-form-controls">
                <select class="uk-select" id="form-horizontal-select" name="tipo_de_movimentacao" >
                  <?php foreach ($tipo_de_movimentacao as $tm) {?> 
                    <option><?= $tm['nome']?></option>
                  <?php }?>
                </select>
            </div>
        </div> -->

        
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Informações Adicionais do Produto</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="informacoes_do_produto" id="form-stacked-text" type="text" placeholder="">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Unidade de Medida</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="unud_medida" id="form-stacked-text" type="text" placeholder="">
            </div>
        </div>


        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Qtde</label>
            <div class="uk-form-controls">
                <input type="numb" maxlength="10" class="uk-input" id="form-stacked-text" name="qtde" />
              </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Valor Unitario</label>
            <div class="uk-form-controls">
                <input type="text" maxlength="10" class="uk-input" id="form-stacked-text" name="valor_unitario" "/>
              </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Valor Total</label>
            <div class="uk-form-controls">
                <input type="text" maxlength="10" class="uk-input" id="form-stacked-text" name="valor_total"/>
              </div>
        </div>

      </form>
    
      </div>
      <div>
        <button value="add_item" value="1" class="salvar">Salva</button>
      </div>
      <button class="salvar-criar">Salvar e Criar novo item<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>
      <button class="cancelar">Cancelar<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>
      
    </div>





    

