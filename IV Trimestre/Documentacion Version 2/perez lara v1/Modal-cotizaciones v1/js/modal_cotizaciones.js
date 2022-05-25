const abrir = document.getElementById('new_button');
const cerrar = document.getElementById('boton_cerrar');
const modal = document.getElementById('pantalla');


abrir.addEventListener('click', ()=>{

	modal.classList.add('activa');

});

cerrar.addEventListener('click', ()=>{

	modal.classList.remove('activa');

});