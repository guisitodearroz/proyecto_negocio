<?php
    require_once("html/header.html");
?>

    <form action="api/product_lookup.php" method="GET">
        <label for="codigo_barras">Escanea el código de barras:</label><br>
        <input type="text" id="codigo_barras" name="codigo_barras"><br><br>
        <input type="submit" value="Buscar">
    </form>
<?php
    require_once("html/footer.html");
?>