<?php
require_once '../app/config/conexion.php';

class Inventario {
    private $conexion;
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    public function obtenerTodos() {
        $query = "SELECT * FROM inventario"; 
        $resultado = $this->conexion->query($query); 
        return $resultado->fetch_all(MYSQLI_ASSOC); 
    }
    public function agregar($med, $cantidad) {
        $query = "INSERT INTO inventario(codMedicamento, cantidad) VALUES ( ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ii", $med, $cantidad);
        return $stmt->execute();
    }
    public function obtenerPorId($id) {
        $query = "SELECT * FROM inventario WHERE idInventario = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function actualizar($id, $med, $cantidad) {
        $query = "UPDATE inventario SET codMedicamento = ?, cantidad = ? WHERE idInventario = ?"; 
        $stmt = $this->conexion->prepare($query); 
        $stmt->bind_param("iii", $med, $cantidad,$id);
        return $stmt->execute(); 
    }

    public function eliminar($id) {
        $query = "DELETE FROM inventario WHERE idInventario = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        return $stmt->execute(); 
    }
}
?>