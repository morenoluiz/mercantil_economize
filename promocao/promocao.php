<?php 
    class Promocao{
        private $id;
        private $descricao;
        private $imagem;
        
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
        
        public function getImagem(){
            return $this->imagem;
        }
        
        public function setImagem($a){
             $this->imagem = $a;
        }
       
    }

?>