<?php

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_movimentacao']) && $_POST['add_movimentacao']==1){

  $movimentacao = $_POST['movimentacao'];
  
  $sql = "INSERT INTO movimentacao (movimentacao) VALUES (?)";
  try{
    $insert = Db::insert($sql, [
      $movimentacao
    ]); 

  }catch(Exception $e){

  }
  
}

$query = "select * from movimentacao";
$movimentacao = Db::query($query);








?>

<section class="home-section">
  <div class="home-content">
    
  </div>

  <p>Você está em :</p>

  <span class="text">Novo Tipo de Movimentação</span>
  <br><br>
  <!-- form de criar proposta -->
  <div class="form">
    <form action="" method="post">
      <!-- produto -->

      <h1>Informações do movimentacao</h1>

      <p>Dados Pessoais:</p>
      
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Tipo de movimentação :</label>
        <div class="uk-form-controls">
          <input class="uk-input" name="movimentacao" id="form-horizontal-text" type="text" placeholder="">  
        </div>
      </div>
          
     
      <!-- botoes  -->
      <button class="salvar" type="submit" name="add_movimentacao" value="1" >Adcionar movimentacao</button>
    
      
    </form>

  </div>

  

