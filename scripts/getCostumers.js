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
    // Aqui você pode colocar a lógica para executar a exclusão
    // Por exemplo: fazer uma chamada AJAX para excluir um item do banco de dados
    // Depois de confirmado, você pode fechar o modal
    confirmationModal.hide();
    });
});