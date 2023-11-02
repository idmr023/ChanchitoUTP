<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Chanchito UTP</title>
    <link rel="stylesheet" href="css/estilos_nproductos.css">
    <link rel="stylesheet" href="css/estilos_generales.css">
    <link rel="icon" type="image/png" href="./img/logo.jpg"/>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>
<body>
    
<?php require('./layout/menu.php'); ?>

    <span class="ir-arriba"></span>
    <section class="producto-home">
        <div class="division">
            <div class="celdas-auto-ordenadas">
                <div class="caja-texto">
                    <h2>Productos <span>Chanchito</span></h2>
                    <p>Aquí encontrará una variedad de productos para satisfacer sus necesidades financieras y de protección.
                    Ofrecemos una amplia gama de tarjetas de crédito con diferentes beneficios y recompensas.</p>
                    <ul class="salto-prod">
                        <a href="#tarjetas">Tarjetas</a>
                        <a href="#seguros">Seguros</a>
                        <a href="#prestamos">Prestamos</a>
                    </ul>
                </div>
                <img src="./img/productos/home.png">
            </div>
        </div>
    </section>
    <section id="tarjetas" class="tarjetas">
        <div class="division">
            <div class="tarjetas-inicio">
                
                <div class="tarjetas-inicio-texto">
                    <h2 class="tarjetas-inicio-titulo">Tarjetas</h2>
                    <p>Descubre el poder y la conveniencia de nuestras 
                        tarjetas bancarias. Únete a nosotros y déjanos 
                        acompañarte en tu viaje hacia una administración 
                        financiera más eficiente y segura.</p>
                    <button><a href="./productos_tarjetas.php">Solicitar</a></button>
                </div>
                <a href="./productos_tarjetas.php">
                    <div class="tarjetas-inicio-efecto">
                        <div class="tarjeta-contenido">
                            <img src="./img/productos/card2.png" alt="Imagen 1">
                        </div>
                        <div class="tarjeta-contenido">
                            <img src="./img/productos/card5.png" alt="Imagen 2">
                        </div>
                        <div class="tarjeta-contenido">
                            <img src="./img/productos/card1.png" alt="Imagen 3">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="seguros" class="seguro-tabs">
        <h1 class="subtitulo1">Seguros</h1>
        <ul class="tabs">
            <li>Respaldo Vida</li>
            <li>SOAT</li>
            <li>Proteccion Tarjeta</li>
        </ul>

        <div class="container">
            <div class="prod-tab-content">
                <img src="./img/productos/sec1.jpg" alt="">
                <p>
                    Mantén a tus seres queridos protegidos y asegura tu propia tranquilidad con un seguro de vida
                </p>
                <button>Informacion</button>
            </div>
        </div>
        <div class="container">
            <div class="prod-tab-content">
                <img src="./img/productos/sec2.jpg" alt="">
                <p>
                    Cumple con la normativa y asegura tu seguridad en caso de accidentes de tránsito.
                </p>
                <button>Informacion</button>
            </div>
        </div>
        <div class="container">
            <div class="prod-tab-content">
                <img src="./img/productos/sec3.jpg" alt="">
                <p>
                    No dejes tus transacciones al azar, asegúrate de contar con la protección adecuada.
                </p>
                <button>Informacion</button>
            </div>
        </div>
    </section>
    <script src="./js/productos.js"></script>
    <section id="prestamos" class="prestamos">
        <div class="division">
            <h2 class="subtitulo1">Prestamos</h2>
            <div class="tipo-prestamo">
                <img id="prest1" src="./img/productos/prest1.png">
                    <div class="tipo-prestamo-texto">
                    <h2 class="subtitulo1">Crédito Vehicular</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Curabitur a nibh ex. Vivamus eu convallis libero, vitae maximus ex. 
                    Praesent ac mi malesuada, tincidunt mi id, ullamcorper lectus. Aenean placerat.</p>
                    <button onclick="rotateImage('prest1')">Solicitar</button>
                </div>
            </div>
            <div class="tipo-prestamo">
                <img id="prest2" src="./img/productos/prest2.png">
                <div class="tipo-prestamo-texto">
                    <h2 class="subtitulo1">Crédito hipotecario</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Curabitur a nibh ex. Vivamus eu convallis libero, vitae maximus ex. 
                    Praesent ac mi malesuada, tincidunt mi id, ullamcorper lectus. Aenean placerat.</p>
                    <button onclick="rotateImage('prest2')">Solicitar</button>
                </div>
            </div>
            <div class="tipo-prestamo">
                <img id="prest3" src="./img/productos/prest3.png">
                <div class="tipo-prestamo-texto">
                    <h2 class="subtitulo1">Préstamo Personal</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Curabitur a nibh ex. Vivamus eu convallis libero, vitae maximus ex. 
                    Praesent ac mi malesuada, tincidunt mi id, ullamcorper lectus. Aenean placerat.</p>
                    <button onclick="rotateImage('prest3')">Solicitar</button>
                </div>
            </div>
        </div>
    </section>

    <?php require('layout/footer.php'); ?>

    <script src="./js/productos.js"></script>
    <script src="./js/ir_al-cielo.js"></script>
</body>
</html>