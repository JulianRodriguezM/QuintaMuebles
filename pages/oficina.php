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
                // This is where you would dynamically load furniture data.
                // For now, I'll put some static examples.
                // In a real application, you'd fetch this from a database.

                $office_furniture = [
                    [
                        'name' => 'Escritorio Moderno Ergonómico',
                        'image' => '../assets/images/escritorio-moderno.jpg', // Placeholder image path
                        'description' => 'Escritorio con altura ajustable y superficie amplia, ideal para productividad y confort.',
                        'category' => 'desks',
                        'price_info' => 'Consultar precio' // Or actual price if applicable
                    ],
                    [
                        'name' => 'Silla Ejecutiva de Cuero Premium',
                        'image' => '../assets/images/silla-ejecutiva.jpg', // Placeholder image path
                        'description' => 'Silla ergonómica con soporte lumbar avanzado y tapicería de cuero de alta calidad.',
                        'category' => 'chairs',
                        'price_info' => 'Consultar precio'
                    ],
                    [
                        'name' => 'Archivador Metálico de 4 Cajones',
                        'image' => '../assets/images/archivador.jpg', // Placeholder image path
                        'description' => 'Solución de almacenamiento segura y duradera para tus documentos importantes.',
                        'category' => 'storage',
                        'price_info' => 'Consultar precio'
                    ],
                    [
                        'name' => 'Mesa de Conferencia Ovalada',
                        'image' => '../assets/images/mesa-conferencia.jpg', // Placeholder image path
                        'description' => 'Mesa espaciosa para reuniones, con acabado elegante y duradero.',
                        'category' => 'tables',
                        'price_info' => 'Consultar precio'
                    ]
                    // Add more furniture items here
                ];

                foreach ($office_furniture as $item) {
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