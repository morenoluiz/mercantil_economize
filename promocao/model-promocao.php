<?php
include'promocao.php';

class ModelPromocao {

     public function adicionar(Promocao $promocao){
         include 'bd.php';
         
         $query = "INSERT INTO promocao (descricao, imagem) VALUES (:descricao, :imagem)";

         $statement = $connection->prepare($query);

         $valores = array();
         $valores[':descricao'] = $promocao->getDescricao();
         $valores[':imagem'] = $promocao->getImagem() ;
         

         $result = $statement->execute($valores);

         //if(  empty($result) ){
               // print "<br>Nao inseriu promoção.";
              //  print_r( $statement->errorInfo());
        // }else{
              //  print "<br>Deu certo inserir promoção.";
       // }
     }
     public function listar(){
        include 'bd.php';
        
        $query = "SELECT id, descricao, imagem FROM promocao";
        
        $statement = $connection->prepare($query);
        
        //executar a query
        $result = $statement->execute();
        $result = $statement->fetchAll(); 
        return $result;
    }

    
    public function editar(Promocao $promocao){
        include 'bd.php';
        
        
        $query = "UPDATE promocao SET descricao = :descricao, imagem = :imagem WHERE id = :id";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':id'] = $promocao->getId();
        $valores[':descricao'] = $promocao->getDescricao();
        $valores[':imagem'] = $promocao->getImagem();
        
        $result = $statement->execute($valores);
        
        if(  empty($result)  ){
            echo "Alterar promoção deu erro.";
        }else{
            echo "Alterar promoção deu certo.";
        } 
    }
    
    public function remover($id){
        include 'bd.php';
        
        $query = "DELETE FROM promocao WHERE id = :id";
        
        $statement = $connection->prepare($query);
        
        
        $valores = array();
        $valores[':id'] = $id;
    
        $result = $statement->execute($valores);
        
        
        if(  empty($result)  ){
            echo "Remover promoção deu erro.";
        }else{
            echo "Remover promoção deu certo.";
        }         
        
    }
                

}

?>