<?php include('includes/header.php'); ?>
<body>
  <?php include('includes/nav.php'); ?>

  <section class="hero-video">
    <div class="video-background">
      <iframe src="https://www.youtube.com/embed/VoB9bx2iYGw?autoplay=1&mute=1&controls=0&loop=1&playlist=VoB9bx2iYGw&modestbranding=1&showinfo=0&rel=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    </div>
    <div class="overlay-negro"></div>
    <div class="video-overlay">
      <h4>QUINTAMUEBLES</h4>
      <h1>Diseños a la Medida para tu Espacio Ideal</h1>
      <p>Muebles personalizados para hogar y empresas, fabricados con precisión, estilo y compromiso.</p>
      <div class="botones">
        <a href="pages/proyectos.php" class="btn">Ver Proyectos</a>
        <a href="pages/contacto.php" class="btn btn-secundario">Contáctanos</a>
      </div>
    </div>
  </section>

  <section class="seccion-nosotros">
  <div class="contenido-nosotros">
    <div class="imagen">
      <img src="assets/img/general/nosotros.jpeg" alt="Vista aérea de proyecto QuintaMuebles">
    </div>
    <div class="texto">
      <p class="subtitulo">LO NUESTRO</p>
      <h2>Transformamos Espacios con Muebles Únicos</h2>
      <p>En QuintaMuebles creamos soluciones en madera que armonizan con tu estilo. Diseñamos, fabricamos e instalamos mobiliario personalizado para hogares y empresas, cuidando cada detalle desde el concepto hasta la entrega.</p>
      <a href="nosotros.html" class="btn-negro">CONOCE MÁS</a>
    </div>
  </div>
</section>

<section class="mini-estadisticas">
  <div class="contenedor-estadisticas">
    <div class="imagen-estadistica">
      <img src="assets/img/general/COCINA.jpeg" alt="Imagen aérea del proyecto">
    </div>
    <div class="numeros-estadistica">
      <div class="numero">
        <span class="counter-number" data-target="20">0+</span>
        <p>Proyectos Completados</p>
      </div>
      <div class="linea-divisoria"></div>
      <div class="numero">
        <span class="counter-number" data-target="98">0%</span>
        <p>Comentarios Positivos</p>
      </div>
      <div class="boton-estadisticas">
        <a href="pages/proyectos.php" class="btn-negro">VER PROYECTOS</a>
      </div>
    </div>
  </div>
</section>

<section class="features-services-alt-section">
        <div class="container">
              <div class="features-grid-alt">
                <div class="feature-item-alt">
                    <div class="feature-icon-alt">
                        <i class="fas fa-hammer"></i> </div>
                    <h3 class="feature-title-alt">Producción Artesanal</h3>
                    <p class="feature-description-alt">Cada mueble es cuidadosamente elaborado por manos expertas, garantizando calidad y atención al detalle en cada etapa.</p>
                </div>
                <div class="feature-item-alt">
                    <div class="feature-icon-alt">
                        <i class="fas fa-brush"></i> </div>
                    <h3 class="feature-title-alt">Acabados Exclusivos</h3>
                    <p class="feature-description-alt">Ofrecemos una amplia gama de acabados y tratamientos para la madera, personalizando el estilo de tus muebles.</p>
                </div>
                <div class="feature-item-alt">
                    <div class="feature-icon-alt">
                        <i class="fas fa-ruler-combined"></i> </div>
                    <h3 class="feature-title-alt">Muebles a Medida</h3>
                    <p class="feature-description-alt">Diseñamos y fabricamos piezas que se adaptan perfectamente a las dimensiones y estética de tu hogar u oficina.</p>
                </div>
                <div class="feature-item-alt">
                    <div class="feature-icon-alt">
                        <i class="fas fa-seedling"></i> </div>
                    <h3 class="feature-title-alt">Materiales Sostenibles</h3>
                    <p class="feature-description-alt">Comprometidos con el medio ambiente, utilizamos madera de fuentes responsables y procesos ecológicos.</p>
                </div>
            </div>
        </div>
  </section>
<section class="carrusel-trabajos">
  <h2>Más de Nuestro Trabajo</h2>
  <div class="carrusel-contenedor">
    <button class="carrusel-btn prev" onclick="moverCarruselImagenes(-1)">‹</button>
    <div class="carrusel-imagenes">
      <img src="assets/img/general/nosotros.jpeg" alt="Trabajo 1">
      <img src="assets/img/proyectos/Empresa/2.jpeg" alt="Trabajo 2">
      <img src="assets/img/proyectos/casa/1.jpeg" alt="Trabajo 3">
      <img src="assets/img/proyectos/casa/3.jpeg" alt="Trabajo 4">
      <img src="assets/img/proyectos/casa/2.jpeg" alt="Trabajo 5">
    </div>
    <button class="carrusel-btn next" onclick="moverCarruselImagenes(1)">›</button>
  </div>
</section>

<section class="seccion-categorias">
  <div class="contenido-categorias">
    <div class="imagen-categorias">
      <img src="assets/img/proyectos/casa/2.jpeg" alt="Muebles Hogar y Empresa">
    </div>
    <div class="info-categorias">
      <p class="subtitulo">NUESTROS PROYECTOS</p>
      <h2>Soluciones para Hogar y Empresa</h2>

      <div class="categoria">
        <div class="icono">🏠</div>
        <div>
          <h4>Hogar</h4>
          <p>Mobiliario personalizado para dormitorios, salas, comedores y cocinas, con acabados cálidos y funcionales.</p>
        </div>
      </div>

      <div class="categoria">
        <div class="icono">🏢</div>
        <div>
          <h4>Empresa</h4>
          <p>Diseños funcionales para oficinas, recepciones, salas de juntas y estaciones de trabajo que optimizan tus espacios.</p>
        </div>
      </div>

      <a href="#" class="btn-negro" onclick="abrirModalIdeas()">VER IDEAS</a>
    </div>
  </div>
</section>

<section class="seccion-reseñas">
  <div class="reseñas-header">
    <h2>Lo que Dicen Nuestros Clientes</h2>
    <div class="rating-container">
      <div class="estrellas header-stars"></div>
      <div class="rating"></div> <!-- se llena por JS -->
    </div>
  </div>

  <div class="carrusel-reseñas">
    <button class="btn-carrusel" onclick="cambiarReseña(-1)">‹</button>
    <div class="contenedor-reseña-activa"></div>
    <button class="btn-carrusel" onclick="cambiarReseña(1)">›</button>
  </div>

  <div class="puntos-reseñas"></div>

  <div class="reseña-form-btn">
    <a href="https://forms.gle/8dwpCWGMD1tiVGNk7" target="_blank" class="btn-negro">
      DEJA TU RESEÑA
    </a>
  </div>
</section>
  <?php include('includes/modal.php'); ?>
  <?php include('includes/modalIdeas.php'); ?>
  <?php include('includes/formularioContact.php'); ?>
  
  <?php include('includes/whatsapp.php'); ?>
</body>
<footer>
  <?php include('includes/footer.php'); ?>
</footer>
</html>
