// Funciones para el Modal de Eliminación
document.addEventListener('DOMContentLoaded', function() {
    // Función para abrir el modal
    window.abrirModalEliminar = function() {
        const modal = document.getElementById('modalEliminar');
        if (modal) {
            modal.style.display = 'block';
        }
    };

    // Función para cerrar el modal
    window.cerrarModalEliminar = function() {
        const modal = document.getElementById('modalEliminar');
        if (modal) {
            modal.style.display = 'none';
        }
    };

    // Cerrar el modal si se hace clic fuera de él
    window.onclick = function(event) {
        const modal = document.getElementById('modalEliminar');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
}); 