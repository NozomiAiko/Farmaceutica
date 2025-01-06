<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Crear Empleado</title>
</head>
<body>
<div class="sidebar">
        <div class="nmb-pagina">
            <ion-icon id="icono1"name="business"></ion-icon>
            <span class="texto">FarmaPlus</span>
        </div>
        <nav class="nav">
        <ul>
            <li><a id="inbox" href="enrutador.php?controller=Empleado&action=index"><ion-icon name="contact"></ion-icon><span>Empleados</span></a></li>
            <li><a href="enrutador.php?controller=Cliente&action=index"><ion-icon name="people"></ion-icon><span>Cliente</span></a></li>
            <li><a href="enrutador.php?controller=Proveedor&action=index"><ion-icon name="filing"></ion-icon><span>Proveedor</span></a></li>
            <li><a href="enrutador.php?controller=Medicamento&action=index"><ion-icon name="medkit"></ion-icon></ion-icon><span>Medicamento</span></a></li>
            <li><a href="enrutador.php?controller=Movimiento&action=index"><ion-icon name="folder-open"></ion-icon><span>Movimiento</span></a></li>
            <li><a href="enrutador.php?controller=Inventario&action=index"><ion-icon name="folder"></ion-icon><span>Inventario</span></a></li>
            <li><a href="enrutador.php?controller=Ventam&action=index"><ion-icon name="card"></ion-icon><span>Venta Mayorista</span></a></li>
            <li><a href="enrutador.php?controller=Ventad&action=index"><ion-icon name="cart"></ion-icon><span>Venta Detallista</span></a></li>
        </ul>
        </nav>
        
    </div>
    <h1>Registro de Empleados</h1>
    <form action="index.php?controller=empleado&action=create" method="POST">
        <input type="hidden" name="idEmpleado" value="<?php echo $empleado['idEmpleado'] ?? ''; ?>">
        
        <label for="nombreEmp">Nombre:</label>
        <input type="text" id="nombreEmp" name="nombreEmp" value="<?php echo $empleado['nombreEmp'] ?? ''; ?>" required>
        <br><br>
        
        <label for="celularEmp">Celular:</label>
        <input type="text" id="celularEmp" name="celularEmp" value="<?php echo $empleado['celularEmp'] ?? ''; ?>">
        <br><br>
        
        <label for="turno">Turno:</label>
        <input type="number" id="turno" name="turno" value="<?php echo $empleado['turno'] ?? ''; ?>">
        <br><br>
        
        <button type="submit">
            <?php echo isset($empleado) ? 'Actualizar Empleado' : 'Guardar Empleado'; ?>
        </button>
    </form>
    <br>
    <a href="index.php?controller=empleado&action=index">Volver a la lista de empleados</a>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../public/js/app.js"></script>
</body>
</html>
