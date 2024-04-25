<?php
function consultarProducto($codigoBarra){
    //se utiliza una api para consultar el producto y dar un precio recomendado
    $url='https://api.productlookup.com/?barcode=' .$codigoBarra;
    $response= file_get_contents($url); //la funcion file_get_constents
    $data= json_decode($response,true);
    //retorno los datos en forma de array
    return $data;
}
if (isset($_GET['codigoBarra'])) {
    $condigoBarra=$_GET['codigoBarra'];
    $producto= consultarProducto($codigoBarra);
    echo "Nombre del producto: " .$producto['nombre']. "<br>";
    echo "Precio del producto: " .$producto['precio']. "<br>";
}
?>