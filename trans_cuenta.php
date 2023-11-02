<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/estilos_sesion.css" />
    <link rel="stylesheet" href="css/style.css" />
    
    
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <img src="img/logo.jpg" alt="profileImg">
        <div class="logo_name">Banco UTP</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
        
        <li>
          <a href="#">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name" href="trans_cuenta.php" >Central de Informacion</span>
          </a>
          <span class="tooltip" href="trans_cuenta.php" >Central de Informacion</span>
        </li>
        <li>
          <a href="trans_cuenta.php" >
            <i class="bx bx-user"></i>
            <span class="links_name">Transferencia Bancaria</span>
          </a>
          <span class="tooltip" href="trans_cuenta.php" >Transferencia Bancaria</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="links_name">Configuracion de la Tarjeta</span>
          </a>
          <span class="tooltip">Configuracion de la Tarjeta</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <img src="img/logo.jpg" alt="profileImg" />
            <div class="name_job">
              <div class="name">Jose Espinoza</div>
              <div class="job"></div>
          </div>
          <i class="bx bx-log-out" id="log_out"></i>
        </li>
      </ul>
    </div>
    <section class="home-section">
      
        
            
            
            <div class="container">

<form action="./php/insertar_trans.php" method="POST">

    <div class="row">

        <div class="col">

            <h3 class="title">TRANSFERENCIA BANCARIA</h3>

            <div class="inputBox">
                <span>NOMBRE COMPLETO:</span>
                <input type="text" id="nombre" name="nombre" placeholder="Juan Baldeon">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" name="correo" id="correo" placeholder="example@example.com">
            </div>
            
            
            <div class="inputBox">
                <span>Concepto:</span>
                <input type="text" name="concepto" id="concepto" placeholder="">
            </div>
            <div class="inputBox">
                <span>MONTO:</span>
                <input type="text" name="monto" id="monto" placeholder="1.000">
            </div>

           

        </div>

        <div class="col">

            <h3 class="title">Tarjetas Disponibles</h3>

            <div class="inputBox">
                <span>Tus cuentas Registradas:</span>
                <img src="images/card_img.png" alt="">
            </div>
            
            <div class="inputBox">
                <span>Numero de cuenta :</span>
                <input type="number" name="num_cuenta" id="num_cuenta" placeholder="193-1853946-0-25">
            </div>
            <div class="inputBox">
                <span>MES EXP:</span>
                <input type="number" name="mes" id="mes" placeholder="ENERO-01">
            </div>
            

            <div class="flex">
                <div class="inputBox">
                    <span>exp year :</span>
                    <input type="number" name="año" id="año" placeholder="2022">
                </div>
                <div class="inputBox">
                    <span>CVC :</span>
                    <input type="text" name="cvc" id="cvc" placeholder="1234">
                </div>
                
                
            </div>

        </div>

    </div>

    <button href="./php/insertar_trans.php">transferir</button>

</form>

</div>    

    </div>
    </section>

    <script src="scriptlogin.js"></script>
    <script src="tarsale.js"></script>

  </body>
</html>
