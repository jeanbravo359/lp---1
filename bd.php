<?php
$myConn = new mysqli("localhost","root","12082001","newschema");
if($myConn->connect_errno){
    echo "fallo: ".$myConn->connect_errno;
}else{
    echo "Conexion exitosa<br>";
    $resultados=$myConn->query("select * from alumnos");
    $data=$resultados->fetch_assoc();
    echo $resultados->num_rows;
    foreach ($data as $usuario){
        echo $usuario;
    }
}