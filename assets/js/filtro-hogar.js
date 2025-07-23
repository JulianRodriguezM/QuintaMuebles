// filtro-hogar.js
document.addEventListener('DOMContentLoaded', function() {
    const searchBar = document.getElementById('searchBarHogar'); // ID actualizado
    const categoryFilter = document.getElementById('categoryFilterHogar'); // ID actualizado
    const furnitureGrid = document.querySelector('.furniture-grid'); // Este selector puede seguir siendo el mismo si usas la misma clase para la cuadrícula
    const furnitureItems = furnitureGrid ? furnitureGrid.querySelectorAll('.furniture-item') : [];

    // Lógica para el modal (igual que en filtro-oficina.js, ya que el modal es el mismo)
    const contactModal = document.getElementById('contactModal');
    const closeButton = document.querySelector('#contactModal .close-button');
    if (contactModal) {
        contactModal.style.display = 'none'; // Asegura que el modal esté oculto al cargar
    }
    function openModal() {
        if (contactModal) {
            contactModal.style.display = 'flex';
        }
    }

    function closeModal() {
        if (contactModal) {
            contactModal.style.display = 'none';
        }
    }

    if (closeButton) {
        closeButton.addEventListener('click', closeModal);
    }

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
            const itemCategories = item.className;

            const matchesSearch = itemName.includes(searchTerm) || itemDescription.includes(searchTerm);
            const matchesCategory = selectedCategory === 'all' || itemCategories.includes(selectedCategory);

            if (matchesSearch && matchesCategory) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    if (searchBar) {
        searchBar.addEventListener('input', filterFurniture);
    }
    if (categoryFilter) {
        categoryFilter.addEventListener('change', filterFurniture);
    }

    // Funcionalidad para el botón "Solicitar Cotización"
    document.querySelectorAll('.btn-more-info').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            const productName = this.dataset.name;

            const productInterestField = document.getElementById('productInterest');
            if (productInterestField) {
                productInterestField.value = 'Interesado en: ' + productName;
            }

            openModal(); // Abre el modal directamente
        });
    });
});