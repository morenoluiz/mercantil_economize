<?php 
include 'model-produto.php';

if (isset($_POST['cadastrar'])) {

    $modelo = new ModelProduto();

    $produto = new Produto();
    $produto->setDescricao($_POST['descricao']);
    $produto->setQuantidade($_POST['quantidade']);
    $produto->setPreco($_POST['preco']);
    $produto->setMedida($_POST['medida']);
    $produto->setPromocao_id($_POST['promocao_id']);
    
    $modelo->adicionar($produto);

}

if (isset($_POST['editar'])) {

    $modelo = new ModelProduto();

    $produto = new Produto();
    $produto->setId($_POST['id']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setQuantidade($_POST['quantidade']);
    $produto->setPreco($_POST['preco']);
    $produto->setMedida($_POST['medida']);
    $produto->setPromocao_id($_POST['promocao_id']);
    
    $modelo->editar($produto);

}

if (isset($_POST['remover'])) {

    $modelo = new ModelProduto();

    $produto = new Produto();
    $produto->setId($_POST['id']);
    
    $modelo->remover($produto);

}
//listar

    $modelo = new ModelProduto();
    $listadeprodutos = $modelo->listar();
    $modelo = new ModelPromocao();
    $listadepromocoes = $modelo->listar();

var_dump($_POST);

?>