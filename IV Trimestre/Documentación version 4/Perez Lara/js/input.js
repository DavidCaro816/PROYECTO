const input = document.getElementsByClassName('input');
const option = document.getElementsByClassName('option');

/* Agregación de eventos de enfoque y desenfoque para mostrar titulos de inputs */
Array.from(input).forEach((e)=>{
    if(!e.classList.contains('select')){
        e.addEventListener('focus',focus);
        e.addEventListener('blur',blur);
    }
})

/* Agregación de evento clic para escoger opción de un select */
Array.from(option).forEach((e)=>{
    e.addEventListener('click',choose);
})

/* Función para escoger opción de un select */
function choose(e){
    let id = e.target.offsetParent.id;
    id = id.substring(0,id.indexOf('_'));
    document.getElementById('label_'+id).classList.add('label_active');
    document.getElementById('selected_'+id).classList.add('label_selected_active');
    document.getElementById('selected_'+id).innerText = e.target.textContent;
}

/* Función de enfoque de un input */
function focus(e){
    document.getElementById('label_'+e.target.id).classList.add('label_active');
}

/* Función de desenfoque de un input */
function blur(e){
    if(e.target.value.length === 0){
        document.getElementById('label_' + e.target.id).classList.remove('label_active');
    }
}

