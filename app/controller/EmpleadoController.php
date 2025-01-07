<?php
require_once '../app/config/conexion.php';
require_once '../app/model/Empleado.php';

class EmpleadoController {
    private $modelo;
    public function __construct($conexion) {
        $this->modelo = new Empleado($conexion); 
    }
    public function index() {
        $empleados = $this->modelo->obtenerTodos();
        require '../app/view/empleado/index.php'; 
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['idEmpleado'] ?? null;
            $nombre = $_POST['nombreEmp'];
            $cel = $_POST['celularEmp']; 
            $turno = $_POST['turno'];
            if (!empty($id)) {
                $this->modelo->actualizar($id, $nombre, $cel,$turno);
            } else {
                $this->modelo->agregar($nombre, $cel,$turno);
            }
            header('Location: enrutador.php?controller=empleado&action=index');
        } else {
            require_once '../app/view/empleado/create.php';
        }
    }
    public function edit() {
        $idEmp = $_GET['id'];
        $empleado = $this->modelo->obtenerPorId($idEmp);
        require '../app/view/empleado/create.php';
    }
    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->modelo->eliminar($id);
            header('Location: enrutador.php?controller=empleado&action=index');
        }
    }
    
}
?>

