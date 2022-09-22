const form = document.getElementById('new_modal');
form.addEventListener('submit', create);

document.querySelectorAll('[data-toggle="modal2"]').forEach((e) => {
    e.addEventListener('click', open_modal2);
})

document.querySelectorAll('[data-dismiss="modal2"]').forEach((e) => {
    e.addEventListener('click', close_modal2);
})

function open_modal2(e){
    const elemento = e.target.closest("[data-toggle=\"modal2\"]").dataset.target;
    document.getElementById(elemento).classList.add('backdrop_active');
    document.getElementById(document.getElementById(elemento).firstElementChild.id).classList.add('modal2_active');

}

function close_modal2(){
    document.getElementsByClassName('modal2_active')[0].classList.remove('modal2_active');
    document.getElementsByClassName('backdrop_active')[0].classList.remove('backdrop_active');
}