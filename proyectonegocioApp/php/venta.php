<?php
class venta{
    private $producto;
    private $total;
    //contructor
    public function __constructor(){
        $this->producto=array();
        $this->total=0;
    }
    //metodos para agregar productos a la venta
    public function agregarProductosVenta($producto, $cantidad){
        $this->producto[]=array('producto'->$producto, 'cantidad'->$cantidad);
        $this->total += $producto->getPrecio() * $cantidad;
    }
    //metodo para obtener la lista de productos vendidos 
    public function getProductos(){
        return $this->producto;
    }
    //metodo para el total de la venta
    public function getTotal(){
        return $this->total;
    }
}
?>