<?php
require_once '../app/config/conexion.php';
class Ventam {
    private $conexion;
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    public function obtenerTodos() {
        $query = "SELECT * FROM ventam"; 
        $resultado = $this->conexion->query($query); 
        return $resultado->fetch_all(MYSQLI_ASSOC); 
    }
    public function agregar($fecha, $total,$codCliente,$metodoPago,$codEmpleado) {
        $query = "INSERT INTO ventam (fecha, total, codCliente,metodoPago, codEmpleado) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("sdisi", $fecha, $total,$codCliente,$metodoPago,$codEmpleado);
        return $stmt->execute();
    }
    public function obtenerPorId($id) {
        $query = "SELECT * FROM ventam WHERE idVentaM = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function actualizar($id, $fecha, $total,$codCliente,$metodoPago,$codEmpleado) {
        $query = "UPDATE ventam SET fecha = ?, total = ?,codCliente= ? , metodoPago= ?, codEmpleado= ? WHERE idVentaM = ?"; 
        $stmt = $this->conexion->prepare($query); 
        $stmt->bind_param("sdisii", $fecha, $total,$codCliente,$metodoPago,$codEmpleado,$id);
        return $stmt->execute(); 
    }
    public function eliminar($id) {
        $query = "DELETE FROM ventam WHERE idVentaM = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        return $stmt->execute(); 
    }
}
?>