<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Crear Inventario</title>
</head>
<body>
    <h1>Registro de Inventarios</h1>
    <form action="index.php?controller=inventario&action=create" method="POST">
        <input type="hidden" name="idInventario" value="<?php echo $inventario['idInventario'] ?? ''; ?>">
        
        <label for="codMedicamento">MEDICAMENTO:</label>
        <input type="number" id="codMedicamento" name="codMedicamento" value="<?php echo $inventario['codMedicamento'] ?? ''; ?>" required>
        <br><br>
        
        <label for="cantidad">CANTIDAD:</label>
        <input type="number" id="cantidad" name="cantidad" value="<?php echo $inventario['cantidad'] ?? ''; ?>">
        <br><br>
        <button type="submit">
            <?php echo isset($inventario) ? 'Actualizar Inventario' : 'Guardar Inventario'; ?>
        </button>
    </form>
    <br>
    <a href="index.php?controller=inventario&action=index">Volver a la lista de inventarios</a>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../public/js/app.js"></script>
</body>
</html>

