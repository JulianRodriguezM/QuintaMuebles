function abrirModal(ruta) {
  fetch(ruta)
    .then(res => res.text())
    .then(html => {
      document.getElementById('modal-body').innerHTML = html;
      document.getElementById('modal-container').classList.remove('hidden');

      // Activar botón de descarga PDF
      document.getElementById('descargar-pdf').onclick = function () {
        const contenido = document.getElementById('modal-body');
        const nombre = ruta.includes("aviso") ? "Legal.pdf" : (ruta.includes("politica") ? "Privacidad.pdf" : "Terminos.pdf");

        html2pdf().set({
          margin: 10,
          filename: nombre,
          html2canvas: { scale: 2 },
          jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        }).from(contenido).save();
      };
    })
    .catch(err => {
      document.getElementById('modal-body').innerHTML = "<p>Error al cargar el contenido.</p>";
    });
}

function cerrarModal() {
  document.getElementById('modal-container').classList.add('hidden');
}

