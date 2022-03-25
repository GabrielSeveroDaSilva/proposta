<?php

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_nova_conf']) && $_POST['add_nova_conf']==1){

  $movimentacao = $_POST['movimentacao'];
  $unid_medida = $_POST['unid_medida'];
  
  $sql = "INSERT INTO configuracao (movimentacao, unid_medida) VALUES (?,?)";
  try{
    $insert = Db::insert($sql, [
      $movimentacao, $unid_medida
    ]); 

  }catch(Exception $e){

  }
  
}

$query = "select * from configuracao";
$configuracao = Db::query($query);








?>
 
</div>

  <p>Você está em :</p>

  <span class="text">Novo Tipo de Movimentação</span>
  <br><br>
  <!-- form de criar proposta -->
  <div class="form">
    <form action="" method="post">
      <!-- produto -->

      <h1>Informações do movimentacao</h1>

      <p>Dados para os Itens:</p>
      
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Tipo de movimentação :</label>
        <div class="uk-form-controls">
          <input class="uk-input" name="movimentacao" id="form-horizontal-text" type="text" placeholder="">  
        </div>
      </div>

      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Unidade de Medida :</label>
        <div class="uk-form-controls">
          <input class="uk-input" name="unid_medida" id="form-horizontal-text" type="text" placeholder="">  
        </div>
      </div>
          
     <br><br>
      <!-- botoes  -->
      <button class="salvar-criar" type="submit" name="add_nova_conf" value="1" >Adcionar Nova Configuração</button>
    
      
    </form>

  </div>

  

