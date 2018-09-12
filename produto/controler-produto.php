<?php 
include 'model-produto.php';

if (isset($_POST['comprar'])) {

$modelo = new ModelProduto();

$produto = new produto();
$produto->setDescricao($_POST['descricao']);
$produto->setQuantidade($_POST['quantidade']);
$produto->setPreco($_POST['preco']);
$produto->setMedida($_POST['medida']);

$modelo->adicionar($produto);

}
var_dump($_POST);

?>