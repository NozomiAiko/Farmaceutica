<?php
require_once '../app/config/conexion.php';
require_once '../app/model/Ventad.php';

class VentadController {
    private $modelo;
    public function __construct($conexion) {
        $this->modelo = new Ventad($conexion); 
    }
    public function index() {
        $ventads = $this->modelo->obtenerTodos();
        require '../app/view/ventad/index.php'; 
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['idVentaD'] ?? null;
            $codVentaM = $_POST['codVentaM'];
            $codMed = $_POST['codMedicamento'];
            $cantidad= $_POST['cantidad'];
            $precio = $_POST['precio'];
            if (!empty($id)) {
                $this->modelo->actualizar($id,$codVentaM, $codMed,$cantidad,$precio);
            } else {
                $this->modelo->agregar($codVentaM, $codMed,$cantidad,$precio);
            }
            header('Location: index.php?controller=ventad&action=index');
        } else {
            require_once '../app/view/ventad/create.php';
        }
    }
    public function edit() {
        $idCli = $_GET['id'];
        $ventad = $this->modelo->obtenerPorId($idCli);
        require '../app/view/ventad/create.php';
    }
    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->modelo->eliminar($id);
            header('Location: index.php?controller=ventad&action=index');
        }
    }
}
?>
