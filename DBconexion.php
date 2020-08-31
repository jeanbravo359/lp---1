<?php
session_start();
$conexionLogo=mysqli_connect("localhost","root",
"","LOGO");
if(isset($conexionLogo)){
    echo"Conexion Exitosa<br><br>";
}
else{
    echo"Conexion Fallo";
}
?>