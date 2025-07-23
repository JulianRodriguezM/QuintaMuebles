<?php include('../includes/header.php'); ?>
<body>
    <?php include('../includes/nav-pages.php'); ?>

    <section class="hero-section">
    <div class="overlay">
        <h1>Proyectos QuintaMuebles</h1>
        <p><a href="../index.php">INICIO</a> › NUESTROS PROYECTOS</p>
    </div>
    </section>

    <section class="intro-proyectos">
      <p class="subtitulo">PROYECTOS</p>
      <h2 class="titulo">Conoce Nuestro Trabajo Personalizado</h2>
    </section>

    <section class="galeria-proyectos">
  <!-- Tarjeta 1 -->
  <div class="proyecto-card">
    <div class="carousel">
      <div class="carousel-images">
        <img src="../assets/img/proyectos/Empresa/1.jpeg" alt="Imagen 1">
        <img src="../assets/img/proyectos/Empresa/2.jpeg" alt="Imagen 2">
      </div>
      <button class="prev" onclick="moverCarrusel(this, -1)">‹</button>
      <button class="next" onclick="moverCarrusel(this, 1)">›</button>
    </div>
    <div class="proyecto-info">
      <p><strong>Tipo de cliente:</strong> Empresa</p>
      <p><strong>Muebles:</strong> Escritorios, Archiveros</p>
      <p><strong>Ubicación:</strong> Acacias, Meta</p>
      <p><strong>Descripción:</strong> Mobiliario funcional para oficinas modernas.</p>
      <div class="valoracion">
        <strong>Valoración del cliente:</strong>
        <div class="estrellas"><div class="relleno" style="width: 90%;"></div></div>
        <span>4.5 / 5</span>
      </div>
    </div>
  </div>

  <!-- Tarjeta 2 -->
  <div class="proyecto-card">
    <div class="carousel">
      <div class="carousel-images">
        <img src="../assets/img/proyectos/casa/1.jpeg" alt="Imagen 1">
        <img src="../assets/img/proyectos/casa/2.jpeg" alt="Imagen 2">
        <img src="../assets/img/proyectos/casa/3.jpeg" alt="Imagen 3">
      </div>
      <button class="prev" onclick="moverCarrusel(this, -1)">‹</button>
      <button class="next" onclick="moverCarrusel(this, 1)">›</button>
    </div>
    <div class="proyecto-info">
      <p><strong>Tipo de cliente:</strong> Hogar</p>
      <p><strong>Muebles:</strong> Espejo retroiluminado, baño completo y mueble cocina</p>
      <p><strong>Ubicación:</strong> Girardot</p>
      <p><strong>Descripción:</strong> Diseño personalizado en madera natural.</p>
      <div class="valoracion">
        <strong>Valoración del cliente:</strong>
        <div class="estrellas"><div class="relleno" style="width: 80%;"></div></div>
        <span>4.0 / 5</span>
      </div>
    </div>
  </div>

  <!-- Tarjeta 3 -->
  <div class="proyecto-card">
    <div class="carousel">
      <div class="carousel-images">
        <img src="../assets/img/proyectos/proyecto3a.jpg" alt="Imagen 1">
      </div>
      <button class="prev" onclick="moverCarrusel(this, -1)">‹</button>
      <button class="next" onclick="moverCarrusel(this, 1)">›</button>
    </div>
    <div class="proyecto-info">
      <p><strong>Tipo de cliente:</strong> Empresa</p>
      <p><strong>Muebles:</strong> Recepción y sillas de espera</p>
      <p><strong>Ubicación:</strong> Cali, Valle del Cauca</p>
      <p><strong>Descripción:</strong> Espacio de atención al cliente acogedor y moderno.</p>
      <div class="valoracion">
        <strong>Valoración del cliente:</strong>
        <div class="estrellas"><div class="relleno" style="width: 95%;"></div></div>
        <span>4.8 / 5</span>
      </div>
    </div>
  </div>

  <!-- Puedes seguir agregando más tarjetas aquí... -->

</section>

  
  <?php include('../includes/formulariocontact-pages.php'); ?>
  <?php include('../includes/modal.php'); ?>
  <?php include('../includes/whatsapp.php'); ?>

 
</body>

<footer>
   <?php include('../includes/footer-pages.php'); ?>
</footer>
</html>