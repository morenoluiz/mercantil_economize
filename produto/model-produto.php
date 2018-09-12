<?php
include'produto.php';

class ModelProduto {

     public function adicionar(Produto $produto){
         include '../bd.php';
         
         $query = "INSERT INTO produto (descricao, quantidade, preco, medida, promocao_id) VALUES (:descricao, :quantidade, :preco, :medida, :promocao_id)";

         $statement = $connection->prepare($query);

         $valores = array();
         $valores[':descricao'] = $produto->getDescricao();
         $valores[':quantidade'] = $produto->getQuantidade();
         $valores[':preco'] = $produto->getPreco();
         $valores[':medida'] = $produto->getMedida();
         
         $result = $statement->execute($valores);

         if(  empty($result) ){
                print "<br>Nao inseriu";
                print_r( $statement->errorInfo());
         }else{
                print "<br>Deu certo inserir";
        }
     }
     public function listar(){
        include '../bd.php';
        
        $query = "SELECT id, descricao, quantidade, preco, medida, promocao_id FROM produto";
        
        $statement = $connection->prepare($query);
        
        //executar a query
        $result = $statement->execute();
     
        return $result;
    }

    
    public function editar(Produto $produto){
        include '../bd.php';
        
        
        $query = "UPDATE produto SET descricao = :descricao, quantidade = :quantidade, preco = :preco, medida = :medida WHERE id = :id";
        
        $statement= $connection->prepare($query);
        
        $valores[':id'] = $produto->getId();
        $valores[':descricao'] = $produto->getDescricao();
        $valores[':quantidade'] = $produto->getQuantidade();
        $valores[':preco'] = $produto->getPreco();
        $valores[':medida'] = $produto->getMedida();
        
        $result = $statement->execute($valores);
        
        if(  empty($result)  ){
            echo "Alterar produto deu erro.";
        }else{
            echo "Alterar produto deu certo.";
        } 
    }
    
    public function remover($id){
        include '../bd.php';
        
        $query = "DELETE FROM produto WHERE id = :id";
        
        $statement = $connection->prepare($query);
        
        
        $valores = array();
        $valores[':id'] = $id;
    
        $result = $statement->execute($valores);
        
        
        if(  empty($result)  ){
            echo "Remover produto deu erro.";
        }else{
            echo "Remover produto deu certo.";
        }         
        
    }
                

}

?>