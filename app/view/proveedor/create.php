<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Crear Proveedor</title>
</head>
<body>
    <h1>Registro de Proveedores</h1>
    <form action="index.php?controller=proveedor&action=create" method="POST">
        <input type="hidden" name="idProveedor" value="<?php echo $proveedor['idProveedor'] ?? ''; ?>">
        
        <label for="nombrePro">Empresa Proveedora:</label>
        <input type="text" id="nombrePro" name="nombrePro" value="<?php echo $proveedor['nombrePro'] ?? ''; ?>" required>
        <br><br>
        
        <label for="celularPro">Celular:</label>
        <input type="text" id="celularPro" name="celularPro" value="<?php echo $proveedor['celularPro'] ?? ''; ?>">
        <br><br>

        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion" value="<?php echo $proveedor['direccion'] ?? ''; ?>">
        <br><br>

        <button type="submit">
            <?php echo isset($proveedor) ? 'Actualizar Proveedor' : 'Guardar Proveedor'; ?>
        </button>
    </form>
    <br>
    <a href="index.php?controller=proveedor&action=index">Volver a la lista de proveedors</a>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../public/js/app.js"></script>
</body>
</html>