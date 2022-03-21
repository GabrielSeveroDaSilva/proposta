<?php
session_start();
include_once("Db.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome_proposta = filter_input(INPUT_POST, 'nome_proposta', SQL_VARCHAR);
$cliente_id = filter_input(INPUT_POST, 'cliente_id', FILTER_SANITIZE_NUMBER_INT);
$data_emissao = filter_input(INPUT_POST, 'data_emissao', SQL_DATE);
$cabecalho = filter_input(INPUT_POST, 'cabecalho', SQLITE3_TEXT);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE usuarios SET nome_proposta='$nome_proposta', cliente_id='$cliente_id', data_emissao='$data_emissao',cabecalho='$cabecalho', WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Proposta editado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Proposta não foi editado com sucesso</p>";
	header("Location: ?iedit_proposta?id=$id");
}
