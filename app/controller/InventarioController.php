<?php
require_once '../app/config/conexion.php';
require_once '../app/model/Inventario.php';

class InventarioController {
    private $modelo;
    public function __construct($conexion) {
        $this->modelo = new Inventario($conexion); 
    }
    public function index() {
        $inventarios = $this->modelo->obtenerTodos();
        require '../app/view/inventario/index.php'; 
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['idInventario'] ?? null;
            $med = $_POST['codMedicamento'];
            $cantidad = $_POST['cantidad'];
            if (!empty($id)) {
                $this->modelo->actualizar($id, $med, $cantidad);
            } else {
                $this->modelo->agregar($med, $cantidad);
            }
            header('Location: enrutador.php?controller=inventario&action=index');
        } else {
            require_once '../app/view/inventario/create.php';
        }
    }
    public function edit() {
        $idInv = $_GET['id'];
        $inventario = $this->modelo->obtenerPorId($idInv);
        require '../app/view/inventario/create.php';
    }
    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->modelo->eliminar($id);
            header('Location: enrutador.php?controller=inventario&action=index');
        }
    }
    
}
?>

