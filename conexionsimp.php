<?php

class dbconn{ 
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db="LOGO";
    private 
    protected function conexion(){
        $conexionLogo= new mysqli($this->host,$this->username,$this->password,$this->db);
        return $conexionLogo;
    }
    protected function cerrar():void{
        if($this->conexionLogo != null ){
            $this->conexionLogo->close();
        }
    }

} /*
$conexionLogo=new mysqli("localhost","root","","Logo");
if($conexionLogo->connect_errno){
    echo"fallo <br>".$myConn->connect_errno;
}else{
    //opcion 1 :fetch_assoc()
    /*
    $resultados=$conexionLogo->query(" select * from productos");
    for($i=0;$i<$resultados->num_rows;$i++){ 
        $Productos= $resultados->fetch_assoc();
        echo  "idProducto:".$Productos["idProducto"]."<br>".
                "NombreProducto:".$Productos["NombreProducto"]."<br>".
                "Peso:".$Productos["Peso"]."<br>".
                "Precio:".$Productos["Precio"]."<br>".
                "Tipo_Producto:".$Productos["Tipo_Producto"]."<br>".
                "Descripcion:".$Productos["Descripcion"]."<br>".
                "Categoria:".$Productos["Categoria"]."<br>".
                "idTienda:".$Productos["idTienda"]."<br>--------------";
    }  */
    //opcion 2 :fech_all
   /* $resultados=$conexionLogo->query(" select * from productos");
    $pro= $resultados->fetch_all();
    foreach($pro as $Productos){ 
        
        echo  "idProducto:".$Productos[0]."<br>".
                "NombreProducto:".$Productos[1]."<br>".
                "Peso:".$Productos[2]."<br>".
                "Precio:".$Productos[3]."<br>".
                "Tipo_Producto:".$Productos[4]."<br>".
                "Descripcion:".$Productos[5]."<br>".
                "Categoria:".$Productos[6]."<br>".
                "idTienda:".$Productos[7]."<br>--------------";
} 
} */
?>