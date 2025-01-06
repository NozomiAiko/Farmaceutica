<?php
require_once '../app/config/conexion.php';

class Medicamento {
    private $conexion;
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    public function obtenerTodos() {
        $query = "SELECT * FROM medicamento"; 
        $resultado = $this->conexion->query($query); 
        return $resultado->fetch_all(MYSQLI_ASSOC); 
    }
    public function agregar($nombre, $pro, $detalle, $precio) {
        $query = "INSERT INTO medicamento (nombreMed, codProveedor,detalle,precio) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("sisd", $nombre, $pro, $detalle, $precio);
        return $stmt->execute();
    }
    public function obtenerPorId($id) {
        $query = "SELECT * FROM medicamento WHERE idMedicamento = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function actualizar($id, $nombre,$pro, $detalle, $precio) {
        $query = "UPDATE medicamento SET nombreMed = ?, codProveedor = ?,detalle = ?,precio = ?  WHERE idMedicamento = ?"; 
        $stmt = $this->conexion->prepare($query); 
        $stmt->bind_param('sisdi',$nombre, $pro, $detalle, $precio, $id);
        return $stmt->execute(); 
        
    }
    public function eliminar($id) {
        $query = "DELETE FROM medicamento WHERE idMedicamento = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        return $stmt->execute(); 
    }
}
?>