let indiceReseña = 0;
let intervaloAuto = null;
document.addEventListener('DOMContentLoaded', () => {
  cargarReseñasDesdeGoogle();
  iniciarAutoCarrusel();
});

function pintarEstrellas() {
  // Estrellas individuales
  const reseñas = document.querySelectorAll('.reseña');
  reseñas.forEach(div => {
    const rating = parseInt(div.dataset.rating);
    let estrellasDiv = div.querySelector('.estrellas');
    if (!estrellasDiv) {
      estrellasDiv = document.createElement('div');
      estrellasDiv.classList.add('estrellas');
      div.insertBefore(estrellasDiv, div.querySelector('.cliente'));
    }
    estrellasDiv.innerHTML = '';
    for (let i = 1; i <= 5; i++) {
      const estrella = document.createElement('span');
      estrella.classList.add('estrella');
      if (i <= rating) estrella.classList.add('llena');
      estrella.innerHTML = '★';
      estrellasDiv.appendChild(estrella);
    }
  });

  // Estrellas del encabezado general
  const headerStars = document.querySelector('.header-stars');
  if (headerStars) {
    const promedio = 4.8; // Cambia si lo sacas dinámico
    headerStars.innerHTML = '';
    for (let i = 1; i <= 5; i++) {
      const estrella = document.createElement('span');
      estrella.classList.add('estrella');
      if (i <= Math.floor(promedio)) {
        estrella.classList.add('llena');
      } else if (i - promedio < 1) {
        estrella.classList.add('media'); // Para media estrella opcional
      }
      estrella.innerHTML = '★';
      headerStars.appendChild(estrella);
    }
  }
}

function cambiarReseña(direccion) {
  const reseñas = document.querySelectorAll('.reseña');
  const puntos = document.querySelectorAll('.punto');
  if (reseñas.length === 0) return;

  reseñas[indiceReseña]?.classList.remove('activa');
  puntos[indiceReseña]?.classList.remove('activo');

  indiceReseña = (indiceReseña + direccion + reseñas.length) % reseñas.length;

  reseñas[indiceReseña].classList.add('activa');
  puntos[indiceReseña].classList.add('activo');

  reiniciarAutoCarrusel();
}

function irAReseña(index) {
  const reseñas = document.querySelectorAll('.reseña');
  const puntos = document.querySelectorAll('.punto');
  if (reseñas.length === 0 || index >= reseñas.length) return;

  reseñas[indiceReseña]?.classList.remove('activa');
  puntos[indiceReseña]?.classList.remove('activo');

  indiceReseña = index;

  reseñas[indiceReseña].classList.add('activa');
  puntos[indiceReseña].classList.add('activo');

  reiniciarAutoCarrusel();
}

function iniciarAutoCarrusel() {
  intervaloAuto = setInterval(() => {
    cambiarReseña(1);
  }, 6000); // cambia cada 6 segundos
}

function reiniciarAutoCarrusel() {
  clearInterval(intervaloAuto);
  iniciarAutoCarrusel();
}

async function cargarReseñasDesdeGoogle() {
  const url = "https://script.google.com/macros/s/AKfycbwdxZeM1qUrrHMAVJmo-fY9BeOcS8pSfrnQqJFjyz7qojZEipa2S5UwAKNRx6X4HivM/exec";
  const respuesta = await fetch(url);
  const datos = await respuesta.json();

  const contenedor = document.querySelector('.contenedor-reseña-activa');
  const puntos = document.querySelector('.puntos-reseñas');
  const ratingDiv = document.querySelector('.rating');
  const headerStars = document.querySelector('.header-stars');

  contenedor.innerHTML = '';
  puntos.innerHTML = '';
  headerStars.innerHTML = '';

  let sumaCalificaciones = 0;

  datos.forEach((dato, i) => {
    const calificacion = parseInt(dato.calificacion);
    sumaCalificaciones += calificacion;

    const div = document.createElement('div');
    div.classList.add('reseña');
    if (i === 0) div.classList.add('activa');
    div.setAttribute('data-rating', calificacion);

    div.innerHTML = `
      <div class="comentario">“${dato.comentario}”</div>
      <div class="cliente">– ${dato.nombre}</div>
    `;

    contenedor.appendChild(div);

    const punto = document.createElement('span');
    punto.classList.add('punto');
    if (i === 0) punto.classList.add('activo');
    punto.setAttribute('onclick', `irAReseña(${i})`);
    puntos.appendChild(punto);
  });

  // Calcula promedio
  const promedio = datos.length ? (sumaCalificaciones / datos.length).toFixed(1) : 0;

  // Actualiza el texto de promedio
  if (ratingDiv) {
    ratingDiv.innerHTML = `${promedio}/5.0 <span class="rating-count">(${datos.length} reseñas)</span>`;
  }

  // Estrellas del encabezado
  for (let i = 1; i <= 5; i++) {
    const estrella = document.createElement('span');
    estrella.innerHTML = '★';
    estrella.style.fontSize = '1.4rem';
    estrella.style.color = i <= Math.round(promedio) ? 'gold' : '#ccc';
    headerStars.appendChild(estrella);
  }

  pintarEstrellas();
}




