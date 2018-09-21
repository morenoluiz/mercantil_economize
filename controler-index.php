<?php 
include 'promocao/model-promocao.php';
include 'produto/model-produto.php';


$modelo = new ModelPromocao();
$modeloProduto = new ModelProduto();
$listadepromocao = $modelo->listar();

foreach($listadepromocao as $indice=>$pr) { 
    $listadepromocao[$indice]['produtos'] = $modeloProduto->listarProdutosPorPromocao($pr['id']);
}

?>