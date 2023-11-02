<?php
function obtenerConexion() {
    $host = "localhost";
    $usuario = "root";
    $contrasena = "";
    $baseDeDatos = "banco";

    $conexion = new mysqli($host, $usuario, $contrasena, $baseDeDatos);

    if ($conexion->connect_error) {
        die("Error al conectar con la base de datos: " . $conexion->connect_error);
    }

    return $conexion;
}

function cerrarConexion($conexion) {
    $conexion->close();
}

function insertarTarjetaCredito($numeroTarjeta, $titular, $fechaVencimiento, $cvv, $tipo) {
    $conexion = obtenerConexion();
    $conexion->query("INSERT INTO tarjetas_credito (numero_tarjeta, titular, fecha_vencimiento, cvv, tipo) 
                    VALUES ('$numeroTarjeta', '$titular', '$fechaVencimiento', '$cvv', '$tipo')");
    cerrarConexion($conexion);
}


function obtenerTarjetasCredito() {
    $conexion = obtenerConexion();
    $resultado = $conexion->query("SELECT * FROM tarjetas_credito");
    $tarjetas = $resultado->fetch_all(MYSQLI_ASSOC);
    $resultado->close();
    cerrarConexion($conexion);
    return $tarjetas;
}

function actualizarTarjetaCredito($idTarjeta, $numeroTarjeta, $titular, $fechaVencimiento, $cvv, $tipo) {
    $conexion = obtenerConexion();
    $conexion->query("UPDATE tarjetas_credito SET numero_tarjeta='$numeroTarjeta', titular='$titular', fecha_vencimiento='$fechaVencimiento', cvv='$cvv', tipo='$tipo' WHERE id=$idTarjeta");
    cerrarConexion($conexion);
}


function eliminarTarjetaCredito($idTarjeta) {
    $conexion = obtenerConexion();
    $conexion->query("DELETE FROM tarjetas_credito WHERE id=$idTarjeta");
    cerrarConexion($conexion);
}
?>
