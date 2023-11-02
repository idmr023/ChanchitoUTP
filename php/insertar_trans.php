<?php
    include("conexion.php");
    $nombre = $_REQUEST['nombre_comp'];
    $correo = $_REQUEST['correo'];
    $num_cuenta = $_REQUEST['num_cuenta'];
    $mes = $_REQUEST['mes_ven'];
    $año = $_REQUEST['año_ven'];
    $concepto = $_REQUEST['concepto'];
    $monto = $_REQUEST['monto'];
    $cvc = $_REQUEST['cvv'];

    $query = "INSERT INTO `tranferencia`(`nombre_comp`, `correo`, `num_cuenta`, `mes_ven`, `año_ven`, `cvv`, `concepto`, `monto`) VALUES ('$nombre','$correo','$num_cuenta','$mes','$año','$concepto','$monto','$cvc')";
        
    $resultado = mysqli_query($conexion, $query);

    if($resultado){
        echo "<script> alert('Se ha Transferido correctamente');
        window.location = '/dashboard';
        </script>";
    } else{
        echo "<script> alert('No se ha transferido correctamente');
            window.history.go(-1);
            </script>";
    }
?>
