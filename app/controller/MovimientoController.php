<?php
require_once '../app/config/conexion.php';
require_once '../app/model/movimiento.php';

class MovimientoController {
    private $modelo;
    public function __construct($conexion) {
        $this->modelo = new Movimiento($conexion); 
    }
    public function index() {
        $movimientos = $this->modelo->obtenerTodos();
        require '../app/view/movimiento/index.php'; 
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['idMovimiento'] ?? null;
            $codMed = $_POST['codMedicamento'];
            $operacion = $_POST['operacion'];
            $codInventario = $_POST['codInventario'];
            if (!empty($id)) {
                $this->modelo->actualizar($id,$codMed,$operacion,$codInventario);
            } else {
                $this->modelo->ag($codMed,$operacion,$codInventario);
            }
            header('Location: enrutador.php?controller=movimiento&action=index');
        } else {
            require_once '../app/view/movimiento/create.php';
        }
    }
    public function edit() {
        $idMov = $_GET['id'];
        $movimiento = $this->modelo->obtenerPorId($idMov);
        require '../app/view/movimiento/create.php';
    }
    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->modelo->eliminar($id);
            header('Location: enrutador.php?controller=movimiento&action=index');
        }
    }
}
?>
