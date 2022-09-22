const input = document.querySelectorAll('.input:not(.select)'), option = document.getElementsByClassName('option');

input.forEach((e) => {
    e.addEventListener('blur', blur);
})

Array.from(option).forEach((e) => {
    e.addEventListener('click', choose);
})

/* Escoger una opción de un select */
function choose(e){
    let id = e.target.closest('.modal').id;
    document.getElementById('label_' + id).classList.add('label_active');
    document.getElementById('selected_' + id).classList.add('label_selected_active');
    document.getElementById('selected_' + id).dataset.selected = e.target.dataset.id;
    document.getElementById('selected_' + id).innerText = e.target.textContent;
}

/* Desenfocar un input*/
function blur(e){
    e.target.value.length > 0 ? document.getElementById('label_' + e.target.id).classList.add('label_active')
                              : document.getElementById('label_' + e.target.id).classList.remove('label_active');
}