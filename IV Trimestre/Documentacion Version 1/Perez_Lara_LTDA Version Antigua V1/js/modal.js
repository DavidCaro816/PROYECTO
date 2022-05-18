const botonAbrir = document.getElementById('abrir');
const botonCerrar =document.getElementById('cerrar');
const opacidad =document.getElementById('body');
const modal =document.getElementById('modal');

botonAbrir.addEventListener('click',()=>{
    modal.classList.add('abrirModal');
    opacidad.classList.add('opacidad');
})

botonCerrar.addEventListener('click', ()=>{
    modal.classList.remove('abrirModal');
})


