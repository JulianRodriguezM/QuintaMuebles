<?php include('../includes/header.php'); ?>
<body>
    <?php include('../includes/nav-pages.php'); ?>

    <section class="hero-section">
    <div class="overlay">
        <h1>Oficina</h1>
        <p><a href="../index.php">INICIO</a> › PRODUCTOS PARA OFICINA</p>
    </div>
    </section>

    <section class="office-furniture-section">
        <div class="container">
            <h2>Nuestra Colección de Mobiliario de Oficina</h2>
            <p>Descubre nuestra amplia gama de muebles diseñados para transformar tu espacio de trabajo en un entorno productivo y confortable.</p>

            <div class="filters-and-search">
                <input type="text" id="searchBar" placeholder="Buscar muebles...">
                <select id="categoryFilter">
                    <option value="all">Todas las Categorías</option>
                    <option value="desks">Escritorios</option>
                    <option value="chairs">Sillas</option>
                    <option value="storage">Almacenamiento</option>
                    <option value="tables">Mesas de Reunión</option>
                </select>
            </div>

            <div class="furniture-grid">
                <?php
                // Incluir el archivo de conexión a la base de datos
                include('../includes/db_conn.php');

                // Consulta para obtener productos de OFICINA
                $sql = "SELECT nombre, descripcion, imagen_url, categoria, precio_info FROM productos WHERE tipo = 'oficina'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Recorrer los resultados y mostrarlos
                    while($item = $result->fetch_assoc()) {
                        echo '<div class="furniture-item ' . htmlspecialchars($item['categoria']) . '">';
                        echo '<img src="' . htmlspecialchars($item['imagen_url']) . '" alt="' . htmlspecialchars($item['nombre']) . '">';
                        echo '<h3>' . htmlspecialchars($item['nombre']) . '</h3>';
                        echo '<p>' . htmlspecialchars($item['descripcion']) . '</p>';
                        echo '<div class="price">' . htmlspecialchars($item['precio_info']) . '</div>';
                        echo '<a href="#" class="btn-more-info" data-name="' . htmlspecialchars($item['nombre']) . '">Solicitar Cotización</a>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>No hay productos de oficina disponibles en este momento.</p>";
                }

                // Cerrar la conexión a la base de datos
                $conn->close();
                ?>
            </div>
        </div>
    </section>


  <?php include('../includes/modalcontact.php'); ?>
  <?php include('../includes/modal.php'); ?>
  <?php include('../includes/whatsapp.php'); ?>

 
</body>

<footer>
   <?php include('../includes/footer-pages.php'); ?>
</footer>
</html>