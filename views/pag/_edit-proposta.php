<?php  

require_once "./class/class.php";
Db::connect();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isset($_POST['edit_proposta']) && $_POST['edit_proposta']==1){
  
  
  $nome_proposta = $_POST['nome_proposta'];
  $cliente_id = $_POST['cliente_id'];
  $data_emissao = Date::toUS($_POST['data_emissao']);
  $cabecalho = $_POST['cabecalho'];

  $sql = "UPDATE INTO proposta SET nome_proposta='$nome_proposta', cliente_id='$cliente_id', data_emissao='$data_emissao', cabecalho='$cabecalho', WHERE id='$id' ";
  try{
    $insert = Db::insert($sql, [
      $nome_proposta, $cliente_id, $data_emissao, $cabecalho
    ]); 
    
    $_SESSION['msg'] = "<p style='color:green;'>Proposta alterada com sucesso !";

  }catch(Exception $e){


  }
  

}

$query = "select * from proposta";
$data = Db::query($query);

$query = "select * from cliente";
$clientes = Db::query($query);

$query = "select * from item";
$item = Db::query($query);

?>






<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Editar Proposta</span>
      <br><br>
    </div>
    <div class="form">
        <form action="" class="new" method="post">
          <div class="proposta-details">

              
                
            <div class="input-box">
              <?php foreach ($data as $p){?>
                <input type="hidden" name="id" value="<?php echo $p['id']; ?>">
                <span class="details">Nome da Proposta:</span>
                <input type="text" name="nome_proposta" value="<?php echo $p['nome_proposta']?>" id="box" placeholder="Nome da Proposta...">
              <?php }?>
            </div>

            <div class="input-box">
              <span class="details">Cliente:</span>
              <select id="box" name="cliente_id" >
                <?php foreach ($clientes as $c) {?> 
                  <option value="<?= $c['id']?>"><?= $c['nome']?></option>
                <?php }?>
              </select>
            </div>

            <div class="input-box">
              <span class="details">Item:</span>
              <select name="item" id="box">
                <?php foreach ($item as $i) {?> 
                  <option value="<?= $i['produto']?>"><?= $i['produto']?></option>
                <?php }?>
              </select>
            </div>

            <div class="input-box">
              <span class="details">Data de Emissão:</span>
              <input type="date" maxlength="10" id="saida" name="data_emissao" value="29/01/2016"/>
            </div>

            <div class="input-box">
              <span class="details">Observação:</span>
              <input type="text" id="caixa" name="cabecalho"  />
            </div>

            <br>
            <div class="button">
              <button class="submit" type="submit" name="edit_proposta" value="1" >Editar Proposta</button>
            </div>


          </div>
          
          
        </form>
            
    </div>