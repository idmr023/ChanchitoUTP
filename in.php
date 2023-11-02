<?php
    session_start();
    include('php/conexion.php');
            if(isset($_POST['dni']) &&  isset($_POST['pswd'])){
                function validate($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                $dni= validate($_POST['dni']);
                $pass= validate($_POST['pswd']);
                
                if(empty($dni)){
                header("Location: ./index.php?error=El usuario es requerido");
                    exit();
                }else if(empty($pass)){
                    header("Location: ./index.php?error=La clave es requerido");
                    exit();
                }else{
                    $sql= "SELECT * FROM usuarios WHERE dni='$dni' AND contraseña='$pass'";
                    $result= mysqli_query($conexion,$sql);
                    
                    if(mysqli_num_rows($result) === 1){
                        $row=mysqli_fetch_assoc($result);
                        
                        if($row['dni']=== $dni && $row['contraseña']===$pass){
                            
                            $_SESSION['apellido']=$row['apellido'];
                            $_SESSION['correo']=$row['correo'];
                            $_SESSION['dni']=$row['dni'];
                            $_SESSION['contraseña']=$row['contraseña'];
                            $_SESSION['nombre']=$row['nombre'];
        
                            header( require('./panel_control.php'));
                            return true;
                        exit();  
                        
                        }else{
                            header("Location: ./index.php?error=El usuario o la clave son incorrectas");
                            exit();      
                        }       
                    }else{
                    header("Location: ./index.php?error=El usuario o la clave son incorrectas");
                    exit();
                    }
                }   
                }else{
                    header("Location: ./index.php");
                    exit();
                }
?>