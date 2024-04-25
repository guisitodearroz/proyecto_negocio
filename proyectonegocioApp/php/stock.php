<?php
class stock{
    private $producto;
    //constructor
    public function __contructor(){
        $this->producto= array();
    }
    //metodo para agregar productos
    public function agregarProducto($producto){
        $this->producto[]= $producto;
    }
    public function buscarProductoCodigoBarra($codigoBarra){
        foreach ($this->producto as $producto) {
            if ($producto->getCodigoBarras() == $codigoBarra) {
                return $producto;
            }
        }
        return null; //no se encontro el producto
    }
    //metodo para actualizar el stock 
    public function actualizarStock($codigoBarra,$cantidad){
        $producto= $this->buscarProductoCodigoBarra($codigoBarra);
        if ($producto) {
            $producto->setStock($producto->getStock + $cantidad);
            return true;
        }else {
            return false;
        }
    }
}
?>