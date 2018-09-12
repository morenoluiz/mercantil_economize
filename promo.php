<?php 
include 'promocao/controler-promocao.php';
?>	
<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/meuestilo.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <form method="POST" action ="index.php">


        <!-- CAMPO id --> 
        <div class="form-group">
            <label for="id">id:</label>
            <input type="text" class="form-control" id="id" name="id" aria-describedby="id" placeholder="Digite seu id">
            <small id="id" class="form-text text-muted">coloque o id.</small>
        </div>

        <!-- CAMPO descricao --> 
        <div class="form-group">
            <label for="descricao">descricao:</label>
            <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricao" placeholder="digite a descricao do produto">
            <small id="descricao" class="form-text text-muted">preencha apenas com descricao.</small>
        </div>

        <!-- CAMPO imagem --> 
        <div class="form-group">
            <label for="imagem">imagem</label>
            <input type="imagem" class="form-control" id="" name="imagem" aria-describedby="imagem" placeholder="imagem">
            <small id="imagem" class="form-text text-muted">Não compartilhe imagem com ninguém.</small>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">nao sou um robô</label>
        </div>

        <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
    </form>


   

    </div>
</body> 
</html>