const tbody = document.getElementById('tbody'),
    context_menu = document.getElementById('context_menu'),
    btn_edit = document.getElementById('edit'),
    btn_delete = document.getElementById('delete'),
    true_confirm = document.getElementById('true_confirm');
btn_edit.addEventListener('click', editar);
true_confirm.addEventListener('click',eliminar);

tbody.addEventListener('contextmenu', open_context_menu);

document.body.addEventListener('click', close_context_menu);

function first_word(string){
    return string.substring(0, string.indexOf(' '));
}

function following_words(string){
    return string.substring(string.indexOf(' ') + 1, string.length);
}

/* Abrir menú contextual*/
function open_context_menu(e){
    e.preventDefault();
    context_menu.classList.add('context_menu_active');
    context_menu.style.top = e.clientY + context_menu.offsetHeight > window.innerHeight
        ? window.innerHeight - context_menu.offsetHeight - 1 + 'px'
        : e.clientY + 'px';
    context_menu.style.left = e.clientX + context_menu.offsetWidth > window.innerWidth
        ? window.innerWidth - context_menu.offsetWidth + 'px'
        : e.clientX + 'px';
    context_menu.dataset.rel = following_words(e.target.closest('tr').firstElementChild.innerHTML);
}

/* Cerrar menú contextual*/
function close_context_menu(){
    if (document.getElementsByClassName('context_menu_active')[0]) {
        context_menu.classList.remove('context_menu_active');
    }
}