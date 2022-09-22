const icon_settings = document.getElementById('icon_settings'),
      link_modal = document.getElementsByClassName('link_modal');
let elemento;
/* Agregación de evento clic para abrir y cerrar modales */
document.body.addEventListener('click',modal)

/* Agregación de evento clic para cerrar modal con sus links */
Array.from(link_modal).forEach((e)=>{
    e.addEventListener('click',cerrar);
})

/* Función para abrir y cerrar modales */
function modal(e) {
    const modal = document.querySelector('.modal_active'),
          select = document.querySelector('.select_active'),
          icon = e.target.parentElement.classList.contains('icon_modal') || e.target.classList.contains('icon_modal');

    /* Abrir o cerrar modal si se dio clic al icono */
    if (icon) {
        e.target.classList.contains('icon_modal') ? elemento = e.target.id : elemento = e.target.parentElement.id;
        document.getElementById(elemento + '_modal').classList.add('modal_active');
        if (document.getElementById(elemento).classList.contains('select') && !document.getElementById(elemento).classList.contains('date')) {
            document.getElementById(elemento).classList.add('select_active');
        }
    }

    /* Cerrar modal si está activo */
    if (modal) {
        if (select) {
            modal.classList.remove('modal_active');
            select.blur();
            select.classList.remove('select_active');
        } else if (!e.target.offsetParent.classList.contains('modal') && !e.target.classList.contains('modal')) {
            modal.classList.remove('modal_active');
        }
    }
}

/* Función para cerrar modales con contenido particular */
function cerrar(){
    document.querySelector('.modal_active').classList.remove('modal_active');
}