<?php  

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_item']) && $_POST['add_item']==1){
  $produto = $_POST['produto'];
  $informacoes_do_produto = $_POST['informacoes_do_produto'];

  $sql = "INSERT INTO item (produto, informacoes_do_produto) VALUES (?,?)";
  try{
    $insert = Db::insert($sql, [
      $produto, $informacoes_do_produto
    ]); 
    
    
  }catch(Exception $e){

  }

}

$query = "select * from item";
$item = Db::query($query);


?>


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
                <input class="uk-input" name="produto" id="form-stacked-text" type="text" placeholder="">
            </div>
        </div>

        <!-- informações do produto -->
        
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Informações Adicionais do Produto :</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="informacoes_do_produto" id="form-stacked-text" type="text" placeholder="">
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





    

