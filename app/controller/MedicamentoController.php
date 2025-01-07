<?php
require_once '../app/config/conexion.php';
require_once '../app/model/Medicamento.php';

class MedicamentoController {
    private $modelo;
    public function __construct($conexion) {
        $this->modelo = new Medicamento($conexion); 
    }
    public function index() {
        $medicamentos = $this->modelo->obtenerTodos();
        require '../app/view/medicamento/index.php'; 
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['idMedicamento'] ?? null;
            $nombre= $_POST['nombreMed'];
            $pro = $_POST['codProveedor'];
            $detalle = $_POST['detalle'];
            $precio = $_POST['precio'];
            if (!empty($id)) {
                $this->modelo->actualizar($id, $nombre, $pro,$detalle,$precio);
            } else {
                $this->modelo->agregar($nombre, $pro,$detalle,$precio);
            }
            header('Location: enrutador.php?controller=medicamento&action=index');

        } else {
            require_once '../app/view/medicamento/create.php';
        }
        
    }
    public function edit() {
        $idMed = $_GET['id'];
        $medicamento = $this->modelo->obtenerPorId($idMed);
        require '../app/view/medicamento/create.php';
    }
    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->modelo->eliminar($id);
            header('Location: enrutador.php?controller=medicamento&action=index');
        }
    }
}
?>




