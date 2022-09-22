const input_search = document.getElementById('input_search'),
    container_icon_clear_search = document.getElementById('container_icon_clear_search');

container_icon_clear_search.addEventListener('click', erase);

/* Borrar contenido de input search */
function erase(){
    input_search.value = null;
}