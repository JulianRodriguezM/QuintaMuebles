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
                // Datos de ejemplo para productos del hogar
                $home_furniture = [
                    [
                        'name' => 'Sofá Modular Confort',
                        'image' => '../assets/images/sofa-modular.jpg', // Cambia por tus imágenes de hogar
                        'description' => 'Sofá adaptable y cómodo, perfecto para cualquier sala de estar.',
                        'category' => 'salas',
                        'price_info' => 'Consultar precio'
                    ],
                    [
                        'name' => 'Mesa de Comedor de Madera Maciza',
                        'image' => '../assets/images/mesa-comedor.jpg', // Cambia por tus imágenes de hogar
                        'description' => 'Elegante mesa de comedor para 6 personas, ideal para reuniones familiares.',
                        'category' => 'comedores',
                        'price_info' => 'Consultar precio'
                    ],
                    [
                        'name' => 'Cama Queen Size con Cabecero Tapizado',
                        'image' => '../assets/images/cama-queen.jpg', // Cambia por tus imágenes de hogar
                        'description' => 'Cama moderna con cabecero suave y estructura robusta.',
                        'category' => 'dormitorios',
                        'price_info' => 'Consultar precio'
                    ],
                    [
                        'name' => 'Mueble de Cocina Modular',
                        'image' => '../assets/images/mueble-cocina.jpg', // Cambia por tus imágenes de hogar
                        'description' => 'Solución de almacenamiento versátil para cocinas modernas.',
                        'category' => 'cocinas',
                        'price_info' => 'Consultar precio'
                    ]
                    // Añade más productos de hogar aquí
                ];

                foreach ($home_furniture as $item) {
                    echo '<div class="furniture-item ' . htmlspecialchars($item['category']) . '">';
                    echo '<img src="' . htmlspecialchars($item['image']) . '" alt="' . htmlspecialchars($item['name']) . '">';
                    echo '<h3>' . htmlspecialchars($item['name']) . '</h3>';
                    echo '<p>' . htmlspecialchars($item['description']) . '</p>';
                    echo '<div class="price">' . htmlspecialchars($item['price_info']) . '</div>';
                    echo '<a href="#" class="btn-more-info" data-name="' . htmlspecialchars($item['name']) . '">Solicitar Cotización</a>';
                    echo '</div>';
                }
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