<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : ''; 
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controllerFile = '../app/controller/' . ucfirst($controller) . 'Controller.php';
    require_once $controllerFile;
    $controllerClass = ucfirst($controller) . 'Controller';
    $controllerObj = new $controllerClass($conexion);
    if (method_exists($controllerObj, $action)) {
        $controllerObj->$action();
    }
?>
