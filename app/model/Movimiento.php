<?php
require_once '../app/config/conexion.php';

class Movimiento {
    private $conexion;
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    public function obtenerTodos() {
        $query = "SELECT * FROM movimiento"; 
        $resultado = $this->conexion->query($query); 
        return $resultado->fetch_all(MYSQLI_ASSOC); 
    }
    public function agregar($codMed, $operacion,$codInventario) {
        $query = "INSERT INTO movimiento (codMedicamento, operacion,codInventario) VALUES (?, ?,?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("iii", $codMed, $operacion,$codInventario);
        return $stmt->execute();
    }
    public function obtenerPorId($id) {
        $query = "SELECT * FROM movimiento WHERE idMovimiento = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function actualizar($id, $codMed, $operacion,$codInventario) {
        $query = "UPDATE movimiento SET codMedicamento = ?, operacion = ?, codInventario= ? WHERE idMovimiento = ?"; 
        $stmt = $this->conexion->prepare($query); 
        $stmt->bind_param("iiii", $codMed, $operacion,$codInventario,$id);
        return $stmt->execute(); 
    }
    public function eliminar($id) {
        $query = "DELETE FROM movimiento WHERE idMovimiento = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        return $stmt->execute(); 
    }
}
?>