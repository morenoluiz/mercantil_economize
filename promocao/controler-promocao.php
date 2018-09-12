<?php 
include 'model-promocao.php';

if (isset($_POST['comprar'])) {

$modelo = new ModelPromocao();

$promocao = new promocao();
$promocao->setDescricao($_POST['descricao']);
$promocao->setImagem($_POST['imagem']);

$modelo->adicionar($promocao);

}
var_dump($_POST);

?>