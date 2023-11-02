<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/estilos_nosotros.css">
    <link rel="stylesheet" href="./css/estilos_generales.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="./img/logo.jpg"/>   
	<title>Nosotros</title>
</head>
<body>
    <?php require('./layout/menu.php'); ?>

    <span class="ir-arriba"><img src="./img/logo/arrow-up-solid.svg" class="loguito"></span>
    <section class="encabezado">
        <h2 class="encabezado__subtitulo">Una empresa pensada en ti</h2>
        <a  aria-label="Chat on WhatsApp" href="https://wa.me/51923856742">
        <img class="encabezado__img" alt="Chatea papi" src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-whatsapp-icon-png-image_3584844.jpg" />
        </a>
    </section>

    <div class="contenedor-total">
            
            <div class="card bg-light mb-3 " style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Ofrecemos</h5>
                    <p class="card-text">Amplia vocación en atención a ustedes. <br>
                    Sofisticados productos pensando en tu comodidad. <br>
                    Capacitaciones personalizadas de acuerdo a tus consumos. <br>
                    Amplia gama de servicios.<i class="ri-arrow-up-circle-fill up"></i></p>
                    <img src="https://thumbs.dreamstime.com/z/banco-transferencia-de-dinero-conexi%C3%B3n-bancaria-icono-ilustraci%C3%B3n-vector-transacci%C3%B3n-para-presentaci%C3%B3n-en-sitios-web-y-195768300.jpg">
                </div>
            </div>

            <div class="card text-white bg-info mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Garantizamos</h5>
                    <p class="card-text">Total reglamentización de acuerdo a las leyes impuestas. <br>
                    Fidelidad y seriedad de cláusulas impuestas por nosotros mismos.<br>
                    Trato justo de acuerdo con nuestros clientes</p>
                    <img src="https://thumbs.dreamstime.com/z/banco-transferencia-de-dinero-conexi%C3%B3n-bancaria-icono-ilustraci%C3%B3n-vector-transacci%C3%B3n-para-presentaci%C3%B3n-en-sitios-web-y-195768300.jpg">
                </div>
            </div>

    </div>  

    <section class="informacion">
        <h1 class="informacion__titulo">¿Qué esperas para comunicarte con nosotros?</h1>
        <button id="informacion" class="informacionboton" href="contacto.php">Contacto</button>
        <script src="./nosotros.js"></script>
    </section>

    <?php require('layout/footer.php'); ?>

    <script src="./script_loader.js"></script>
</body>
</html>