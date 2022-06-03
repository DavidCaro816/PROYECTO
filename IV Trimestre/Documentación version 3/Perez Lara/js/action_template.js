const icon_menu = document.getElementById('menu');
const sidebar = document.getElementById('sidebar');
icon_menu.addEventListener('click',action_sidebar);
document.body.addEventListener('click',action_modal);
let copia,modal;

function action_sidebar(){
    sidebar.classList.contains('sidebar-active') ? sidebar.classList.remove('sidebar-active')
        : sidebar.classList.add('sidebar-active');
}

function action_modal(e) {
    if  (document.querySelector('.modal-active') && !e.target.offsetParent.classList.contains('modal') && !e.target.classList.contains('modal')) {
        document.getElementById(document.querySelector('.modal-active').id).classList.remove('modal-active');
        !e.target.parentElement.classList.contains('icon_modal') && !e.target.classList.contains('icon_modal') ? copia = null : copia;
    }
    if (e.target.parentElement.classList.contains('icon_modal') || e.target.classList.contains('icon_modal')) {
        e.target.id ? modal = e.target.id : modal = e.target.parentElement.id;
        document.getElementById(modal + '_modal').classList.add('modal-active');
        if (copia !== modal) {
            copia = modal;
        } else {
            document.getElementById(modal + '_modal').classList.remove('modal-active');
            copia = null;
        }
    }
}