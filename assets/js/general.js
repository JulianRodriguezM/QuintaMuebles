fetch('nav.php')
  .then(response => response.text())
  .then(data => {
    console.log("Nav cargado correctamente"); // 👈 Esto te ayudará a depurar
    document.getElementById('navbar-container').innerHTML = data;

    const path = window.location.pathname.split("/").pop();
    const links = document.querySelectorAll('.nav-links a');

    links.forEach(link => {
      if (link.getAttribute('href') === path) {
        link.classList.add('active');
      }
    });
  })
  .catch(err => console.error("Error cargando navbar:", err)); // 👈 Esto te mostrará si falla

fetch('footer.php') // Ajusta la ruta si es necesario
  .then(res => res.text())
  .then(html => {
    document.getElementById('footer').innerHTML = html;
  });


fetch('modal.php') // Ajusta la ruta si es necesario
  .then(res => res.text())
  .then(html => {
    document.getElementById('modal').innerHTML = html;
  });

fetch('whatsapp.php') // Ajusta la ruta si es necesario
  .then(res => res.text())
  .then(html => {
    document.getElementById('whatsapp').innerHTML = html;
  });

fetch('formulariocontact.php') // Ajusta la ruta si es necesario
  .then(res => res.text())
  .then(html => {
    document.getElementById('contact').innerHTML = html;
  });

function moverCarrusel(button, direction) {
  const carousel = button.closest('.carousel');
  const container = carousel.querySelector('.carousel-images');

  const imagen = container.querySelector('img');
  const width = imagen.offsetWidth + 10; // Ancho de imagen + margen o padding

  container.scrollBy({
    left: direction * width,
    behavior: 'smooth'
  });
}


let desplazamiento = 0;

function moverCarruselImagenes(direccion) {
  const carrusel = document.querySelector('.carrusel-imagenes');
  const imagen = carrusel.querySelector('img');
  const ancho = imagen.offsetWidth + 20; // imagen + gap
  const total = carrusel.scrollWidth;
  const visible = carrusel.offsetWidth;

  desplazamiento += direccion * ancho;

  // Limita el desplazamiento
  desplazamiento = Math.max(0, Math.min(desplazamiento, total - visible));

  carrusel.scrollTo({
    left: desplazamiento,
    behavior: 'smooth'
  });
}

function abrirModalIdeas() {
  document.getElementById('modal-ideas').style.display = 'flex';
}

function cerrarModalIdeas() {
  document.getElementById('modal-ideas').style.display = 'none';
}

// También cerramos si se hace clic fuera del modal
window.addEventListener('click', function (e) {
  const modal = document.getElementById('modal-ideas');
  if (e.target === modal) {
    cerrarModalIdeas();
  }
});


