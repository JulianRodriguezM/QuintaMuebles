document.addEventListener('DOMContentLoaded', function() {
    const searchBar = document.getElementById('searchBar');
    const categoryFilter = document.getElementById('categoryFilter');
    const furnitureGrid = document.querySelector('.furniture-grid');
    const furnitureItems = furnitureGrid ? furnitureGrid.querySelectorAll('.furniture-item') : [];

    // Lógica para el modal (asegúrate de que esta parte esté definida)
    const contactModal = document.getElementById('contactModal'); // Asumiendo que tu modal tiene este ID
    const closeButton = document.querySelector('#contactModal .close-button'); // Botón de cerrar dentro del modal

    // Función para abrir el modal
    function openModal() {
        if (contactModal) {
            contactModal.style.display = 'flex'; // Cambia a 'flex' para mostrarlo y centrarlo
            // Si usas clases CSS para controlar la visibilidad y animaciones (e.g., Bootstrap),
            // podrías usar: contactModal.classList.add('show');
        }
    }

    // Función para cerrar el modal
    function closeModal() {
        if (contactModal) {
            contactModal.style.display = 'none'; // Oculta el modal
            // Si usas clases CSS: contactModal.classList.remove('show');
        }
    }

    // Event listener para el botón de cerrar el modal
    if (closeButton) {
        closeButton.addEventListener('click', closeModal);
    }

    // Cerrar el modal al hacer clic fuera del contenido del modal
    if (contactModal) {
        window.addEventListener('click', function(event) {
            if (event.target == contactModal) {
                closeModal();
            }
        });
    }

    function filterFurniture() {
        const searchTerm = searchBar.value.toLowerCase();
        const selectedCategory = categoryFilter.value;

        furnitureItems.forEach(item => {
            const itemName = item.querySelector('h3').textContent.toLowerCase();
            const itemDescription = item.querySelector('p').textContent.toLowerCase();
            const itemCategories = item.className; // Get all classes, including category

            const matchesSearch = itemName.includes(searchTerm) || itemDescription.includes(searchTerm);
            const matchesCategory = selectedCategory === 'all' || itemCategories.includes(selectedCategory);

            if (matchesSearch && matchesCategory) {
                item.style.display = 'block'; // Or 'flex' if your CSS uses flex for grid items
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Add event listeners for filtering
    if (searchBar) {
        searchBar.addEventListener('input', filterFurniture);
    }
    if (categoryFilter) {
        categoryFilter.addEventListener('change', filterFurniture);
    }

    // Functionality for "Solicitar Cotización" button
    document.querySelectorAll('.btn-more-info').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior

            const productName = this.dataset.name; // Get the product name from data-name attribute

            // Elimina esta línea: console.log('Interesado en: ' + productName);
            // Elimina esta línea: alert('¡Gracias por tu interés en ' + productName + '! Por favor, completa nuestro formulario de contacto.');

            // Attempt to pre-fill a field in your contact form (if it exists)
            const productInterestField = document.getElementById('productInterest'); // Assume you have an input with this ID in your contact form
            if (productInterestField) {
                productInterestField.value = 'Interesado en: ' + productName;
            }

            // Llama a la función para abrir el modal directamente
            openModal();

            // Elimina o comenta esta línea, ya no necesitas el "gatillo" oculto
            // const contactModalTrigger = document.getElementById('contactModalTrigger');
            // if (contactModalTrigger) {
            //     contactModalTrigger.click(); // Programmatically click the button that opens the modal
            // }
        });
    });

    // Optional: If you want to initially filter when the page loads (e.g., if you have URL parameters)
    // filterFurniture();
});