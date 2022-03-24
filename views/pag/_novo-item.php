<?php  

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_item']) && $_POST['add_item']==1){
  $produto = $_POST['produto'];
  $unid_medida = $_POST['unid_medida'];
  $movimentacao = $_POST['movimentacao'];
  $informacoes_do_produto = $_POST['informacoes_do_produto'];
  $qtde = $_POST['qtde'];
  $valor_unitario = $_POST['valor_unitario'];
  $valor_total = $_POST['valor_total'];

  $sql = "INSERT INTO item (produto, unid_medida, movimentacao, informacoes_do_produto, qtde, valor_unitario, valor_total ) VALUES (?,?,?,?,?,?,?)";
  try{
    $insert = Db::insert($sql, [
      $produto, $unid_medida, $movimentacao, $informacoes_do_produto, $qtde, $valor_unitario, $valor_total
    ]); 
    
    
  }catch(Exception $e){

  }

}

$query = "select * from item";
$item = Db::query($query);



$query = "select * from  movimentacao";
$movimentacao = Db::query($query);


?>

<section class="home-section">
    <div class="home-content">
      
    </div>

  <p>Você está em :</p>

  <span class="text">Criar Item</span>
  <br><br>
  <!-- form de criar proposta -->
    <div class="form">
      <p>informação do item de proposta :</p>
      <form action="" method="post">
        <!-- produto -->

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Produto :</label>
            <div class="uk-form-controls">
            <input class="uk-input" name="produto" id="form-horizontal-text" type="text" placeholder="">  
            </div>
        </div>

        <!-- tipo movimentação -->

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Tipo de movimentação :</label>
            <div class="uk-form-controls">
                <select class="uk-select" id="form-horizontal-select" name="movimentacao" >
                  <?php foreach ($movimentacao as $m) {?>

                    <option value="<?= $m['movimentacao']?>"><?= $m['movimentacao']?></option>

                  <?php }?>
                </select>
            </div>
        </div>
          
        <!-- informações do produto -->
        
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Informações Adicionais do Produto :</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="informacoes_do_produto" id="form-stacked-text" type="text" placeholder="">
            </div>
        </div>

        <!-- unidade de medida -->

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Unidade de Medida :</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="unid_medida" id="form-stacked-text" type="text" placeholder="">
            </div>
        </div>
        
        <!-- quantidade -->

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Qtde :</label>
            <div class="uk-form-controls">
                <input type="numb" maxlength="10" class="uk-input" id="form-stacked-text" name="qtde" />
              </div>
        </div>

        <!-- valor unitario -->

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Valor Unitario :</label>
            <div class="uk-form-controls">
                <input type="text" maxlength="10" class="uk-input" id="form-stacked-text" name="valor_unitario" />
              </div>
        </div>

        <!-- valor total -->

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Valor Total :</label>
            <div class="uk-form-controls">
                <input type="text" maxlength="10" class="uk-input" id="form-stacked-text" name="valor_total"/>
              </div>
        </div>

        <br><br>

            <!-- botoes  -->
          <button class="salvar" type="submit" name="add_item" value="1" >Adcionar Cliente</button>

          <button name="add" value="1" class="salvar-criar">Salvar e Adicinar novo cliente<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>

          <button class="cancelar">Cancelar<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>

        
        </div>
        
      </form>
    </div>





    

