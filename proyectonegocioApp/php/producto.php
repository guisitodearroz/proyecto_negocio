<?php
//Creo el objeto producto
    class Producto{
        private $id;
        private $nombre;
        private $codigoBarras;
        private $precio;
        private $stock;
        //constructor
        public function __contructor($id,$nombre,$codigoBarras,$precio,$stock) {
            $this->id=$id;
            $this->nombre=$nombre;
            $this->codigoBarra=$codigoBarras;
            $this->precio=$precio;
            $this->stock=$stock;
        }
        //metodos getter
        public function getID(){
            return $this->id;
        }
        public function getNombre(){
            return $this->nombre;
        }
        
        public function getcodigoBarra(){
            return $this->codigoBarra;
        }
        
        public function getPrecio(){
            return $this->precio;
        }
        
        public function getStock(){
            return $this->stock;
        }
        //metodos setter
        public function setPrecio($precio){
            $this->precio=$precio;
        }
        public function setStock($stock){
            $this->stock=$stock;
        }
    }

?>