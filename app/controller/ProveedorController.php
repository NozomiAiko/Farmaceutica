<?php
require_once '../app/config/conexion.php';
require_once '../app/model/Proveedor.php';

class ProveedorController {
    private $modelo;
    public function __construct($conexion) {
        $this->modelo = new Proveedor($conexion); 
    }
    public function index() {
        $proveedores = $this->modelo->obtenerTodos();
        require '../app/view/proveedor/index.php'; 
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['idProveedores'] ?? null;
            $nombre = $_POST['nombrePro'];
            $celular = $_POST['celularPro']; 
            $direccion =$_POST['direccion'];
            
            if (!empty($id)) {
                $this->modelo->actualizar($id,$nombre,$celular,$direccion);
            } else {
                $this->modelo->agregar($nombre, $celular, $direccion);
            }
            header('Location: enrutador.php?controller=proveedor&action=index');
        } else {
            require_once '../app/view/proveedor/create.php';
        }
    }
    public function edit() {
        $idPro = $_GET['id'];
        $proveedor = $this->modelo->obtenerPorId($idPro);
        require '../app/view/proveedor/create.php';
    }
    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->modelo->eliminar($id);
            header('Location: enrutador.php?controller=proveedor&action=index');
        }
    }
}
?>
