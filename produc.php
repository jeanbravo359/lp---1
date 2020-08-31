<?php 
include_once "conexionsimp.php";

class Productos   extends dbconn 
{
    private $idProducto;
    private $NombreProducto;
    private $Peso;
    private $Precio;
    private $Tipo_Producto;
    private $Descripcion;
    private $Categoria;
    private $idTienda;

    public function getidProducto()
    {
        return $this->idProducto;
    }

    public function setidProducto($idProducto): void
    {
        $this->idProducto = $idProducto;
    }

    public function getNombreProducto()
    {
        return $this->NombreProducto;
    }

    public function setNombreProducto($NombreProducto): void
    {
        $this->NombreProducto = $NombreProducto;
    }
    
    public function getPeso()
    {
        return $Peso->Peso;
    }

    public function setPeso($Peso): void
    {
        $this->Peso = $Peso;
    }

    public function getPrecio()
    {
        return $this->Precio;
    }

    public function setPrecio($Precio): void
    {
        $this->Precio = $Precio;
    }

    public function getTipo_Producto()
    {
        return $this->Tipo_Producto;
    }

    public function setTipo_Producto($Tipo_Producto): void
    {
        $this->Tipo_Producto = $Tipo_Producto;
    }

    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    public function setDescripcion($Descripcion): void
    {
        $this->Descripcion = $Descripcion;
    }

    public function getCategoria()
    {
        return $this->Categoria;
    }

    public function setCategoria($Categoria): void
    {
        $this->Categoria = $Categoria;
    }
    public function getidTienda()
    {
        return $this->idTienda;
    }

    public function setidTienda($idTienda): void
    {
        $this->idTienda = $idTienda;
    }
      public function mostrarproductos(){
          $conexionLogo=$this->conexion();
    $resultados=$conexionLogo->query("select * from productos");
    
    return $resultados;
    } 

    public function insertar(){
        $conexionLogo=$this->conexion();
        $sql = "INSERT INTO Usuario(NombreProducto,Peso,Precio,
        Tipo_Producto,Descripcion,Categoria,Nro_idTienda)
                VALUES (?,?,?,?,?,?,?,?)";
        $resultados = $conexionLogo->query($sql);

        return $resultados;
    }
/*
    public function actualizar(){
        $myConn = $this->conexion();
        $sql = "UPDATE Usuario
                SET Nombre_Usuario = ?, Apellido = ?,email= ?, contrasena= ?, Dni = ?, nro_phone = ?, Direccion = ?
                WHERE idUsuario=?";

        $stmt = $myConn->prepare($sql);
        $stmt->bind_param('vvvviivv',$this->Nombre_Usuario, $this->Apellido, $this->email, $this->$contrasena, $this->Dni, $this->nro_phone, $this->$Direccion, $this->idUsuario);

        $resultados = $stmt->execute();
        $stmt->close();
        $this->cerrar();

        return $resultados;
    }

    public function eliminar(int $id){
        $myConn = $this->conexion();
        $sql = "DELETE FROM Usuario WHERE idUsuario=?";

        $stmt = $myConn->prepare($sql);
        $stmt->bind_param('i', $id);

        $resultados = $stmt->execute();
        $stmt->close();

        $this->cerrar();

        return $resultados;
    } 
    */
}