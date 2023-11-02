<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Chanchito UTP</title>
    <link rel="stylesheet" href="css/estilos_nproductos.css">
    <link rel="icon" type="image/png" href="./img/logo.jpg"/>
    <link rel="icon" type="image/png" href="./img/logo.jpg"/>
</head>
<body>
    <?php require('./layout/menu.php'); ?>
    <section class="producto-home tarj-home">
        <div class="division tarjetahome">
            <div class="celdas-auto-ordenadas">
                <div class="caja-texto">
                    <h2>Encuentra la <span>tarjeta de crédito</span> perfecta para ti </h2>
                    <h3>¡Solicita la tuya ahora!</h3>
                    <p>Descubre nuestras tarjetas de crédito: 
                        seguridad, conveniencia y beneficios exclusivos para tus compras y finanzas.</p>
                        <ul class="salto-prod">
                            <a href="./productos.php">Volver</a>
                            <a href="./gestion_tarjetas.php">Gestionar Tarjetas</a>
                        </ul>
                </div>
                <img class="tarjetahome" src="./img/productos/tarjetaproducto.png">
            </div>
        </div>
    </section>
    <section >
        <div class="division">
            <h2 class="subtitulo1">Beneficios de Tarjeta</h2>
            <div class="tarjetainfo">
                <div class="info-columna">
                    <h2>Tarjetas de crédito seguras</h2>
                    <p>Protegemos tus transacciones y datos personales 
                        con las últimas medidas de seguridad para 
                        brindarte tranquilidad y confianza al realizar 
                        compras.</p>
                        <h2>Flexibilidad de pago</h2>
                        <p>Ajusta tus pagos de acuerdo a tus necesidades financieras, elige entre pagar el saldo total o realizar pagos mínimos, brindándote mayor control sobre tus finanzas.</p>
                  </div>
                  
                  <div class="info-columna-imagen">
                    <img src="./img/productos/tarjetainfo.png" alt="Imagen">
                  </div>
                  
                  <div class="info-columna">
                    <h2>Beneficios exclusivos</h2>
                <p>Disfruta de recompensas, descuentos, programas de puntos 
                    y ofertas especiales al utilizar nuestras tarjetas de 
                    crédito en establecimientos afiliados.</p>
                    <h2>Acceso a servicios exclusivos</h2>
    <p>Obtén acceso a servicios de conserjería, salas VIP en aeropuertos, beneficios en hoteles y otras experiencias exclusivas como titular de nuestra tarjeta de crédito.</p>
                  </div>
            </div>
        </div>
        
        
    </section>

    <div class="division">
        <h2 class="subtitulo1">Nuestras Tarjetas</h2>
            <div class="tarjeta-cont">
                <div class="card-image">
                    <img src="./img/productos/card4.png">
                </div>
                <div class="card-info">
                    <h3 class="subtitulo2">Visa Clasica</h3>
                    <ul>
                        <li>Membresía anual S/80</li>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    </ul>
                </div>
            </div>
            <div class="tarjeta-cont">
                <div class="card-image">
                    <img src="./img/productos/card1.png">
                </div>
                <div class="card-info">
                    <h3 class="subtitulo2">Visa Clasica</h3>
                    <ul>
                        <li>Membresía anual S/80</li>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    </ul>
                </div>
            </div>
            <div class="tarjeta-cont">
                <div class="card-image">
                    <img src="./img/productos/card5.png">
                </div>
                <div class="card-info">
                    <h3 class="subtitulo2">Visa Clasica</h3>
                    <ul>
                        <li>Membresía anual S/80</li>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    </ul>
                </div>
            </div>
            <div class="tarjeta-cont">
                <div class="card-image">
                    <img src="./img/productos/card2.png">
                </div>
                <div class="card-info">
                    <h3 class="subtitulo2">Visa Premium</h3>
                    <ul>
                        <li>Membresía anual S/80</li>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    </ul>
                </div>
            </div>
      </div>
    <?php require('layout/footer.php'); ?>

    <script src="./js/script_loader.js"></script>
</body>
</html>