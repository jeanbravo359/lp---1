<?php
include_once "produc.php";
include_once "conexionsimp.php";
echo "<h1>Añadir Producto</h1>";
?>
    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="NombreProducto" placeholder="Ingrese Nombre de Producto"><br>
        <input type="text" name="Peso" placeholder="Ingrese Peso"><br>
        <input type="text" name="Precio" placeholder="Ingrese Precio"><br>
        <input type="text" name="Tipo_Producto" placeholder="Ingrese Tipo de Producto"><br>
        <input type="text" name="Descripcion" placeholder="Ingrese Descripcion"><br>
        <input type="text" name="Categoria" placeholder="Ingrese Categoria"><br>
        <input type="text" name="idTienda" placeholder="Ingrese idTienda"><br>
        <input type="submit" name='guardar' value='guardar'>
    </form>
<?php
if (isset($_POST["guardar"])) {
    $pd = new Productos();
    $pd->setNombreProducto($_POST["NombreProducto"]);
    $pd->setPeso($_POST["Peso"]);
    $pd->setPrecio($_POST["Precio"]);
    $pd->setTipo_Producto($_POST["Tipo_Producto"]);
    $pd->setDescripcion($_POST["Descripcion"]);
    $pd->setCategoria($_POST["Categoria"]);
    $pd->setidTienda($_POST["idTienda"]);
    if($pd->insertar()){
        echo "Se creo el producto";
    }else{
        echo "Error, el producto no pudo ser creado";
    }
}