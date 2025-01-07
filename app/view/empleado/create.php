<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Registro de Empleados</h1>
    <form action="enrutador.php?controller=empleado&action=create" method="POST">
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
    <br><br>
    <a href="enrutador.php?controller=empleado&action=index">Volver a la lista de empleados</a>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../public/js/app.js"></script>
</body>
</html>
