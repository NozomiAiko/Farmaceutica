<?php
require_once '../app/config/conexion.php';

class Cliente {
    private $conexion;
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    public function obtenerTodos() {
        $query = "SELECT * FROM cliente"; 
        $resultado = $this->conexion->query($query); 
        return $resultado->fetch_all(MYSQLI_ASSOC); 
    }
    public function agregar($nombre, $nit) {
        $query = "INSERT INTO cliente (nombreCli, nit) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ss", $nombre, $nit);
        return $stmt->execute();
    }
    public function obtenerPorId($id) {
        $query = "SELECT * FROM cliente WHERE idCliente = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function actualizar($id, $nombre,$nit) {
        $query = "UPDATE cliente SET nombreCli = ?, nit = ? WHERE idCliente = ?"; 
        $stmt = $this->conexion->prepare($query); 
        $stmt->bind_param('ssi',$nombre, $nit,$id);
        return $stmt->execute(); 
        
    }
    public function eliminar($id) {
        $query = "DELETE FROM cliente WHERE idCliente = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        return $stmt->execute(); 
    }
}
?>

