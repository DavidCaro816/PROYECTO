const icon_menu = document.getElementById('menu'),
      settings = document.getElementById('settings'),
      sidebar = document.getElementById('sidebar'),
      icon_sidebar = document.getElementsByClassName('icon_sidebar');
let element;

/* Agregación de eventos clic para abrir o cerrar la barra de navegación */
icon_menu.addEventListener('click',action_sidebar);

/* Agregación de evento clic para activar o desactivar la animación del icono del modal de configuración */
settings.addEventListener('click',action_settings);

/* Agregación de eventos --> Mouse encima/sale del elemento */
Array.from(icon_sidebar).forEach((e)=>{
    e.addEventListener('mouseover',activo);
    e.addEventListener('mouseout',inactivo);
    e.addEventListener('click',inactivo);
})

/* Función para determinar si se abre o cierra la barra de navegación */
function action_sidebar(){
    sidebar.classList.toggle('sidebar_active');
}

function action_settings(){
    icon_settings.classList.contains('activo') ? icon_settings.classList.add('inactivo') : icon_settings.classList.remove('inactivo');
    icon_settings.classList.toggle('activo');
}

/* Función para mostrar el título del icono de la barra de navegación*/
function activo(e){
    if(!sidebar.classList.contains('sidebar_active')){
        e.target.classList.contains('icon_sidebar') ? element = e.target.id : element = e.target.parentElement.id;
        document.getElementById(element + '_title').classList.add('title_page_active');
    }
}

/* Función para ocultar el título del icono de la barra de navegación*/
function inactivo(){
    document.getElementById(element + '_title').classList.remove('title_page_active');
}