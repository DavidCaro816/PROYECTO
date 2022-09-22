const icon_menu = document.getElementById('menu'), sidebar = document.getElementById('sidebar');

icon_menu.addEventListener('click', action_sidebar);

/* Abrir o cerrar la barra de navegación */
function action_sidebar(){
    sidebar.classList.toggle('sidebar_active');
}