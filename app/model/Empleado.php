<?php
require_once '../app/config/conexion.php';

class Empleado {
    private $conexion;
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    public function obtenerTodos() {
        $query = "SELECT * FROM empleado"; 
        $resultado = $this->conexion->query($query); 
        return $resultado->fetch_all(MYSQLI_ASSOC); 
    }
    public function agregar($nombre, $cel,$turno) {
        $query = "INSERT INTO empleado(nombreEmp, celularEmp,turno) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("sss", $nombre, $cel, $turno);
        return $stmt->execute();
    }
    public function obtenerPorId($id) {
        $query = "SELECT * FROM empleado WHERE idEmpleado = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function actualizar($id, $nombre, $cel,$turno) {
        $query = "UPDATE empleado SET nombreEmp = ?, celularEmp = ?, turno = ? WHERE idEmpleado = ?"; 
        $stmt = $this->conexion->prepare($query); 
        $stmt->bind_param("sssi", $nombre, $cel, $turno,$id);
        return $stmt->execute(); 
    }

    public function eliminar($id) {
        $query = "DELETE FROM empleado WHERE idEmpleado = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        return $stmt->execute(); 
    }
}
?>