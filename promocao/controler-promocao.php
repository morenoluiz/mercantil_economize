<?php 
include 'model-promocao.php';

echo $_GET['id'];

if (isset($_POST['cadastrar'])) {

    $modelo = new ModelPromocao();

    $promocao = new Promocao();
    $promocao->setDescricao($_POST['descricao']);
    
    
    //Verifica se aconteceu falha no upload
	if($_FILES['file']['error'] > 0) { echo 'Error during uploading, try again'; }
	
	//We won't use $_FILES['file']['type'] to check the file extension for security purpose
	
	//Coloca as extensões permitidas
	$extensoesPermitidas = array( 'jpg', 'jpeg', 'png', 'gif' );
	
	//Extrai a extensão do no nome do arquivo para ver se eh permitido
    //substr return ".jpg"
    //Strrchr return "jpg"
	$extensaoDoArquivo = strtolower( substr( strrchr($_FILES['file']['name'], '.') ,1) ) ;
	//Verifica se a extensão eh uma das permitidas	
	if (in_array($extensaoDoArquivo, $extensoesPermitidas) ) { 
	
        //Faz o upload do arquivo para o servidor
        //nome_imagem eh o que deve ir para o banco 
        $nome_imagem = $_FILES['file']['name'];
        //salva a imagem da pasta img/nome_arquivo.extensao
        $onde_salvar = "img/$nome_imagem";
        //move o arquivo para dentro da pasta img
        $result = move_uploaded_file($_FILES['file']['tmp_name'], $onde_salvar);

        //mostra a imagem na tag img
        if($result){echo " <img src='$onde_salvar'/>";}

	} else { echo 'Arquivo invpalido, tente novamente com as extensões permitidas'; }
    
    
    
    
    $promocao->setImagem($nome_imagem);

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

if (isset($_GET['remover'])) {

    $modelo = new ModelPromocao();

    $promocao = new Promocao();
    $promocao->setId($_GET['id']);

    $modelo->remover($promocao);

}
//listar

    $modelo = new ModelPromocao();
    $listadepromocao = $modelo->listar();

var_dump($_POST);

?>