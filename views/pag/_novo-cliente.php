<?php

require_once "./class/class.php";
Db::connect();

if (isset($_POST['add_cliente']) && $_POST['add_cliente']==1){
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  $sql = "INSERT INTO cliente (nome, email) VALUES (?,?)";
  try{
    $insert = Db::insert($sql, [
      $nome, $email
    ]); 

  }catch(Exception $e){

  }
  
}

$query = "select * from cliente";
$cliente = Db::query($query);


// $cidade, $bairro, $rua, $numero
// , cidade, bairro, rua, numero
// $cidade = $_POST['cidade'];
// $bairro = $_POST['bairro'];
// $rua = $_POST['rua'];
// $numero = $_POST['numero'];



?>

<section class="home-section">
    <div class="home-content">
      
    </div>

  <p>Você está em :</p>

  <span class="text">Novo Cliente</span>
  <br><br>
  <!-- form de criar proposta -->
    <div class="form-criar">
      <p>informação do Cliente :</p>
      <div class="form-criar">
        <form action="" method="post">
          <!-- produto -->

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

          <!-- <p>Endereço :</p>

          
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
                  <input type="number" maxlength="10" class="uk-input" id="form-stacked-text" name="numero" />
                </div>
          </div> -->

        </form>
    
      </div>
      
        <button class="salvar" type="submit" name="add_cliente" value="1" >Salvar</button>

      <div>
        <button name="add" value="1" class="salvar-criar">Salvar e Adicinar novo cliente<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>
      </div>
      <button class="cancelar">Cancelar<a href="#" class="uk-icon-link" uk-icon="trash"></a></button>
      
    </div>