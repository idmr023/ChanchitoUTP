<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos_index.css">
    <link rel="stylesheet" href="./css/estilos_generales.css">
    <link rel="icon" type="image/png" href="./img/logo.jpg"/>
    <title>Incio - Banco Chanchito UTP</title>
</head>
<body >
    <div class="centrado" id="onload">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    
    <?php require('./layout/menu.php'); ?> <br>

    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
        <df-messenger chat-icon="https:&#x2F;&#x2F;encrypted-tbn0.gstatic.com&#x2F;images?q=tbn:ANd9GcQjSClN9M1ep8wZhDQPATB0NGJC501aa6a7sA&ampusqp=CAU"
            intent="WELCOME" chat-title="SAE" agent-id="dbb00275-4277-41aa-bec9-e6d8210b1145" language-code="es"></df-messenger>

    <div class="main">
           <div class="main_izq">
                <h1>Banco <br><span>Chanchito</span> <br>UTP</h1>
                <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
                 expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus 
                <br> a quae totam ipsa illum minus laudantium?</p>
           </div>

    </div>

    <div class="banners">
        
        <div class="banner_productos">
            <h3 class="productos__h3">Productos para ti</h3>
            
            <div class="container-tarjetas">
                
                <div class="tarjeta">
                    <img src="./img/logo/calendar-check.svg" class="loguito calendar-check">
                    <p>Tarjeta de crédito</p>
                </div>
                
                <div class="tarjeta">
                    <img src="./img/logo/money-bill-1.svg" class="loguito money-bill">
                    <p>Cuenta de ahorros</p>
                </div>
            
                <div class="tarjeta">
                    <img src="./img/logo/address-book.svg" class="loguito address-book">
                    <p>Solicitar un préstamo</p>
                </div>

                <div class="tarjeta">
                    <img src="./img/logo/money-bill-1.svg" class="loguito money-bill">
                    <p>Adelanto de sueldo</p>
                </div>
                
                <div class="tarjeta">
                    <img src="./img/logo/bookmark.svg" class="loguito bookmark">
                    <p>Estado de cuenta</p>
                </div>
            
            </div>
        
        </div>

        <hr>

        <div class="banner__beneficios">
            <div>
                <h2>Respaldo y seguridad</h2>
                <p>Respaldamos a Plin, Yape y CIMA. Seguridad en cada una de tus compras</p>
                <div class="banner__beneficios_galeria">
                    <img src="https://ichef.bbci.co.uk/news/624/amz/worldservice/live/assets/images/2015/06/26/150626154807_tecnologia_metodos_pago_compras_online_624x351_thinkstock.jpg" alt="">
                    <img src="https://s1.eestatic.com/2017/07/03/actualidad/actualidad_228490946_129946198_1024x576.jpg" alt="">
                    <img src="https://gestion.pe/resizer/3cRvTotGlAgMBT9lrvGimXWoqX8=/1200x800/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/DTOFI3HFNBFJTF2L2BI65S4OUM.png" alt="">
                </div>
            </div>
            <div>
                <h2>Tasas preferencial por ser cliente</h2>
                <p>Obtén hasta una tasa de 2.5%</p>
            </div>
        </div>

        <div class="banner_registrate">
            <h1>Sé parte de la mejor empresa financiera</h1>
            <div class="banner__registrate_botones">
                <button class="boton" id="input__msj"><a href="./registrarse.php">Ingresa tu dni</a></button>
                <button class="boton" id="boton__info"><a href="./registrarse.php">Quiero saber más</a></button>
            </div>
        </div>
    </div>

    <?php require('layout/footer.php'); ?>
    
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="./js/script_loader.js"></script>
</body>
</html>