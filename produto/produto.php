<?php 
    class Produto{
        private $id;
        private $descricao;
        private $quantidade;
        private $preco;
        private $medida;
        private $promocao_id;

        
        public function getId(){
            return $this->id;
        }
        
         public function setId($a){
             $this->id = $a;
        }
        
        public function getDescricao(){
            return $this->descricao;
        }
        
        public function setDescricao($a){
             $this->descricao = $a;
        }
        
        public function getQuantidade(){
            return $this->quantidade;
        }
        
        public function setQuantidade($a){
             $this->quantidade = $a;
        }
       
        public function getPreco(){
            return $this->preco;
        }
        
        public function setPreco($a){
             $this->preco = $a;
        }
        
        public function getMedida(){
            return $this->medida;
        }
        
        public function setMedida($a){
             $this->medida = $a;
        }
        
        public function getPromocao_id(){
            return $this->promocao_id;
        }
        
        public function setPromocao_id($a){
             $this->promocao_id = $a;
        }
    }

?>