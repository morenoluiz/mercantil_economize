<?php 
include 'model-promocao.php';

if (isset($_POST['cadastrar'])) {

    $modelo = new ModelPromocao();

    $promocao = new Promocao();
    $promocao->setDescricao($_POST['descricao']);
    $promocao->setImagem("2.jpg");

    $modelo->adicionar($promocao);

}

if (isset($_POST['editar'])) {

    $modelo = new ModelPromocao();

    $promocao = new Promocao();
    $promocao->setId($_POST['id']);
    $promocao->setDescricao($_POST['descricao']);
    $promocao->setImagem("2.jpg");

    $modelo->editar($promocao);

}

if (isset($_POST['remover'])) {

    $modelo = new ModelPromocao();

    $promocao = new Promocao();
    $promocao->setId($_POST['id']);

    $modelo->remover($promocao);

}
//listar

    $modelo = new ModelPromocao();
    $listadepromocao = $modelo->listar();

var_dump($_POST);

?>