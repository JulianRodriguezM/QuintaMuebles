fetch('nav.html')
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

