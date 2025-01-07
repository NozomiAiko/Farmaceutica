<?php
require_once '../app/config/conexion.php';
require_once '../app/model/Cliente.php';

class ClienteController {
    private $modelo;
    public function __construct($conexion) {
        $this->modelo = new Cliente($conexion); 
    }
    public function index() {
        $clientes = $this->modelo->obtenerTodos();
        require '../app/view/cliente/index.php'; 
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['idCliente'] ?? null;
            $nombre= $_POST['nombreCli'];
            $nit = $_POST['nit'];
            if (!empty($id)) {
                $this->modelo->actualizar($id, $nombre, $nit);
            } else {
                $this->modelo->agregar($nombre, $nit);
            }
            header('Location: enrutador.php?controller=cliente&action=index');

        } else {
            require_once '../app/view/cliente/create.php';
        }
        
    }
    public function edit() {
        $idCli = $_GET['id'];
        $cliente = $this->modelo->obtenerPorId($idCli);
        require '../app/view/cliente/create.php';
    }
    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->modelo->eliminar($id);
            header('Location: enrutador.php?controller=cliente&action=index');
        }
    }
}
?>


