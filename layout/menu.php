<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/estilos_generales.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/estilos_generales.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="icon" type="image/png" href="./img/logo.jpg"/>
</head>
<body>

    <header>
            <img class="logo" src="./img/logo.jpg" alt="Logo">
            <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
            <nav class="nav" id="nav">
                <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
                <ul class="nav-list">
                    <li><a href="./index.php" target="_blank">Inicio</a></li>
                    <li><a href="./productos.php" target="_blank">Productos</a></li>
                    <li><a href="./contacto.php" target="_blank">Contacto</a></li>
                    <li><a href="./beneficios.php" target="_blank">Beneficios</a></li>
                    <li><a href="./ayuda.php" target="_blank">Ayuda</a></li>
                    <li><a href="./nosotros.php" target="_blank">Nosotros</a></li>
                    <ul class="nav_regis">
                        <li><a href="./registrarse.php" target="_blank">Registrate</a></li>
                        <li><a href="./logout.php" target="_blank">Cerrar sesión</a></li>
                        <li><a href="./trans_cuenta.php" target="_blank">Transferencia</a></li>
                    </ul>
                </ul>
            </nav>
    </header>

    <script src="./js/main.js"></script>