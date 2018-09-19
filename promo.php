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
    <form method="POST" action ="" enctype="multipart/form-data">

        <!-- CAMPO descricao --> 
        <div class="form-group">
            <label for="descricao">descricao:</label>
            <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricao" placeholder="digite a descricao do produto">
            <small id="descricao" class="form-text text-muted">preencha apenas com descrição.</small>
        </div>

        <!-- CAMPO imagem --> 
        <div class="form-group">
            <label for="imagem">imagem</label>
            <input type="file" class="form-control" aria-describedby="imagem"  name ="file"> 
            <small id="imagem" class="form-text text-muted">Não compartilhe imagem com ninguém.</small>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Não sou um robô</label>
        </div>

        <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
    </form>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Descricao</th>
      <th scope="col">Imagem</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
   
    <?php
  foreach($listadepromocao as $pr){//$pr
      
      
  ?>
      
    <tr>
        <th scope="row">
            <?php echo  $pr['id']; ?>
        </th>
          
        <td><?php echo $pr['descricao'];?></td>
          
        <td><img  src="img/<?php echo $pr['imagem'];?>"> </td>
        
          <td><a href="?id=2" class="btn btn-info">Deletar</a>
            <a  class="btn btn-info">Editar</a>
        </td>
    </tr>   
<?php
      }
      ?>
  </tbody>
</table>


   

    </div>
</body> 
</html>