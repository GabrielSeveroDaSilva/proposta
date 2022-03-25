<?php

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_cliente']) && $_POST['add_cliente']==1){

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $cidade = $_POST['cidade'];
  $bairro = $_POST['bairro'];
  $rua = $_POST['rua'];
  $numero = $_POST['numero'];
  
  $sql = "INSERT INTO cliente (nome, email, cidade, bairro, rua, numero) VALUES (?,?,?,?,?,?)";
  try{
    $insert = Db::insert($sql, [
      $nome, $email, $cidade, $bairro, $rua, $numero
    ]); 

  }catch(Exception $e){

  }
  
}

$query = "select * from cliente";
$cliente = Db::query($query);








?>
</div>
  <p>Você está em :</p>

  <span class="text">Novo Cliente</span>
  <br><br>
  <!-- form de criar proposta -->
  <div class="form">
    <form action="" method="post">
      <!-- produto -->

      <h1>Informações do Cliente</h1>

      <p>Dados Pessoais:</p>
      
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Nome :</label>
        <div class="uk-form-controls">
          <input class="uk-input" name="nome" id="form-horizontal-text" type="text" placeholder="">  
        </div>
      </div>
          
      <!-- tipo movimentação -->

      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Email :</label>
        <div class="uk-form-controls">
            <input class="uk-input" name="email" id="form-stacked-text" type="text" placeholder="">
        </div>
      </div>
      <br><br>

      <p>Endereço :</p>

      
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Cidade :</label>
        <div class="uk-form-controls">
            <input class="uk-input" name="cidade" id="form-stacked-text" type="city" placeholder="">
        </div>
      </div>

      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Bairro :</label>
        <div class="uk-form-controls">
            <input class="uk-input" name="bairro" id="form-stacked-text" type="text" placeholder="">
        </div>
      </div>


      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Rua/Av :</label>
        <div class="uk-form-controls">
            <input type="text" class="uk-input" id="form-stacked-text" name="rua" />
          </div>
      </div>

      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Número :</label>
        <div class="uk-form-controls">
            <input type="text" maxlength="10" class="uk-input" id="form-stacked-text" name="numero" />
          </div>
      </div>
      <br><br>


      <!-- botoes  -->
      <button class="salvar" type="submit" name="add_cliente" value="1" >Adcionar Cliente</button>

      <button name="add" value="1" class="salvar-criar">Salvar e Adicinar novo cliente<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>
      
      <button class="cancelar">Cancelar<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>
    
      
    </form>

  </div>

  

