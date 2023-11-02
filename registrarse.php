<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Banco Chanchito UTP</title>
    <link rel="stylesheet" href="./css/estilos_generales.css">
    <link rel="stylesheet" href="./css/estilos_registrarse.css">
    <link rel="icon" type="image/png" href="./img/logo.jpg"/>
</head>
<body>

<div id="main">
    <?php require('layout/menu.php'); ?>

    <div class="content">
        <div>
            <h1>Banco <br><span>Chanchito</span> <br>UTP</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
            expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus 
            <br> a quae totam ipsa illum minus laudantium?</p>
        </div>
        
        <div class="form-container">
                
                <form action="./in.php" method="POST" class="form" id="formulario__login">
                    <h3>Iniciar sesión</h3>
                    <hr>                 

                    <label for="dni">DNI</label>
                    <input type="number" id="dni" name="dni"  maxlength="8"><br>

                    <label for="pswd">Contraseña</label>
                    <input type="password" id="password" name="pswd"> <br><br>
                    <button class="boton btnn">Iniciar sesión</button>
                </form>
                        
                <form action="./php/insertar.php" method="POST">
                    <h3>¡Registrese y sea parte de la mejor banca del país!</h3>
            
                    <label for="nombre">Nombres:</label>
                    <input type="text" id="nombre" name="nombre" required><br>
            
                    <label for="apellido">Apellidos:</label>
                    <input type="text" id="apellido" name="apellido" required><br>
            
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" required><br>
            
                    <label for="dni">DNI:</label>
                    <input type="number" id="dni" name="dni" required pattern="[0-9]+" maxlength="8"><br>
            
                    <label for="fec_nac">Fecha de nacimiento:</label>
                    <input type="date" id="fec_nac" name="fec_nac" required><br>
            
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="contraseña" name="contraseña" required minlength="8"><br>
            
                    <input type="checkbox" name="tyc"> Acepto los términos y condiciones<br>
            
                    <button href="./php/insertar.php">Registarse</button>
                </form>
            
        </div>
    </div>

</div>

<?php require('layout/footer.php'); ?>

</body>
</html>