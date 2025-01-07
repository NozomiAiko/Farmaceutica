<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Crear Ventas</title>
</head>
<body>
    <h1>Registro de Venta</h1>
    <form action="enrutador.php?controller=ventam&action=create" method="POST">
        <input type="hidden" name="idVentaM" value="<?php echo $ventam['idVentaM'] ?? ''; ?>">
        
        <label for="fecha">Fecha de venta:</label>
        <input type="date" id="fecha" name="fecha" value="<?php echo $ventam['fecha'] ?? ''; ?>" required>
        <br><br>
        
        <label for="total">Total de Venta:</label>
        <input type="number" step="0.01" id="total" name="total" value="<?php echo $ventam['total'] ?? ''; ?>">
        <br><br>

        <label for="codCliente">Cliente:</label>
        <input type="number" id="codCliente" name="codCliente" value="<?php echo $ventam['codCliente'] ?? ''; ?>">
        <br><br>

        <label for="metodoPago">Metodo Pago:</label>
        <input type="number" id="metodoPago" name="metodoPago" value="<?php echo $ventam['metodoPago'] ?? ''; ?>">
        <br><br>

        <label for="codEmpleado">Empleado:</label>
        <input type="number" id="codEmpleado" name="codEmpleado" value="<?php echo $ventam['codEmpleado'] ?? ''; ?>">
        <br><br>

        <button type="submit">
            <?php echo isset($ventam) ? 'Actualizar Detalle' : 'Guardar Detalle'; ?>
        </button>
    </form>
    <br>
    <a href="enrutador.php?controller=ventam&action=index">Volver a la lista de ventams</a>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../public/js/app.js"></script>
</body>
</html>