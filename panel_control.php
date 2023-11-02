<?php
    
    include('php/conexion.php');
    $dni = $_SESSION['dni']; 

    $consulta = "SELECT M.mov_id, U.nombre, U.apellido, M.concepto, M.fecha, M.hora, M.importe FROM movimientos M INNER JOIN usuarios U ON M.dni = U.dni
    WHERE M.dni = $dni;"; 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/estilos_generales.css">
    <link rel="icon" type="image/png" href="./img/logo.jpg"/>
</head>

<?php require('./layout/menu.php'); ?>


<body>

    <div class="contenedor__principal">
            <?php 
                    $resultado = mysqli_query($conexion, $consulta);
                    while($row=mysqli_fetch_assoc($resultado)){ ?>


            <div class="container__informacion">
                <main class="main">
                    <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Último movimiento realizado:</h5>
                            <p class="card-text"><?php echo "Pago por ".$row['concepto']." el día ".$row['fecha']?></i></p>
                        </div>
                    </div>

                    <div class="card bg-light mb-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Último movimiento</h5>
                            <p class="card-text"><?php echo "S/.".$row['importe']?></p>
                        </div>
                    </div>

                    <div class="card text-white bg-info mb-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Bienvenido a su cuenta,</h5>
                            <p class="card-text"><?php echo $row['nombre']?></p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Beneficios Canjeados</h5>
                            <p class="card-text">Gracias por su preferencia</p>
                        </div>
                    </div>
                    <?php } ?>
                </main> 

                <table class="table table-dark">
                    <h1>Datos de usuario</h1>
                        <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Concepto</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Importe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                    <?php 
                    $resultado = mysqli_query($conexion, $consulta);
                    while($row=mysqli_fetch_assoc($resultado)){ ?>

                        <td><?php echo $row['mov_id']?></td>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['apellido']?></td>
                        <td><?php echo $row['concepto']?></td>
                        <td><?php echo $row['fecha']?></td>
                        <td><?php echo $row['hora']?></td>
                        <td><?php echo $row['importe']?></td>
                        <?php } ?>
                        </tr>
                        <tr>
                    </tbody>
                </table>           

            </div>

    </div>
    
    <?php require('layout/footer.php'); ?>
</body>

</html>