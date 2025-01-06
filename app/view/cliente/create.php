<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Crear Cliente</title>
</head>
<body>
    <h1>Registrar Cliente</h1>
    <form action="index.php?controller=cliente&action=create" method="POST">          
        <label for="idCliente">ID:</label>
        <input type="number" name="idCliente" value="<?php echo $cliente['idCliente'] ?? ''; ?>">
        <br><br>
        <label for="nombreCli">Nombre:</label>
        <input type="text" id="nombreCli" name="nombreCli" required value="<?php echo $cliente['nombreCli'] ?? ''; ?>">
        <br><br>
        
        <label for="nit">NIT/CI:</label>
        <input type="text" id="nit" name="nit" value="<?php echo $cliente['nit'] ?? ''; ?>">
        <br><br>
        
        <button type="submit">
            <?php echo isset($cliente) ? 'Actualizar Cliente' : 'Guardar Cliente'; ?>
        </button>
    </form>
    <br>
    <a href="index.php?controller=cliente&action=index">Volver a la lista de clientes</a>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../public/js/app.js"></script>
</body>
</html>
