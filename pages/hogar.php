<?php include('../includes/header.php'); ?>
<body>
  <?php include('../includes/nav-pages.php'); ?>

    <section class="hero-section">
    <div class="overlay">
        <h1>Hogar</h1>
        <p><a href="../index.php">INICIO</a> › PRODUCTOS PARA EL HOGAR. HOLA</p>
    </div>
    </section>
    
    <section class="home-furniture-section">
        <div class="container">
            <h2>Nuestra Colección de Mobiliario para el Hogar</h2>
            <p>Descubre nuestra amplia gama de muebles diseñados para transformar tu hogar en un espacio acogedor y funcional.</p>

            <div class="filters-and-search">
                <input type="text" id="searchBarHogar" placeholder="Buscar muebles para el hogar...">
                <select id="categoryFilterHogar">
                    <option value="all">Todas las Categorías</option>
                    <option value="salas">Salas</option>
                    <option value="comedores">Comedores</option>
                    <option value="dormitorios">Dormitorios</option>
                    <option value="cocinas">Cocinas</option>
                    </select>
            </div>

            <div class="furniture-grid">
                <?php
                // Incluir el archivo de conexión a la base de datos
                include('../includes/db_conn.php');

                // Consulta para obtener productos de OFICINA
                $sql = "SELECT nombre, descripcion, imagen_url, categoria, precio_info FROM productos WHERE tipo = 'hogar'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Recorrer los resultados y mostrarlos
                    while($item = $result->fetch_assoc()) {
                        $precioNumerico = (float)$item['precio_info'];
                        echo '<div class="furniture-item ' . htmlspecialchars($item['categoria']) . '">';
                        echo '<img src="' . htmlspecialchars($item['imagen_url']) . '" alt="' . htmlspecialchars($item['nombre']) . '">';
                        echo '<h3>' . htmlspecialchars($item['nombre']) . '</h3>';
                        echo '<p>' . htmlspecialchars($item['descripcion']) . '</p>';
                        if (is_numeric($item['precio_info'])) { // Verifica si el valor es numérico antes de formatear
                            $precioFormateado = number_format($precioNumerico, 2, ',', '.'); // 2 decimales, coma para decimal, punto para miles
                            echo '<div class="price">$ ' . htmlspecialchars($precioFormateado) . '</div>';
                        } else {
                            // Si no es un número (ej. "Consultar precio"), mostrarlo como está
                            echo '<div class="price">' . htmlspecialchars($item['precio_info']) . '</div>';
                        }
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