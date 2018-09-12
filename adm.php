<?php 
include 'produto/controler-produto.php';
?>	
<!DOCTYPE html>
    <html> 
        <head>
            <meta charset="UTF-8">

            <link href="css/bootstrap.min.css" rel="stylesheet" >


            <link href="web1/css/meuestilo.css" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <form method="POST" action ="adm.php">

                    
<!-- CAMPO Id --> 
                 <div class="form-group">
                        <label for="id">Id:</label>
                        <input type="text" class="form-control" id="id" name="id" aria-describedby="IdHelp" placeholder="Digite o Id do produto">
                        <small id="IdHelp" class="form-text text-muted">Preencha apenas com números.</small>
                </div>
<!-- CAMPO Descrição --> 
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricaoHelp" placeholder="Digite o nome do produto">
                    <small id="lastNameHelp" class="form-text text-muted">Preencha apenas com nome do produto.</small>
                </div>

<!-- CAMPO Quantidade --> 
                <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input type="quantidade" class="form-control" id="quantidade" name="quantidade" aria-describedby="quantidadeHelp" placeholder="Digite a quantidade">
                        <small id="quantidadeHelp" class="form-text text-muted">Preencha apenas com números.</small>
                </div>



<!-- CAMPO Preço -->
                <div class="form-group">
                        <label for="preco">Preço</label>
                        <input type="preco" class="form-control" id="preco" name="preco" aria-describedby="precoHelp" placeholder="Digite o preço">
                        <small id="precoHelp" class="form-text text-muted">Preencha apenas com números.</small>
                </div>
                    
<!-- CAMPO Medida -->
                <div class="form-group">
                        <label for="medida">Medida</label>
                        <input type="medida" class="form-control" id="medida" name="medida" aria-describedby="medidaHelp" placeholder="Digite a medida">
                        <small id="medidaHelp" class="form-text text-muted">Preencha apenas com números.</small>
                </div>
                    
<!-- CAMPO Promação_Id -->
               <div class="form-group">
                        <label for="promocao_id">Promoção_Id</label>
                        <select name="promocao_id">
                            <option value="Verduras">Verduras</option>
                            <option value="Carnes">Carnes</option>
                            <option value="Bebidas">Bebidas</option>
                            <option value="Produtos_da_Semana">Produtos_da_Semana</option>
                            
                        </select>

                        <small id="promocao_idHelp" class="form-text text-muted">Preencha apenas com números.</small>
                </div>


                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                    <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
                </form>


                

            </div>
        </body> 
</html>

   
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            
