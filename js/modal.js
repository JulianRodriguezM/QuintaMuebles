function abrirModal(ruta) {
  fetch(ruta)
    .then(res => res.text())
    .then(html => {
      document.getElementById('modal-body').innerHTML = html;
      document.getElementById('modal-container').classList.remove('hidden');
    })
    .catch(err => {
      document.getElementById('modal-body').innerHTML = "<p>Error al cargar el contenido.</p>";
    });
}

function cerrarModal() {
  document.getElementById('modal-container').classList.add('hidden');
}
