<!DOCTYPE html>
<html>
<head>
  <title>Contacto - Banco Chanchito UTP</title>
  <link rel="stylesheet" href="./css/estilos_contacto.css">
  <link rel="stylesheet" href="./css/estilos_generales.css">
    <link rel="icon" type="image/png" href="./img/logo.jpg"/>
</head>
<body>
    <?php require('./layout/menu.php'); ?>
  
    <section class="contact">
      <div class="content">
        <h2>Contáctanos</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum facere nobis cum veritatis hic autem quasi quo modi at, ab repellendus nulla nihil sunt ratione asperiores deserunt laboriosam temporibus voluptatibus!
        Inventore nostrum est pariatur. Praesentium, libero minima. Vel, magnam earum. Aperiam est quia veniam quae reiciendis. Dicta commodi, ducimus perspiciatis vero iste quas cupiditate fugit in. Maiores sit eaque quam?
        Ullam consectetur debitis aut cumque velit hic ab tempore sed ad, est autem doloremque non voluptatibus voluptas aperiam? Consectetur ipsa nostrum odio provident impedit eius! Eos illo facilis deserunt quas?
        Eaque autem dolores cum maxime labore non perferendis, id neque! Quasi delectus recusandae corporis, nobis quaerat iure earum, cupiditate neque reprehenderit a sit impedit tempora. Consequatur, laboriosam molestias. Libero, perferendis?
        Ex tempore delectus quo molestias facilis labore nulla exercitationem error mollitia, praesentium officia, reprehenderit laborum. Veniam at cum reiciendis vel neque sint quidem excepturi nesciunt, pariatur assumenda voluptate quia sequi.</p>
      </div>
      
      <div class="container">
          <div class="contactInfo">
          
            <div class="box">
              <div class="icon"><img src="./img/logo/location-crosshairs-solid.svg" class="loguito" alt=""></div>
              <div class="text">
                <h3>Dirección</h3>
                <p>Av. Av. Arequipa 234, <br>Cercado de Lima, Lima</p>
              </div>
            </div>
    
              <div class="box">
                <div class="icon"><img src="./img/logo/phone-solid.svg" class="loguito" alt=""></div>
                <div class="text">
                  <h3>Celular</h3>
                  <p>947 924 204</p>
                </div>
              </div>
    
              <div class="box">
                <div class="icon"><img src="./img/logo/envelope-solid.svg" class="loguito" alt=""></div>
                <div class="text">
                  <h3>Email</h3>
                  <p>bancoutp@utp.edu.pe</p>
                </div>
              </div>
    
          </div>
    
          <div class="contactForm">
            <form action="./php/enviar-email.php">
              <h2>Envía un mensaje</h2>
              <div class="inputBox">
                <input type="text" id="nombre" name="nombre" required>
                <span>Nombre completo</span>
              </div>
    
              <div class="inputBox">
                <input type="email" id="correo" name="correo" required>
                <span>Email</span>
              </div>
    
              <div class="inputBox">
                <textarea required id="contenido" name="contenido"></textarea>
                <span>Escribe tu mensaje</span>
              </div>
    
              <div class="inputBox">
                <input type="submit" name="" value="Enviar">
              </div>
            </form>
          </div>
    
        </div>
    </section>

    
    <?php require('layout/footer.php'); ?>

  </div>
</body>
</html>