<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Crear Movimiento</title>
</head>
<body>
    <h1>Registro de Movimientos</h1>
    <form action="enrutador.php?controller=movimiento&action=create" method="POST">
        <input type="hidden" name="idMovimiento" value="<?php echo $movimiento['idMovimiento'] ?? ''; ?>">
        
        <label for="codMedicamento">MEDICAMENTO:</label>
        <input type="text" id="codMedicamento" name="codMedicamento" value="<?php echo $movimiento['codMedicamento'] ?? ''; ?>" required>
        <br><br>
        
        <label for="operacion">ENTRADA / SALIDA:</label>
        <input type="number" id="operacion" name="operacion" value="<?php echo $movimiento['operacion'] ?? ''; ?>">
        <br><br>

        <label for="codInventario">INVENTARIO:</label>
        <input type="text" id="codInventario" name="codInventario" value="<?php echo $movimiento['codInventario'] ?? ''; ?>">
        <br><br>

        <button type="submit">
            <?php echo isset($movimiento) ? 'Actualizar Movimiento' : 'Guardar Movimiento'; ?>
        </button>
    </form>
    <br>
    <a href="enrutador.php?controller=movimiento&action=index">Volver a la lista de movimientos</a>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../public/js/app.js"></script>
</body>
</html>

