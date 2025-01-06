<?php
require_once '../app/config/conexion.php';
require_once '../app/model/Ventam.php';

class VentamController {
    private $modelo;
    public function __construct($conexion) {
        $this->modelo = new Ventam($conexion); 
    }
    public function index() {
        $ventams = $this->modelo->obtenerTodos();
        require '../app/view/ventam/index.php'; 
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['idVentaM'] ?? null;
            $fecha = $_POST['fecha'];
            $total = $_POST['total'];
            $codCliente = $_POST['codCliente'];
            $metodoPago = $_POST['metodoPago'];
            $codEmpleado = $_POST['codEmpleado'];
            if (!empty($id)) {
                $this->modelo->actualizar($id,$fecha,$total,$codCliente,$metodoPago,$codEmpleado);
            } else {
                $this->modelo->agregar($fecha,$total,$codCliente,$metodoPago,$codEmpleado);
            }
            header('Location: index.php?controller=ventam&action=index');
        } else {
            require_once '../app/view/ventam/create.php';
        }
    }
    public function edit() {
        $id = $_GET['id'];
        $ventam = $this->modelo->obtenerPorId($id);
        require '../app/view/ventam/create.php';
    }
    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->modelo->eliminar($id);
            header('Location: index.php?controller=ventam&action=index');
        }
    }
}
?>
