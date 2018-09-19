<?php
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
        if($result){echo "meu nome: ".$_POST['meunome']." <img src='$onde_salvar'/>";}

	} else { echo 'Arquivo invpalido, tente novamente com as extensões permitidas'; }
	
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Single Upload Form with PHP</title>
  </head>
  <body>
  
	<form method="POST" action="upload.php" enctype="multipart/form-data">
		<label>Nome:</label>
        <input type="text" name="meunome">
        
        <label for="file"> Pick a file :  </label>
		<input type="file" name ="file"> 
		<input type="submit" value = "Upload">
	</form>
  
      
  
    
  </body>
</html>