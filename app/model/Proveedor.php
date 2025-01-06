<?php
require_once '../app/config/conexion.php';

class Proveedor {
    private $conexion;
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    public function obtenerTodos() {
        $query = "SELECT * FROM proveedor"; 
        $resultado = $this->conexion->query($query); 
        return $resultado->fetch_all(MYSQLI_ASSOC); 
    }
    public function agregar($nombre, $celular,$direccion) {
        $query = "INSERT INTO proveedor (nombrePro, celularPro,direccion) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("sss", $nombre, $celular,$direccion);
        return $stmt->execute();
    }
    public function obtenerPorId($id) {
        $query = "SELECT * FROM proveedor WHERE idProveedores = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function actualizar($id, $nombre, $celular,$direccion) {
        $query = "UPDATE proveedor SET nombrePro = ?, celularPro = ? ,direccion= ? WHERE idProveedores = ?"; 
        $stmt = $this->conexion->prepare($query); 
        $stmt->bind_param("sssi", $nombre, $celular, $direccion,$id);
        return $stmt->execute(); 
    }
    public function eliminar($id) {
        $query = "DELETE FROM proveedor WHERE idProveedores = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        return $stmt->execute(); 
    }
}
?>