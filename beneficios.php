<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beneficios - Banco Chanchito UTP</title>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/estilos_beneficios.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> 
</head>

<body>
    <?php require('./layout/menu.php'); ?>
    
    <span class="ir-arriba"><img src="./img/logo/arrow-up-solid.svg" class="loguito"></span>

    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Conoce todos los Beneficios que te Brinda Banco UTP</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="https://blog.peoplenext.com/hs-fs/hubfs/Imported_Blog_Media/sistema-de-compensaciones-y-beneficios_imgdest-2.jpg?width=600&name=sistema-de-compensaciones-y-beneficios_imgdest-2.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Beneficios en gimnasio</h3>
                    <p>Gracias a nuestros convenios con diferentes gimnasios, te podremos ofrecer unas promociones imperdibles
                        y que no podras rechazar. Aprovecha nuestras ultimas promociones y viaja junto a tu familia.
                    </p>
                    <h3><span>2</span>Beneficios en Hoteles y Bares en todo el Peru</h3>
                    <p>Disfruta de nuestras promociones en los hoteles mas lujosos de de Lima y aprovecha en visitar los bares mas prestigiados del Peru,
                        Nuestras ofertas son unicas y especiales para todos nuestros clientes.
                    </p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio de Nuestros Convenios con Diferentes Empresas</h2>
                <div class="galeria-port">
                    
                    <div class="imagen-port">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpO1WaIM1uqmu8GMU8kZbiCRN9ZyP1oLY0OAzRR2FC6TTBwaaGUvPqVxxb5Kk5eRVebVk&usqp=CAU" alt="">
                        <div class="hover-galeria">
                            <a href="beneficios_decameron.php">
                            <img src="https://cdn-icons-png.flaticon.com/512/214/214914.png?w=826&t=st=1684186613~exp=1684187213~hmac=7b493c858d2eff8d24dc1bcd6459bda81e33061d0f1ff8c51d2f8ca47ccff48b" alt="">
                            </a>
                            <p>Decameron</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYk09hQyT3yVPnLARBFn83P8XdN75NQ-QZiatPb-ROGVk74XoUIjgSAIFC7cT46fmFT-A&usqp=CAU" alt="">
                        <div class="hover-galeria">
                            <a href="beneficios_parroquet.php">
                            <img src="https://cdn-icons-png.flaticon.com/512/214/214914.png?w=826&t=st=1684186613~exp=1684187213~hmac=7b493c858d2eff8d24dc1bcd6459bda81e33061d0f1ff8c51d2f8ca47ccff48b" alt="">
                        </a>
                            <p>Perroquet / Bar Inglés</p>
                        </div>
                    </div>
                    
                    <div class="imagen-port">
                        <img src="https://logodownload.org/wp-content/uploads/2020/03/smart-fit-logo-0.png" alt="">
                        <div class="hover-galeria">
                            <a href="beneficios_smart.php">
                            <img src="https://logodownload.org/wp-content/uploads/2020/03/smart-fit-logo-0.png" alt="">
                            </a>
                            <p>SmartFit</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Que dicen nuestros clientes</h2>
            <div class="cards">
                <div class="card">
                    <img src="https://media.istockphoto.com/id/1201302385/es/foto/una-cara-sonriente-de-joven-sobre-fondo-blanco.jpg?s=2048x2048&w=is&k=20&c=FWN-aWLRgQUPQd3Bqzbd4tMolRLxON3vStvow1SoaWc=" alt="">
                    <div class="contenido-texto-card">
                        <h4>Jose Fuentes Linares</h4>
                        <p>El Banco UTP es uno de los Mejores Bancos del Peru, tiene una buena tasa de intereses. </p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://media.istockphoto.com/id/508182206/es/foto/acercamiento-de-un-sonriente-joven-mujer-negra.jpg?s=612x612&w=0&k=20&c=Ih-UCCiq5J6nNYs-h5doWbogSJD3OdKGQz-iHemLxFE=" alt="">
                    <div class="contenido-texto-card">
                        <h4>Luis Morales Campos</h4>
                        <p>Tiene uno de los Mejores centros de Atencion al Cliente, estoy totalmente satisfecho por haberme unido a este Banco.</p>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <?php require('layout/footer.php'); ?>

    
    <script src="./js/script_loader.js"></script>
</body>

</html>