//funcion para capturar el codigo de barras
function initBarCodeScanner() {
    Quagga.init({
        inputStream : {
            name : "Live",
            type : "LiveStream",
            target: document.querySelector('#scanner-container'),
            constrains: {
                width: 640,
                heigth: 480,
                facingMode: "environment" //me permite usar la camara trasera del dispositivo
            },

        },
        decoder: {
            readers: ["ean_reader"] //decodificara respecto a los codigos europeos que es lo normal en los consumibles
        }, function(err) {
            if (err) {
                console.log("Error en iniciar Quagga: ", err);
                return;
            }
            console.log("Quagga inicializado correctamente");
            Quagga.start();
        }
    });
    Quagga.onDetected(function(result) {
        var code = result.codeResult.code;
        console.log("Codigo de barras detectado: "+ code);
    })
}
//funcion para buscar en la base de datos si es que existe un producto con ese codigo
function buscarProductoEnBd(codigo) {
    $.ajax({
        url:'', //poner la direccion de mi archivo php donde hago la consulta en la base 
        method: 'GET',
        data: {codigo_barras: codigo},
        success: function(response){
            //vericacion de producto existente
            if (response.producto) {
                //el producto esta registrado
                mostrarInfoProducto(response.producto);
            }else{
                //el producto no esta registrado
                mostrarMensajeProductoNoRegistrado(codigo);
            }
        },
        error: function(xhr,status, error) {
            console.error("Error al buscar en la base de datos: ",error );
        }
    });
}
//funcion para carga rapida
function cargaRapida(codigo) {
    $.ajax({
        url:'../api/product_lookup.php',
        method: 'GET',
        data: {codigo_barras: codigo},
        success: function(response) {
            mostrarInfoProducto(response.producto);0
        },
        error: function(xhr,status,error) {
            console.error("Error al obtener la informacion de la API: ", error);
        }
    });
}

//funcion para mostrar la informacion de los productos
function mostrarInfoProducto(producto) {
    
}