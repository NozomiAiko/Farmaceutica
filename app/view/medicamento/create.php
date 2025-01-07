<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Crear Medicamento</title>
</head>
<body>
    <h1>Registro de Medicamentos</h1>
    <form action="enrutador.php?controller=medicamento&action=create" method="POST">
        <input type="hidden" name="idMedicamento" value="<?php echo $medicamento['idMedicamento'] ?? ''; ?>">
        
        <label for="nombreMed">MEDICAMENTO:</label>
        <input type="text" id="nombreMed" name="nombreMed" value="<?php echo $medicamento['nombreMed'] ?? ''; ?>" required>
        <br><br>
        
        <label for="codProveedor">PROVEEDOR:</label>
        <input type="number" id="codProveedor" name="codProveedor" value="<?php echo $medicamento['codProveedor'] ?? ''; ?>">
        <br><br>

        <label for="detalle">DETALLE:</label>
        <input type="text" id="detalle" name="detalle" value="<?php echo $medicamento['detalle'] ?? ''; ?>">
        <br><br>

        <label for="precio">PRECIO:</label>
        <input type="number" step="0.01"  id="precio" name="precio" value="<?php echo $medicamento['precio'] ?? ''; ?>">
        <br><br>
        <button type="submit">
            <?php echo isset($medicamento) ? 'Actualizar Medicamento' : 'Guardar Medicamento'; ?>
        </button>
    </form>
    <br>
    <a href="enrutador.php?controller=medicamento&action=index">Volver a la lista de medicamentos</a>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../public/js/app.js"></script>
</body>
</html>
