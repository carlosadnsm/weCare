document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.deleteButton');
    const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            confirmationModal.show();
        });
    });

    const confirmDeleteButton = document.getElementById('confirmDelete');
    confirmDeleteButton.addEventListener('click', function() {
        
        fetch(`deleteCostumer.php`)
            .then(response => {
                console.log('Item deletado com sucesso');
            })
            .catch(error => {
                console.error('Ocorreu um erro:', error);
            });

    confirmationModal.hide();
    });
});