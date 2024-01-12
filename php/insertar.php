<?php
    include("conexion.php");
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $correo = $_REQUEST['correo'];
    $dni = $_REQUEST['dni'];
    $fec_nac = $_REQUEST['fec_nac'];
    $contraseña = $_REQUEST['contraseña'];

    $query = "INSERT INTO usuarios (dni, nombre, apellido, correo, fec_nac, contraseña) VALUES ('$dni','$nombre', '$apellido','$correo', '$fec_nac', '$contraseña')";
        
    $resultado = mysqli_query($conexion, $query);

    if($resultado){
        echo "<script> alert('Se ha registrado correctamente');
        window.location = '/';
        </script>";
    } else{
        echo "<script> alert('No se ha registrado correctamente');
            window.history.go(-1);
            </script>";
    }
?>
