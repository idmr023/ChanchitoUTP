<?php
// Incluir el archivo de funciones
require_once ('productos/gestion_tarjetas_funciones.php');

// Manejar las solicitudes de CRUD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar el tipo de solicitud
    if (isset($_POST['crear'])) {
        // Crear una nueva tarjeta de crédito
        // Eliminar espacios en blanco
        $numeroTarjeta = str_replace(' ', '', $_POST['numero_tarjeta']);
        $titular = $_POST['titular'];
        $fechaVencimiento = $_POST['fecha_vencimiento'];
        $cvv = $_POST['cvv'];
        $tipo = $_POST['tipo_tarjeta'];

        insertarTarjetaCredito($numeroTarjeta, $titular, $fechaVencimiento, $cvv, $tipo);
    } elseif (isset($_POST['actualizar'])) {
        // Actualizar una tarjeta de crédito existente
        $idTarjeta = $_POST['id_tarjeta'];
        // Eliminar espacios en blanco
        $numeroTarjeta = str_replace(' ', '', $_POST['numero_tarjeta']);
        $titular = $_POST['titular'];
        $fechaVencimiento = $_POST['fecha_vencimiento'];
        $cvv = $_POST['cvv'];
        $tipo = $_POST['tipo_tarjeta'];

        actualizarTarjetaCredito($idTarjeta, $numeroTarjeta, $titular, $fechaVencimiento, $cvv, $tipo);
    } elseif (isset($_POST['eliminar'])) {
        // Eliminar una tarjeta de crédito existente
        $idTarjeta = $_POST['id_tarjeta'];

        eliminarTarjetaCredito($idTarjeta);
    }

    // Con esto se evita recargar y rehacer inserts
    header("location: gestion_tarjetas.php");
    exit;
}

// Obtener todas las tarjetas de crédito
$tarjetas = obtenerTarjetasCredito();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/estilos_generales.css">
    <link rel="icon" type="image/png" href="./img/logo.jpg"/>
    <link rel="stylesheet" href="productos/estilos_gestion_tarjetas.css">
    <title>CRUD de Tarjetas de Crédito</title>
</head>
<body>
    <?php require('./layout/menu.php'); ?>
    <div class="division tarjeta-conjunto">
        <div class="tarjeta-visual">
            <div class="card-group">
            <div class="card">
                <div class="logo"><img src="productos/visa.png" alt="Visa"></div>
                <div class="chip"><img src="productos/chip.png" alt="chip"></div>
                <div id="card-number" class="number">1234567890123456</div>
                <div id="card-name" class="name">NOMBRETITULAR</div>
                <div id="card-from" class="from">12/34</div>
                <div id="card-to" class="to">123</div>
                </div>
            </div>
        </div>
        <div class="tarjeta-datos">
            <h1>CRUD de Tarjetas de Crédito</h1>
            <!-- Formulario para crear una nueva tarjeta de crédito -->
            <h2 class="titulo-formulario">Crear Tarjeta de Crédito</h2>
            <form class="formulario-crear" method="POST" action="">
                <label class="etiqueta-formulario">Número de Tarjeta:</label>
                <input id="numero_tarjeta" class="input-formulario inputNo" type="text" name="numero_tarjeta" required readonly="readonly"><br>

                <label class="etiqueta-formulario">Titular:</label>
                <input id="titular" class="input-formulario" type="text" name="titular" required><br>

                <label class="etiqueta-formulario">Fecha de Vencimiento:</label>
                <input id="fecha_vencimiento" class="input-formulario inputNo" type="text" name="fecha_vencimiento" required readonly="readonly"><br>

                <label class="etiqueta-formulario">CVV:</label>
                <input id="cvv" class="input-formulario inputNo" type="text" name="cvv" required readonly="readonly"><br>

                <label class="etiqueta-formulario">Tipo de Tarjeta:</label>
                <select id="tipo_tarjeta" class="input-formulario" name="tipo_tarjeta" required>
                    <option value="Visa">Visa</option>
                    <option value="Mastercard">Mastercard</option>
                    <option value="American Express">American Express</option>
                </select><br>

                <input class="boton-formulario" type="submit" name="crear" value="Crear Tarjeta de Crédito">
            </form>
            <button id="btnAutoGenerar" class="boton-generar">AutoGenerar</button>
            <script src="productos/gestion_tarjetas_crud.js"></script>
        </div>
    </div>

    <!-- Lista de tarjetas de crédito existentes -->
    <div class="division">
        <div class="tabla-tarjetas">
            <h2>Tarjetas de Crédito</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Número de Tarjeta</th>
                    <th>Titular</th>
                    <th>Fecha de Vencimiento</th>
                    <th>CVV</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($tarjetas as $tarjeta) { ?>
                    <tr>
                        <td><?php echo $tarjeta['id']; ?></td>
                        <td><?php echo chunk_split($tarjeta['numero_tarjeta'], 4, ' '); ?></td>
                        <td><?php echo $tarjeta['titular']; ?></td>
                        <td><?php echo $tarjeta['fecha_vencimiento']; ?></td>
                        <td><?php echo $tarjeta['cvv']; ?></td>
                        <td><?php echo $tarjeta['tipo']; ?></td>
                        <td>
                            <form method="POST" action="">
                                <input type="hidden" name="id_tarjeta" value="<?php echo $tarjeta['id']; ?>">
                                <input type="submit" name="actualizar" class="actualizar" value="Actualizar">
                                <input type="submit" name="eliminar" class="eliminar" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <button class="boton-generar" onclick="location.href='../dashboard/productos.php'" type="button">Volver</button>
        </div>
    </div>

    <?php require('layout/footer.php'); ?>
</body>
</html>