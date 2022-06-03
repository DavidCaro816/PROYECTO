document.getElementById('new_button').addEventListener('click',abrir);
document.getElementById('close_modal').addEventListener('click',cerrar);
const new_modal_container = document.getElementById('new');
const new_modal = document.getElementById('new_modal');
function abrir(){
    new_modal_container.classList.add('new-active');
    new_modal.classList.add('new_modal-active');
}

function cerrar(){
    new_modal_container.classList.remove('new-active');
    new_modal.classList.remove('new_modal-active');
}