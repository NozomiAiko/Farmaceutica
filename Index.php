<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/mystyle.css">
    <title>Enrutador de Controladores</title>
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
            <li><a href="public/enrutador.php?controller=Empleado&action=index"><ion-icon name="contact"></ion-icon><span>Empleados</span></a></li>
            <li><a href="public/enrutador.php?controller=Cliente&action=index"><ion-icon name="people"></ion-icon><span>Cliente</span></a></li>
            <li><a href="public/enrutador.php?controller=Proveedor&action=index"><ion-icon name="filing"></ion-icon><span>Proveedor</span></a></li>
            <li><a href="public/enrutador.php?controller=Medicamento&action=index"><ion-icon name="medkit"></ion-icon></ion-icon><span>Medicamento</span></a></li>
            <li><a href="public/enrutador.php?controller=Movimiento&action=index"><ion-icon name="folder-open"></ion-icon><span>Movimiento</span></a></li>
            <li><a href="public/enrutador.php?controller=Inventario&action=index"><ion-icon name="folder"></ion-icon><span>Inventario</span></a></li>
            <li><a href="public/enrutador.php?controller=Ventam&action=index"><ion-icon name="card"></ion-icon><span>Venta Mayorista</span></a></li>
            <li><a href="public/enrutador.php?controller=Ventad&action=index"><ion-icon name="cart"></ion-icon><span>Venta Detallista</span></a></li>
        </ul>
        </nav>
        
    </div>
    <main>
        <h1 class="welcome">BIENVENIDO A FARMA PLUS</h1>
        <h2 class="slogan">"Cuidamos tu salud, estamos contigo siempre"</h2>
        <p class="description">
            En Farma Plus, nuestra misión es brindarte los mejores servicios y productos farmacéuticos 
            para cuidar de tu bienestar y el de tus seres queridos. Contamos con personal altamente 
            capacitado y un amplio surtido de medicamentos, productos de cuidado personal y suplementos. 
            ¡Tu salud es nuestra prioridad!
        </p>
    </main>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="public/js/app.js"></script>
</body>
</html>