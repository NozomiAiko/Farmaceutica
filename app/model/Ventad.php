<?php
require_once '../app/config/conexion.php';

class Ventad {
    private $conexion;
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    public function obtenerTodos() {
        $query = "SELECT * FROM ventad"; 
        $resultado = $this->conexion->query($query); 
        return $resultado->fetch_all(MYSQLI_ASSOC); 
    }
    public function agregar($codVentaM, $codMed, $cantidad, $precio) {
        $query = "INSERT INTO ventad (codVentaM, codMedicamento, cantidad, precio) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("iiid", $codVentaM, $codMed, $cantidad, $precio);
        return $stmt->execute();
    }
    public function obtenerPorId($id) {
        $query = "SELECT * FROM ventad WHERE idVentaD = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function actualizar($id, $codVentaM, $codMed, $cantidad, $precio) {
        $query = "UPDATE ventad SET codVentaM = ?, codMedicamento = ? ,cantidad = ?, precio= ? WHERE idVentaD = ?"; 
        $stmt = $this->conexion->prepare($query); 
        $stmt->bind_param("iiidi", $codVentaM, $codMed, $cantidad, $precio,$id);
        return $stmt->execute(); 
    }

    public function eliminar($id) {
        $query = "DELETE FROM ventad WHERE idVentaD = ?"; 
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id); 
        return $stmt->execute(); 
    }
}
?>