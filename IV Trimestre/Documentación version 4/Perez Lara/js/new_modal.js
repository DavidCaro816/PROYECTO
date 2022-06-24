const new_modal_container = document.getElementById('new'),
      new_modal = document.getElementById('new_modal');

/* Agregación de eventos clic para abrir y cerrar modal 'Nuevo' */
document.getElementById('new_button').addEventListener('click',abrir);
document.getElementById('close_modal').addEventListener('click',cerrar);

/* Función para abrir el modal 'Nuevo' */
function abrir(){
    new_modal_container.classList.add('new_active');
    new_modal.classList.add('form_active');
}

/* Función para cerrar el modal 'Nuevo' */
function cerrar(){
    new_modal_container.classList.remove('new_active');
    new_modal.classList.remove('form_active');
}