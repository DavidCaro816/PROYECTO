const icon_settings = document.getElementById('icon_settings');
let elemento;

document.body.addEventListener('click', action_modal)

/* Abrir y cerrar modales */
function action_modal(e){
    const modal = document.getElementsByClassName('modal_active')[0],
    select = Array.from(document.getElementsByClassName('select')).find((e)=>e.dataset.visible);
    /* Abrir o cerrar modal si se dio clic al icono */
    if (e.target.closest('[data-toggle="modal"]')) {
        elemento = e.target.closest("[data-toggle=\"modal\"]");
        if (elemento.classList.contains('select')) {
            elemento.dataset.visible = 'true';
        }
        if (elemento.dataset.target === 'settings_modal') {
            icon_settings.classList.add('activo');
            icon_settings.classList.remove('inactivo');
        }
        document.getElementById(elemento.dataset.target).classList.add('modal_active');
    }
    /* Cerrar modal si está activo */

    if (modal) {
        if(select){
            if(!select.dataset.multiple){
                select.blur();
                modal.classList.remove('modal_active');
                delete select.dataset.visible;
            }else{
                if(e.target.closest('.modal')){
                    select.focus();
                }else{
                    select.blur();
                    delete select.dataset.visible;
                }
            }
        }
        if (!e.target.closest('.modal') || e.target.closest('.link_modal')) {
            modal.classList.remove('modal_active');
            if (elemento.dataset.target === 'settings_modal') {
                icon_settings.classList.add('inactivo');
                icon_settings.classList.remove('activo');
            }
        }
    }
}