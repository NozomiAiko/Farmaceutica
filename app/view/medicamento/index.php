<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Lista de Medicamentos</title>
</head>
<body>
<div class="menu">
            <ion-icon  name="menu"></ion-icon>
            <ion-icon id="cerrar" name="close"></ion-icon>
        </div>    
        <div class="sidebar">
            <div class="nmb-pagina">
                <ion-icon id="icono1"name="business"></ion-icon>
                <span class="texto">FarmaPlus</span>
            </div>
            <nav class="nav">
            <ul>
                <li><a href="enrutador.php?controller=Empleado&action=index"><ion-icon name="contact"></ion-icon><span>Empleados</span></a></li>
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
    <main>
    <a href="index.php?controller=medicamento&action=create">Añadir Medicamento</a>
    <h1>Medicamentos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Proveedor</th>
                <th>Descripcion</th>
                <th>Precio</th>  
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medicamentos as $medicamento): ?>
                <tr>
                    <td><?php echo $medicamento['idMedicamento']; ?></td>
                    <td><?php echo $medicamento['nombreMed']; ?></td>
                    <td><?php echo $medicamento['codProveedor']; ?></td>
                    <td><?php echo $medicamento['detalle']; ?></td>
                    <td><?php echo $medicamento['precio']; ?></td>
                    <td>
                        <a href="index.php?controller=medicamento&action=edit&id=<?php echo $medicamento['idMedicamento']; ?>">Editar</a>
                        <a href="index.php?controller=medicamento&action=delete&id=<?php echo $medicamento['idMedicamento']; ?>" onclick="return confirm('¿Estás seguro de eliminar este medicamento?');">Eliminar</a>    
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </main>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../public/js/app.js"></script>
</body>
</html>
