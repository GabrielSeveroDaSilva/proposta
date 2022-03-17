<?php

require_once "./class/class.php";
Db::connect();

if (isset($_POST['edit_proposta']) && $_POST['edit_proposta']==1){

  $nome_proposta = $_POST['nome_proposta'];
  $cliente_id = $_POST['cliente_id'];
  $data_emissao = Date::toUS($_POST['data_emissao']);
  $cabecalho = $_POST['cabecalho'];

  $query = "SELECT * FROM usuario WHERE email = :email && senha = :senha ";

  $data = Db::query($query,[
      'email' => $email,
      'senha' => $senha
  ]);

  

}




$query = "select * from cliente";
$clientes = Db::query($query);

$query = "select * from item";
$item = Db::query($query);