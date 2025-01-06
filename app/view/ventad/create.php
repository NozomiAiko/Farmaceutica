<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Crear Ventad</title>
</head>
<body>
    
    <h1>Registro de Detalles de Venta</h1>
    <form action="index.php?controller=ventad&action=create" method="POST">
        <input type="hidden" name="idVentaD" value="<?php echo $ventad['idVentaD'] ?? ''; ?>">
        
        <label for="codVentaM">Venta Principal</label>
        <input type="number" id="codVentaM" name="codVentaM" value="<?php echo $ventad['codVentaM'] ?? ''; ?>" required>
        <br><br>
        
        <label for="codMedicamento">Medicamento:</label>
        <input type="number" id="codMedicamento" name="codMedicamento" value="<?php echo $ventad['codMedicamento'] ?? ''; ?>">
        <br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" value="<?php echo $ventad['cantidad'] ?? ''; ?>">
        <br><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" id="precio" name="precio" value="<?php echo $ventad['precio'] ?? ''; ?>">
        <br><br>

        <button type="submit">
            <?php echo isset($ventad) ? 'Actualizar Detalle' : 'Guardar Detalle'; ?>
        </button>
    </form>
    <br>
    <a href="index.php?controller=ventad&action=index">Volver a la lista de ventads</a>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../public/js/app.js"></script>
</body>
</html>